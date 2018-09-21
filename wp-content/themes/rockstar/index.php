<?php
    function get_uploads_dir() {
        $upload_dir = wp_upload_dir();
        return $upload_dir['baseurl'];
    }
?>

<?php get_header(); ?>

    <div id="main-container">
        <img class="hamburger-menu" src="<?php echo get_template_directory_uri(); ?>/img/hamburger-white.svg" alt="hamburger">
        <main id="intro">
            <div class="intro-left">
                <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Matt Fewer Web Developer">
                <h2>Developer | Musician | Educator</h2>
            </div>
            <div class="intro-right">
                <img id="main-img" src="<?php echo get_uploads_dir(); ?>/ga_headshot-edit.png" alt="Matt Fewer Web Developer">
            </div>
        </main>
    </div>

    <!-- <?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

    <?php endwhile;
    endif;
    ?> -->


<!-- <?php get_sidebar(); ?> -->

<?php get_footer(); ?>


</div>
