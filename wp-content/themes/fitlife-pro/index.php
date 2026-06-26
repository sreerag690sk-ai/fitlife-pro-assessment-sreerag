<?php
get_header();
?>

<main id="main-content">
    <?php if(have_posts()) : while(have_posts()) ;the_post(); ?>

    <?php endwhile; endif; ?>
</main>

<?php the_content(); ?>

<?php get_footer();
?>