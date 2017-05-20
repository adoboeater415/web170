<?php get_header(); ?>
           
           <!-- flexslider starts here -->
           
           <!-- flexslider ends here -->
           
           <!-- main content -->
            <div id="widgets">
            
               <!-- this loop only works if I created a WordPress content -->
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
                <?php endwhile; endif ?>
                <small>front-page.php</small>
                
            </div>
            <!-- main content ends -->
            
<?php get_footer(); ?>