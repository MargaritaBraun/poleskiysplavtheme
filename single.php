<?php
/*
 Template Name: Cтраница новости
 */
?>

<h1>
Loop
</h1>
<?php
get_header(); // подключаем заголовок

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile;
else :
    echo '<p>Запись не найдена.</p>';
endif;
get_footer(); // подключаем подвал
?>