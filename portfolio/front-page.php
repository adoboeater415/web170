<?php get_header(); ?>
           
           <!-- main content -->
            <div id="widgets">
            
               <!-- this loop only works if I created a WordPress content -->
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <small>Posted on <?php the_time('F, j, y'); ?> by Pierre D. in <?php the_category(); ?>.</small>
                <?php the_content(); ?>
                <?php endwhile; endif ?>
                <small>front-page.php</small>
                
            </div>
            <!-- main content ends -->
            
            <?php get_sidebar(); ?>
            
<?php get_footer(); ?>