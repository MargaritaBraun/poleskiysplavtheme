<?php
/*
 Template Name: Cтраница новости
 */
?>
<?php get_header(); // подключаем заголовок
?>

<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>

            <?php
            // Вызов wp_link_pages
            wp_link_pages(array(
                'before' => '<div class="page-links">' . poleskiysplavtheme('Pages:'),
                'after'  => '</div>',
            ));
            ?>
        </div>
<?php endwhile;
else :
    echo '<p>Запись не найдена.</p>';
endif;

get_footer(); // подключаем подвал
?>