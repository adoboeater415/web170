<?php get_header(); ?>
           
           <!-- main content -->
            <div id="content">
            
               <!-- this loop only works if I created a WordPress content -->
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <article id="article-<?php the_ID(); ?>" class="article">
                	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                	<small>Posted on <?php the_time('F, j, y'); ?> by Pierre D. in <?php the_category(); ?>.</small>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(icon);?></a>
               		<p><?php echo get_the_excerpt(); ?><a href="<?php the_permalink(); ?>">Full Story&nbsp;&raquo;</a></p>
                </article>
                
                <?php endwhile; endif ?>
                <small>index.php</small>
                
            </div>
            <!-- main content ends -->
            
            <?php get_sidebar(); ?>
            
<?php get_footer(); ?>