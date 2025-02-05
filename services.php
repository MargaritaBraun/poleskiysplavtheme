<?php

function render_difficulty_icons($level)
{
    $max_level = 5; // Максимальный уровень сложности
    $html = '<div class="difficulty-level">';

    for ($i = 1; $i <= $max_level; $i++) {
        // Определяем цвет для заполненных и незаполненных иконок
        $icon_color = ($i <= $level) ? 'gold' : 'lightgray';

        // SVG-код с добавлением стиля для цвета
        $html .= '<svg fill="' . $icon_color . '" version="1.1" xmlns="http://www.w3.org/2000/svg" 
            width="24" height="24" viewBox="0 0 503.924 503.924">
            <g>
                <g>
                    <path d="M193.932,339.267c15.08,4.858,17.193-0.373,8.568-13.664c-14.736-22.721-28.104-64.069,1.473-125.872
                        c31.652-66.89,75.525-93.502,83.433-94.946c6.302-1.147-43.28,74.683-45.604,114.463c-1.052,17.93,27.043,31.375,43.959,20.894
                        c21.793-13.512,20.177-56.801,19.632-63.428c-0.641-7.717,41.291,95.616-10.06,152.254c-10.644,11.743-9.343,17.796,6.101,14.239
                        c30.218-6.952,74.626-27.272,81.645-86.665c6.761-83.548-69.901-201.196-118.192-250.337c-11.102-11.303-16.572-6.55-16.027,9.285
                        c0.812,23.801-6.618,60.808-45.594,103.667c-61.114,67.205-74.855,80.354-83.079,135.941
                        C120.176,284.685,119.296,315.246,193.932,339.267z"/>
                    <path d="M74.85,485.497c3.481,11.016,13.579,18.427,25.121,18.427c2.687,0,5.364-0.411,7.956-1.233l144.03-45.509l144.031,45.509
                        c2.582,0.812,5.26,1.233,7.947,1.233c11.551,0,21.649-7.401,25.12-18.418l6.503-20.568c2.123-6.723,1.501-13.856-1.75-20.101
                        c-3.242-6.244-8.74-10.854-15.443-12.977l-43.127-13.636l4.284-1.358c6.713-2.122,12.201-6.731,15.452-12.976
                        c3.242-6.254,3.863-13.388,1.741-20.11l-6.503-20.568c-3.48-11.017-13.579-18.428-25.121-18.428c-2.687,0-5.364,0.411-7.955,1.233
                        l-105.179,33.239L146.77,346.018c-2.582-0.812-5.259-1.233-7.947-1.233c-11.551,0-21.649,7.401-25.121,18.418L107.2,383.78
                        c-4.379,13.856,3.328,28.697,17.193,33.077l4.284,1.357L85.56,431.851c-6.713,2.123-12.202,6.732-15.453,12.977
                        c-3.242,6.244-3.863,13.378-1.741,20.101L74.85,485.497z"/>
                </g>
            </g>
        </svg>';
    }

    $html .= '</div>';
    return $html;
}
function render_service_card($post)
{
?>
    <div class="service-card">
        <div class="service-card-header">
            <!-- <div class="service-card-header"> -->
            <h3 class="service-title"><?php echo get_the_title($post); ?></h3>
            <?php if (have_rows('описание_блок', $post->ID)): ?>
                <?php while (have_rows('описание_блок', $post->ID)): the_row(); ?>
                    <?php
                    $timeOnTrip = trim(get_sub_field('параметр_времени')); // Удаляем пробелы
                    ?>

                    <?php
                    if (strtolower($timeOnTrip) === 'Дневной') {
                        echo '<img class="time__icon" src="' . esc_url(get_template_directory_uri()) . '/assets/image/sun-svgrepo-com.svg" alt="sun time icon">';
                    } else if (strtolower($timeOnTrip) === 'Ночной') {
                        echo '<img class="time__icon" src="' . esc_url(get_template_directory_uri()) . '/assets/image/night-moon-svgrepo.png" alt="night time icon">';
                    } else {
                        echo '<p>Неизвестный параметр времени: ' . esc_html($timeOnTrip) . '</p>';
                    }
                    ?>
        </div>
        <div class="service-content" style="display: none;">
            <div class="service-item-content"><?php echo apply_filters('the_content', $post->post_content); ?></div>
            <?php if (has_post_thumbnail($post)) : ?>
                <div class="service-thumbnail"><?php echo get_the_post_thumbnail($post); ?></div>
            <?php endif; ?>
            <div class="service-item-description">
                <h4>Описание маршрута:</h4>
                <div class="service-list">
                    <!-- <div class="service-list-item">
                        <h5 class="service-list-title">тип маршрута</h5>
                        <p class="service-list-value"><?php the_sub_field('тип_маршрута'); ?></p>
                    </div> -->
                    <div class="service-list-item">
                        <!-- <h5 class="service-list-title">протяженность</h5> -->
                        <svg class="service-list-svg" fill="#fcfcfc" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 480.543 480.543" xml:space="preserve" stroke="#fcfcfc">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <path d="M225.278,278.426c0-48.641-39.572-88.213-88.214-88.213c-48.641,0-88.212,39.572-88.212,88.213 c0,14.254,3.401,27.727,9.431,39.654l78.781,162.463l78.795-162.488C221.88,306.133,225.278,292.669,225.278,278.426z M137.064,327.243c-26.917,0-48.817-21.9-48.817-48.817s21.9-48.817,48.817-48.817c26.918,0,48.817,21.9,48.817,48.817 S163.982,327.243,137.064,327.243z" />
                                        <path d="M387.021,0c-24.63,0-44.669,20.038-44.669,44.668c0,7.218,1.723,14.04,4.776,20.081l39.893,82.267l39.899-82.28 c3.049-6.037,4.77-12.855,4.77-20.067C431.69,20.038,411.65,0,387.021,0z M387.021,69.388c-13.631,0-24.72-11.089-24.72-24.72 c0-13.63,11.089-24.72,24.72-24.72c13.629,0,24.719,11.09,24.719,24.72C411.74,58.299,400.65,69.388,387.021,69.388z" />
                                        <path d="M348.116,289.787c-1.812-8.523-4.166-16.875-7.131-25.075c-3.974-10.987-8.74-21.724-12.391-32.836 c-6.823-20.771,4.948-38.105,7.16-41.256c3.876-5.517,8.408-10.58,13.19-15.322c9.207-9.128,19.361-17.288,29.984-24.803 c-1.316-2.039-2.591-4.1-3.805-6.199c-15.279,5.99-93.854,33.452-91.938,94.121c0.384,12.162,5.083,23.737,7.979,35.526 c1.395,5.681,2.605,11.412,3.345,17.218c0.319,2.614,0.515,5.243,0.729,7.87c0.006-0.02,0.004-0.034-0.008-0.045 c0.007,0.076,0.202,8.326-0.164,11.9c-1.147,11.189-2.799,22.494-7.516,32.758c-4.387,9.543-11.006,17.842-19.193,24.402 c-18.716,14.994-43.514,20.988-66.913,23.398c-1.114,0.117-2.228,0.217-3.342,0.314l-41.779,86.152 c20.614-1.281,41.175-4.102,61.235-9.039c23.607-5.811,46.613-14.588,67.227-27.598c20.596-12.996,38.308-30.578,50.099-51.984 c12.335-22.391,17.277-48.038,16.225-73.452C350.752,307.156,349.928,298.307,348.116,289.787z" />
                                    </g>
                                </g>
                            </g>

                        </svg>
                        <p class="service-list-value"><?php the_sub_field('протяженность-маршрута'); ?></p>
                    </div>
                    <div class="service-list-item">
                        <!-- <h5 class="service-list-title">время прохождения</h5> -->
                        <svg class="service-list-svg" height="800px" width="800px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: rgb(252, 251, 251);
                                }
                            </style>
                            <g>
                                <path class="st0" d="M184.488,220.595l51.016,39.35c1.966,15.861,15.336,28.191,31.73,28.191c17.754,0,32.14-14.394,32.14-32.14
		c0-0.68-0.156-1.327-0.205-1.999l74.758-88.44c5.21-5.85,5.309-14.28,0.213-18.802c-5.088-4.531-13.436-3.45-18.647,2.408
		l-73.447,78.47c-4.457-2.335-9.438-3.777-14.813-3.777c-5.742,0-11.06,1.63-15.73,4.277l-48.026-33.443
		c-6.194-4.563-15.484-2.45-20.736,4.712C177.508,206.544,178.278,216.04,184.488,220.595z" />
                                <path class="st0" d="M440.314,82.925c-44.2-44.257-105.58-71.703-173.08-71.686V70.57c51.303,0.017,97.469,20.712,131.124,54.31
		c33.59,33.647,54.285,79.821,54.302,131.116c-0.017,51.294-20.712,97.468-54.302,131.116
		c-33.655,33.606-79.821,54.301-131.124,54.309c-51.294-0.008-97.468-20.703-131.116-54.309
		c-33.598-33.648-54.293-79.822-54.309-131.116c0.008-16.82,2.302-33.017,6.464-48.444l24.046,14.977
		c3.187,1.975,7.062,2.393,10.241,1.09c3.203-1.319,5.3-4.162,5.546-7.57l10.356-135.614c0.278-3.884-1.852-7.8-5.472-10.077
		c-3.654-2.244-8.119-2.45-11.47-0.459L4.372,138.971c-2.957,1.729-4.58,4.858-4.35,8.299c0.229,3.458,2.302,6.743,5.497,8.725
		l30.698,19.122c-8.872,25.357-13.747,52.59-13.747,80.879c-0.016,67.491,27.446,128.871,71.687,173.079
		c44.207,44.241,105.579,71.703,173.078,71.686c67.492,0.017,128.88-27.445,173.08-71.686
		c44.24-44.208,71.703-105.588,71.686-173.079C512.017,188.497,484.554,127.117,440.314,82.925z" />
                            </g>
                        </svg>
                        <p class="service-list-value"><?php the_sub_field('время_прохождения__маршрута'); ?></p>

                        <?php
                        $for_time_way = get_sub_field('доп_время_прохождения_услуги');
                        if ($for_time_way) {
                            echo '<p class="service-list-value optiops">' . $for_time_way . '</p>';
                        }
                        ?>
                    </div>
                    <div class="service-list-item difficulty">
                        <!-- <h5 class="service-list-title">уровень сложности</h5> -->
                        <?php echo render_difficulty_icons(get_sub_field('количество_сложности')); ?>
                        <?php
                        $optiops = get_sub_field('доп_к_уровень_сложности');
                        if ($optiops) {
                            echo '<p class="service-list-value optiops">' . $optiops . '</p>';
                        }
                        ?>
                        <!-- <p class="service-list-value"><?php the_sub_field('доп_к_уровень_сложности'); ?></p> -->
                        <!-- <p class="service-list-value"><?php the_sub_field('количество_сложности'); ?></p> -->
                    </div>
                    <!-- <div class="service-list-item"> -->
                    <!-- <h5 class="service-list-title">локация</h5> -->
                    <!-- <p class="service-list-value"><?php the_sub_field('локация_услуги'); ?></p> -->
                    <?php
                    $location = get_sub_field('локация_услуги');
                    if ($location) {
                        echo '<div class="service-list-item">';

                        $svg_color = "#FFFFFF"; // Белый цвет
                        echo '<svg class="service-list-svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" 
              stroke="' . $svg_color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="' . $svg_color . '"/>
        <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" 
              stroke="' . $svg_color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="' . $svg_color . '"/>
    </svg>';

                        echo '<p class="service-list-value optiops">' . $location . '</p>';
                        echo '</div>';
                    }

                    ?>
                    <!-- </div> -->
                    <!-- <div class="service-list-item"> -->
                    <?php
                    $optional_service_description = get_sub_field('доп_описание_услуги_необязательно');
                    if ($optional_service_description) {
                        echo '<div class="service-list-item">';
                        echo '<p class="service-list-value optiops">' . $optional_service_description . '</p>';
                        echo '</div>';
                    }
                    ?>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
    </div>
