<section class="feedback-section" id="отзывы">
    <div class="feedback-content">
        <h3 class="title-section feedback-title">Отзывы</h3>
        <div class="feedback-card-container">

            <div class="feedback-card">
                <div class="feedback-image-block">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/feed-back-girl.png' alt="feed-back-girl" class="people-image">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/instagram-1-svgrepo-com.svg' alt="instagram" class="shared-image">
                </div>
                <p class="feedback-text">
                    Спасибо большое @poleskiy_splav за хорошее настроение, за крутое проведенное время в хорошей компании.
                </p>
            </div>

            <div class="feedback-card">
                <div class="feedback-image-block">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/feed-back-girl.png' alt="feed-back-girl" class="people-image">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/instagram-1-svgrepo-com.svg' alt="instagram" class="shared-image">
                </div>
                <p class="feedback-text">
                    Спасибо за день)) это было замечательно, правда) даже мошки, тина, пауки и прочие мелочи не смогли испортить этот день. И, кстати,
                    все очень довольны, что остались на полный сплав) да и компания была просто шикарная ) Так что вашей команде огромное спасибо ))
                </p>
            </div>

            <div class="feedback-card">
                <div class="feedback-image-block">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/feed-back-man.jpg' alt="feed-back-girl" class="people-image">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/instagram-1-svgrepo-com.svg' alt="instagram" class="shared-image">
                </div>
                <p class="feedback-text">
                    От всей нашей команды ЦБУ Жлобина выражаю слова благодарности нашему Профсоюзу в лице Вадима Николаевича, инстукторам "Полеский сплав" за возможность поучавствовать в сплаве. Ощущения для нас
                    как новичков (большинства) - просто непередаваемые. Дождь, а иногда и ливень, оказался изюминкой нашего сплава. БЫЛО ПРОСТО ВСЕ ЗДОРОВО И СУПЕР.
                </p>
            </div>

            <div class="feedback-card">
                <div class="feedback-image-block">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/feed-back-girl.png' alt="feed-back-girl" class="people-image">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/instagram-1-svgrepo-com.svg' alt="instagram" class="shared-image">
                </div>
                <p class="feedback-text">
                    Сплав по реке был просто великолепен! Организация на высшем уровне, и я чувствовал себя в безопасности на протяжении всего путешествия.
                </p>
            </div>

            <div class="feedback-card">
                <div class="feedback-image-block">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/feed-back-man.jpg' alt="feed-back-girl" class="people-image">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/instagram-1-svgrepo-com.svg' alt="instagram" class="shared-image">
                </div>
                <p class="feedback-text">
                    Сплав по реке был просто великолепен! Организация на высшем уровне, и я чувствовал себя в безопасности на протяжении всего путешествия.
                </p>
            </div>
        </div>
        <!-- <p class="feedback-text-more">Больше отзывов смотрите у нас в Instagram</p> -->
        <!-- https://www.instagram.com/poleskiy_splav/ -->
        <?php
        $link_inst = "https://www.instagram.com/poleskiy_splav/";
        $field_link_inst = get_field('instagram_ссылка', 'options');

        if ($field_link_inst) {
            $link_inst = $field_link_inst; // Получаем ссылку из поля, но не выводим её
        }
        ?>
        <!-- Ссылка не рендерится, но сохраняется в переменной $link_inst -->
        <a href="<?php echo esc_url($link_inst); ?>" class="feedback-text-more" target="_blank" rel="noopener noreferrer">
            Больше отзывов смотрите у нас в Instagram
        </a>
    </div>
</section>