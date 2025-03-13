<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class('body'); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="wrapper">
            <div class="header__container">
                <!-- <div class="header__line"> -->
                <div class="logo__container">
                    <img class='header__logo' src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/logo.png' alt='logo'>
                    <h1 class="header__title"><?php the_field('main-title-site', 'options'); ?></h1>
                </div>

                <nav class="header__menu menu">
                    <ul class="menu__list">
                        <!-- <li class="menu__item"><a class="menu__link" href="#">Главная</a></li>
                                <li class="menu__item"><a class="menu__link" href="#">О нас</a></li>
                                <li class="menu__item"><a class="menu__link" href="#">Новости</a></li>
                                <li class="menu__item"><a class="menu__link" href="#">Наши предложения</a></li> -->
                        <?php if (get_field('site-menu', 'options')): ?>
                            <?php while (has_sub_field('site-menu', 'options')) : ?>
                                <li class="menu__item"><a class="menu__link" href="<?php the_sub_field('menu-link'); ?>"><?php the_sub_field('menu-item'); ?></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </nav>
                <div class="header-contact-us">
                    <a class="phone-link header-phone" href="tel:<?php the_field('site_phone', 'options'); ?>">
                        <?php the_field('site_phone', 'options'); ?>
                    </a>
                    <a class="telegram-link header-telegram" href="<?php the_field('telegram_ссылка', 'options'); ?>">
                        <!-- <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/vk-logo-svg.svg' alt="vkontacte"> -->
                        <?php
                        // Получаем SVG-код из поля ACF
                        $svg_url_telegram = get_field('иконка_telegram', 'options');

                        // Если поле пустое, используем SVG из папки темы
                        if (!$svg_url_telegram) {
                            $svg_url_telegram = esc_url(get_template_directory_uri()) . '/assets/image/telegram-icon.svg';
                        }

                        // Получаем содержимое SVG
                        $svg_content_telegram = file_get_contents($svg_url_telegram);

                        // Проверяем, что содержимое было успешно загружено
                        if ($svg_content_telegram) {
                            // Добавляем класс и атрибут alt к тегу <svg>
                            $svg_content_telegram = preg_replace('/<svg([^>]*)>/', '<svg class="link-icon" aria-label="Instagram"$1>', $svg_content_telegram);
                            echo $svg_content_telegram;
                        } else {
                            echo '<p>Ошибка загрузки SVG.</p>';
                        }
                        ?>
                    </a>
                    <a class="instagram-link header-instagram" href="<?php the_field('instagram_ссылка', 'options'); ?>">
                        <?php
                        // Получаем SVG-код из поля ACF
                        $svg_url_instagram = get_field('иконка_instagram', 'options');

                        // Если поле пустое, используем SVG из папки темы
                        if (!$svg_url_instagram) {
                            $svg_url_instagram = esc_url(get_template_directory_uri()) . '/assets/image/instagram-icon.svg';
                        }

                        // Получаем содержимое SVG
                        $svg_content_instagram = file_get_contents($svg_url_instagram);

                        // Проверяем, что содержимое было успешно загружено
                        if ($svg_content_instagram) {
                            // Добавляем класс и атрибут alt к тегу <svg>
                            $svg_content_instagram = preg_replace('/<svg([^>]*)>/', '<svg class="link-icon" aria-label="Instagram"$1>', $svg_content_instagram);
                            echo $svg_content_instagram;
                        } else {
                            echo '<p>Ошибка загрузки SVG.</p>';
                        }
                        ?>
                    </a>
                    <!-- <a class="instagram-link header-instagram" href="<?php the_field('instagram_ссылка', 'options'); ?>">
                        <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/instagram-icon.svg' alt="instagram">
                    </a> -->
                    <a class="vkontakte-link header-VKontakte" href="<?php the_field('vk_ссылка', 'options'); ?>">
                        <!-- <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/vk-logo-svg.svg' alt="vkontacte"> -->
                        <?php
                        // Получаем SVG-код из поля ACF
                        $svg_url_vk = get_field('иконка_vk', 'options');

                        // Если поле пустое, используем SVG из папки темы
                        if (!$svg_url_vk) {
                            $svg_url_vk = esc_url(get_template_directory_uri()) . '/assets/image/vk-icon.svg';
                        }

                        // Получаем содержимое SVG
                        $svg_content_vk = file_get_contents($svg_url_vk);

                        // Проверяем, что содержимое было успешно загружено
                        if ($svg_content_vk) {
                            // Добавляем класс и атрибут alt к тегу <svg>
                            $svg_content_vk = preg_replace('/<svg([^>]*)>/', '<svg class="link-icon" aria-label="Instagram"$1>', $svg_content_vk);
                            echo $svg_content_vk;
                        } else {
                            echo '<p>Ошибка загрузки SVG.</p>';
                        }
                        ?>
                    </a>
                </div>
                <!-- </div> -->
                <p class="text-header">Путешествия — это не просто перемещение в пространстве, это возможность прикоснуться к природе и открыть свою душу. Сплавы по рекам и походы по лесам подарят вам незабываемые впечатления и зарядят энергией для новых свершений!</p>

                <!-- <div class="header__overlay__view"
                    style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/image/фон-для-главной-2.jpg'); ?>')">
                </div> -->
                <div class="header__overlay__view"
                    style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/image/couple-together-kayaking-river.jpg'); ?>')">
                </div>
            </div>
        </div>
    </header>