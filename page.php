<?php
/*
Temlate Name: Glavni templajt

*/
?>

<?php get_header(); ?>


<!-- rightSidebar -->
<section class="container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>

    <?php endwhile; else : ?>
    <?php echo('Nema unetih stranica'); ?>
    <?php endif; ?>


</section>
<?php get_footer(); ?>
