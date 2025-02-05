<?php

add_action('wp_enqueue_scripts', function () {

    // <link href="" rel="stylesheet">
    wp_enqueue_style('google-font-Inter-Tight', 'https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('google-font-Ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

    // Подключаем стили темы
    wp_enqueue_style('variables-css', get_template_directory_uri() . '/assets/css/variables.css');
    wp_enqueue_style('base-css', get_template_directory_uri() . '/assets/css/base.css');
    wp_enqueue_style('header-css', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footer-css', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('posts-css', get_template_directory_uri() . '/assets/css/posts-news.css');
    wp_enqueue_style('about-css', get_template_directory_uri() . '/assets/css/about.css');
    wp_enqueue_style('services-css', get_template_directory_uri() . '/assets/css/services.css');
    wp_enqueue_style('reserveYourTrip-css', get_template_directory_uri() . '/assets/css/reserveYourTrip.css');

    // // Отменяем стандартный jQuery и подключаем его с Google CDN
    // wp_deregister_script( 'jquery' );
    // wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true );
    // wp_enqueue_script( 'jquery' );

    // Подключаем основной скрипт темы
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
});

// add_editor_style( get_template_directory_uri() . '/assets/css/editor-style.css' );
// Добавляем поддержку функций темы
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

add_theme_support('title-tag');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('html5', array('search-form', 'gallery', 'caption'));
register_nav_menus(array(
    'primary' => __('Primary Menu', 'textdomain'),
));

// Добавляем preconnect
function my_theme_preconnect()
{
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

add_action('wp_head', 'my_theme_preconnect');
?>
<?php
function mytheme_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sidebar', 'textdomain'),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside class="widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');

?>

<?php

// Добавление страниц опций
if (function_exists("acf_add_options_page")) {
    // Настройки сайта
    acf_add_options_page(array(
        "page_title" => "Настройки сайта",
        "menu_title" => "Настройки сайта",
        "menu_slug"  => "theme_settings",
    ));
}

// Установка значений по умолчанию для полей
add_filter('acf/load_value', function ($value, $post_id, $field) {
    if ($post_id === 'options') {
        switch ($field['name']) {
            case 'site_name':
                return $value ? $value : esc_html__('Default Site Name', 'textdomain');
            case 'site_phone':
                return $value ? $value : esc_html__('Default Phone', 'textdomain');
                // Добавьте другие поля для настроек сайта по мере необходимости
        }
    }
    return $value;
}, 10, 3);
?>

<?php
function create_services_post_type()
{
    register_post_type(
        'services',
        array(
            'labels' => array(
                'name' => __('Услуги'),
                'singular_name' => __('Услуга')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-hammer', // Иконка в админке
        )
    );
}

add_action('init', 'create_services_post_type');

function register_service_tags()
{
    register_taxonomy('service_tag', 'services', array( // Изменено на 'services'
        'labels' => array(
            'name' => 'Метки услуг',
            'singular_name' => 'Метка услуги',
            'search_items' => 'Поиск меток',
            'all_items' => 'Все метки',
            'edit_item' => 'Редактировать метку',
            'update_item' => 'Обновить метку',
            'add_new_item' => 'Добавить новую метку',
            'new_item_name' => 'Название новой метки',
            'menu_name' => 'Метки услуг',
        ),
        'hierarchical' => false, // Сделать неиерархической (теги)
        'public' => true,
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
    ));
}

add_action('init', 'register_service_tags');



?>
