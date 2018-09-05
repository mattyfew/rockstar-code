<?php get_header(); ?>


    <!-- <section id="intro">
        <div>
            <h1>Matt Fewer</h1>
            <h2>Developer | Musician | Educator</h2>
        </div>
        <div>
            <img id="mattfewer" src="<?php echo get_template_directory_uri(); ?>/img/mattfewer.JPG" alt="Matt Fewer Web Developer">
        </div>
    </section> -->

    <?php
        if( have_posts() ):
            while( have_posts() ): the_post(); ?>

                <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile;
        endif;
    ?>


<?php get_footer(); ?>
