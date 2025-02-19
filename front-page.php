<?php
/*
 Template Name: Домашняя страница
 */
?>

<?php get_header(); ?>
<main class="site-main">
    <div class="wrapper">
        <?php get_template_part('about'); ?>
        <?php get_template_part('services'); ?>
        <?php get_template_part('news'); ?>
        <?php get_template_part('reserveYourTrip'); ?>

    </div>
</main>

<?php get_footer(); ?>