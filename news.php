<section class="news-posts-section">
    <h3 class="title-section news-title">Все новости</h3>
    <div class="news-posts-container">
        <?php
        global $post;

        $myposts = get_posts([
            'numberposts' => 3, // сколько постов выводится -1 значит все посты
            'category'    => 2,  // Идентификатор категории Новости (news)
            'orderby'     => 'modified', // Сортировка по дате последнего изменения
            'order'       => 'DESC' // Последние обновленные в начале
        ]);

        if ($myposts) {
            foreach ($myposts as $post) {
                setup_postdata($post);
        ?>
                <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                <article class="post">
                    <a href="<?php the_permalink(); ?>"></a>
                    <?php
                    if (has_post_thumbnail()) {
                        $thumbnail_id = get_post_thumbnail_id(); // Получаем ID миниатюры
                        // Выводим изображение с вашим классом
                        echo wp_get_attachment_image($thumbnail_id, 'full', false, array('class' => 'post-image-news'));
                    } else {
                        // Запасное изображение
                        echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/image/default-image.jpg') . '" class="post-image-news" alt="Запасное изображение" decoding="async" />';
                    }
                    ?>

                    <h3 class="post-title"><?php the_title(); ?></h3>
                    <?php
                    // Получаем значение даты из поля ACF
                    $custom_date = get_field('установка_даты'); // замените 'your_acf_field_name' на фактическое имя вашего поля

                    // Проверяем, установлена ли дата
                    if ($custom_date) {
                        // Если дата установлена, используем ее
                        $date_to_use = $custom_date;
                    } else {
                        // Если дата не установлена, используем дату публикации
                        $date_to_use = get_the_date();
                    }

                    // Теперь $date_to_use содержит нужную дату
                    echo '<p class="post-date">Дата: ' . esc_html($date_to_use) . '</p>';
                    ?>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php
            }
        } else {
            // Постов не найдено
            // Блок, если постов не найдено
            ?>
            <div class="no-posts">
                <h3 class="no-posts-title">Актуальная информация</h3>
                <p class="no-posts-text">Каждый сплав и поход — это шаг к новым открытиям. Позвольте себе быть свободными, исследуйте прекрасные уголки нашей планеты и наполняйте свою жизнь яркими моментами. Природа ждет вас!</p>
                <p class="no-posts-text">Погрузитесь в мир приключений, где каждая капля воды и каждый шаг по земле открывают новые горизонты. Сплавы по бурным рекам подарят вам не только адреналин, но и возможность насладиться величием природы.</p>
                <p class="no-posts-text">Походы по живописным тропам позволят вам забыть о повседневной суете и насладиться тишиной лесов, где только вы и звуки природы. Каждый маршрут — это уникальная история, полная ощущения единения с окружающим миром.</p>
                <p class="no-posts-text">Не бойтесь ставить перед собой амбициозные цели — покоряйте вершины и исследуйте неизведанные территории. Каждое приключение укрепляет дух и дарит вам новые впечатления, которые останутся с вами навсегда.</p>
                <p class="no-posts-text">Дайте себе возможность отдохнуть от городской суеты, вдохнуть свежий воздух и открыть для себя красоту природы. Пусть ваши путешествия станут источником вдохновения и радости, которая будет согревать вас в повседневной жизни.</p>
            </div>
    </div>
<?php
        }

        wp_reset_postdata(); // Сбрасываем $post
?>
</section>