<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_title(); ?>
    <?php wp_head(); ?>

</head>
<body class="body">
    <header class="header">
    <div class="wrapper">
    <div class="header__container">
        <img class="header__logo" src="<?php bloginfo( 'template_url' ); ?>/assets/image/logo.png" alt="logo">
        <h1 class="header__title">Полесский Сплав</h1>

        <nav class="header__menu menu">
            <ul class="menu__list">
                <li class="menu__item"><a class="menu__link" href="#">Главная</a></li>
                <li class="menu__item"><a class="menu__link" href="#">О нас</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Новости</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Наши предложения</a></li>
            </ul>
        </nav>
            <p class="text-header">Путешествия — это не просто перемещение в пространстве, это возможность прикоснуться к природе и открыть свою душу. Сплавы по рекам и походы по лесам подарят вам незабываемые впечатления и зарядят энергией для новых свершений!</p>
        </div>
        <div class="header__overlay__view"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/image/couple-together-kayaking-river.jpg'); ?>')">
            </div>
        </div>
        </header>


