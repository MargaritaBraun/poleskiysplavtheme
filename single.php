<?php
/*
 Template Name: Cтраница новости
 */
?>

<?php get_header('minimal'); // Подключаем минималистичный заголовок ?>

<main id="main" class="site-main" role="main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>

                <?php
                // Вызов wp_link_pages
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'text-domain'),
                    'after'  => '</div>',
                ));
                ?>
            </div>
        <?php endwhile;
    else :
        echo '<p>' . __('Запись не найдена.', 'text-domain') . '</p>';
    endif;
    ?>
</main>

<?php get_footer(); // Подключаем подвал ?>