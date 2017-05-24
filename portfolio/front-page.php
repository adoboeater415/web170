<?php get_header(); ?>
           
            <!-- flexslider here -->
            <div class="flexslider">
                
                <ul class="slides">
                
                    <li><img src="<?php bloginfo('template_directory') ?>/images/troops.jpg" /></li>
                    <li><img src="<?php bloginfo('template_directory') ?>/images/waves.jpg" /></li>
                    <li><img src="<?php bloginfo('template_directory') ?>/images/background.jpg" /></li>
            
                </ul>
            
            </div>
            <!-- end of flexslider -->
           
            <!-- main content -->
            <div id="widgets">
            
              	<!-- left side section -->
                <section id="widgets-item">
                
                	<h2>Left Side Awesomeness</h2>
                	
	                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	                
	                <article id="article-<?php the_ID(); ?>" class="article">
	                	<?php the_content(); ?>
	                </article>
                
                	<?php endwhile; endif; ?>
               
                	<small>front-page.php</small>
                
            	</section>
            	<!-- left side section ends -->
            
            	<!-- right side section -->
            	<section id="widgets-item">
            	
            		<h2>Right Side Awesomeness</h2>
            		
					<ul>
						
						<?php rewind_posts(); ?>
						
						<?php query_posts(array('category_name' => 'news', 'posts_per_page' => 4 )); ?>
						
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
							<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small>
						</li>
						
						<?php endwhile; endif; ?>
						
					</ul>
					
					<h2>Latest Articles:</h2>
					
						<ul>
							
							<?php rewind_posts(); ?>
							
							<?php query_posts(array('category_name' => 'articles', 'posts_per_page' => 4)); ?>
							
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small></li>
							
							<?php endwhile; endif; ?>
							
						</ul>
            		
            	</section>
            	<!-- right side content ends -->
                
            </div>
            <!-- main content ends -->
            
<?php get_footer(); ?>