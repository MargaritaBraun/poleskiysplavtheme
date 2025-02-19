<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_title(); ?>
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
                <a class="phone-link header-phone" href="tel:<?php the_field('site_phone', 'options'); ?>">
                    <?php the_field('site_phone', 'options'); ?>
                </a>
                <!-- </div> -->
                <p class="text-header">Путешествия — это не просто перемещение в пространстве, это возможность прикоснуться к природе и открыть свою душу. Сплавы по рекам и походы по лесам подарят вам незабываемые впечатления и зарядят энергией для новых свершений!</p>

                <div class="header__overlay__view"
                    style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/image/фон-для-главной-2.jpg'); ?>')">
                </div>
            </div>
        </div>
    </header>