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


<?php
$text_content = get_field("text-my"); // или просто get_field("text-23") для обычных постов либо get_field("text-23", "option")
if ($text_content): ?>
    <p class="text-header">Дополнительные услуги: <?php echo esc_html($text_content); ?></p>
<?php else: ?>
    <p class="text-header">Дополнительные услуги: Нет данных</p>
<?php endif; ?>
<?php get_footer(); ?>