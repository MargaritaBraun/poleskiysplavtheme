<section class="news-posts-section">
    <h3 class="title-section news-title">Все новости</h3>
    <div class="news-posts-container">
        <?php
        global $post;

        $myposts = get_posts([
            'numberposts' => -1,
            // 'numberposts' => 3,
            'category'    => 2,
            'orderby'     => 'modified',
            'order'       => 'DESC'
        ]);

        if ($myposts) {
            foreach ($myposts as $post) {
                setup_postdata($post);
        ?>
                <article class="post">
                    <a href="<?php the_permalink(); ?>"></a>
                    <?php
                    if (has_post_thumbnail()) {
                        $thumbnail_id = get_post_thumbnail_id();
                        echo wp_get_attachment_image($thumbnail_id, 'full', false, array('class' => 'post-image-news'));
                    } else {
                        // default-image.jpg
                        echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/image/на-байдарке-парень.png') . '" class="post-image-news" alt="Запасное изображение" decoding="async" />';
                    }
                    ?>
                    <h3 class="post-title"><?php the_title(); ?></h3>
                    <!-- <?php
                    // $custom_date = get_field('установка_даты');
                    // $update_date = get_the_date();

                    // Выводим отладочную информацию
                    // echo '<!-- Пользовательская дата: ' . esc_html($custom_date) . ' -->';
                    // echo '<!-- Дата публикации: ' . esc_html(get_the_date()) . ' -->';

                    // $date_to_use = $custom_date ? $custom_date : get_the_date();
                    // echo '<p class="post-date">Дата: ' . esc_html($date_to_use) . '</p>';
                    ?> -->

                    <div class="post-content">
                        <!-- <?php the_content(); ?> -->
                        <?php
                        // Получаем содержимое поста
                        $content = get_the_content();
                        // $limit = 150; // Устанавливаем количество отображаемых символов
                        $limit = 250;
                        $excerpt = wp_trim_words($content, $limit / 10, '...'); // Обрезаем содержимое
                        echo '<p>' . esc_html($excerpt) . '</p>';
                        ?>
                        <p>
                            <a href="<?php the_permalink(); ?>" class="more-link" tabindex="0">
                                <span aria-label="Читать далее <?php the_title(); ?>(далее…)">Читать далее</span>
                            </a>
                        </p>
                    </div>
                </article>
            <?php
            }
        } else {
            // Код для отображения, если постов нет
            ?>
            <div class="no-posts">
                <h3 class="no-posts-title">Актуальная информация</h3>
                <p class="no-posts-text">Каждый сплав и поход — это шаг к новым открытиям...</p>
            </div>
        <?php
        }

        wp_reset_postdata();
        ?>
    </div>
</section>