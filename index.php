<?php get_header(); ?>

<main class="site-main">
    <div class="wrapper">
        <?php 
        // Проверяем, есть ли контент на странице
        if (is_page()) :
            // Выводим контент страницы
            while (have_posts()) : the_post(); 
                the_content(); 
            endwhile; 
        endif; 
        ?>
    </div>
</main>

<?php get_footer(); ?>