<?php
}
?>



<section class="services-section">
    <h3 class="title-section services-title">Наши предложения</h3>

    <!-- Вывод услуг -->
    <div class="services">
        <?php
        // Получаем все метки из таксономии service_tag
        $tags = get_terms(array(
            'taxonomy' => 'service_tag',
            'hide_empty' => false, // Показать даже пустые метки
        ));

        foreach ($tags as $tag) {
            // Запрос услуг по метке
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service_tag',
                        'field' => 'slug',
                        'terms' => $tag->slug,
                    ),
                ),
            );

            $services_query = new WP_Query($args);

            if ($services_query->have_posts()) :
                echo '<div class="service-tag-wrapper">';
                echo '<h4 class="service-tag-title">' . esc_html($tag->name) . 'ы</h4>'; // Название блока

                // Получаем иконку для метки
                $term_id = 'service_tag_' . $tag->term_id;
                $icon = get_field('иконка_метки_услуги', $term_id);

                if ($icon) {
                    echo '<img src="' . $icon . '" alt="Иконка услуги" class="service-tag-icon">';
                } else {
                    echo 'Поле не найдено или пустое.';
                }

                while ($services_query->have_posts()) : $services_query->the_post();
                    echo '<div class="service-card-wrapper closed">'; // Оборачиваем карточку
                    echo '<div class="service-background">'; // Содержимое карточки
                    render_service_card($post); // Вызов функции для вывода карточки
                    echo '</div>'; // Закрываем service-background
                    echo '</div>'; // Закрываем service-card-wrapper
                endwhile;

                echo '</div>'; // Закрываем service-tag-wrapper
            else:
                echo '<p>' . esc_html__('Услуги не найдены.', 'textdomain') . '</p>';
            endif;

            wp_reset_postdata();
        }
        ?>
    </div>
</section>