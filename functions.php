<?php
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'google-font-Ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap' );

    // Подключаем стили темы
    wp_enqueue_style( 'variables-css', get_template_directory_uri() . '/assets/css/variables.css' );
    wp_enqueue_style( 'base-css', get_template_directory_uri() . '/assets/css/base.css' );
    wp_enqueue_style( 'header-css', get_template_directory_uri() . '/assets/css/header.css' );
    wp_enqueue_style( 'posts-css', get_template_directory_uri() . '/assets/css/posts-news.css' );

    // Отменяем стандартный jQuery и подключаем его с Google CDN
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true );
    wp_enqueue_script( 'jquery' );

    // Подключаем основной скрипт темы
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
});

// Добавляем поддержку функций темы
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

// Добавляем preconnect
function my_theme_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

add_action( 'wp_head', 'my_theme_preconnect' );
?>

<!-- <?php
if (function_exists("acf_add_options_page")) {
    acf_add_options_page(array(
        "page_title" => "Настройки сайта",
        "menu_title" => "Настройки сайта",
        "menu_slug"  => "theme_settings",
    ));
}
?> -->