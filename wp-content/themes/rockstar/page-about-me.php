<?php get_header(); ?>





<div id="main-container">
    <h1><?php wp_title(''); ?></h1>

    <p><?php the_content(); ?></p>

    <?php
        if( have_posts() ):
            while( have_posts() ): the_post(); ?>
                <p><?php the_content(); ?></p>
            <?php endwhile;
        endif; ?>
</div>
























<?php get_footer(); ?>
