<section class="about-section" id="about">
    <div class="about-content">
        <h3 class="title-section about-title"><?php the_field('название_компонента_1'); ?></h3>
        <div class="about-description">
            <div class="about-content-description left">
                <?php if (get_field('блок_текста_повторителя_компонента_1')): ?>
                    <?php while (has_sub_field('блок_текста_повторителя_компонента_1')) : ?>
                        <p class="about-text">
                            <?php the_sub_field('блок_текста_компонента_1'); ?>
                        </p>
                    <?php endwhile; ?>
                <?php endif; ?>

                <h4 class="about-subtitle"><?php the_field('название_блока_преимущества'); ?></h4>

                <?php if (get_field('контент_блока_преимущества')): ?>
                    <?php while (has_sub_field('контент_блока_преимущества')) : ?>

                        <div class="about-sub-block">
                            <span class="good-icon-image-span">
                                <img src='<?php the_field('иконка_блока_преимущества'); ?>' alt="good icon" class="good-icon-image">
                            </span>
                            <p class="about-text-part">
                                <?php the_sub_field('текст_преимущества_компонент1'); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="about-content-description right">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/compac.png' alt="canoe-var1" class="compas-image">
            </div>
        </div>
        <div class="advantage-container">
            <?php if (get_field('важные_детали_компонент1')): ?>
                <?php while (has_sub_field('важные_детали_компонент1')) : ?>

                    <div class="advantage-block">
                        <img src='<?php the_sub_field('иконка_для_пунктов_компонент1'); ?>' alt="advantage-icon" class="advantage-icon">
                        <h4 class="advantage-title"><?php the_sub_field('описание_компонент1'); ?></h4>
                        <a class="advantage-link" href="<?php the_sub_field('ссылка_для_компонента1'); ?>"><?php the_sub_field('текст_для_кнопки_компонент1'); ?></a>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="spiner-container">
            <h4 class="about-subtitle">Выбирай свое интересное путешествие</h4>
            <div class="spiner">
                <span class="spiner-image-span">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/map.jpg' alt="good icon" class="good-icon-image">
                </span>
                <div class="about-part-content">
                    <ul>
                        <li class="about-item points">Пешеходные походы выходного дня по Белорусскому Полесью</li>
                        <li class="about-item points">Однодневные сплавы</li>
                        <li class="about-item points">Двухдневные сплавы</li>
                        <li class="about-item points">Корпоративные и сборные сплавы</li>
                        <li class="about-item points">Экспресс-сплавы по реке Припять</li>

                        <li class="about-item img"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/canoe-var1.svg' alt="canoe-var1" class="rotating-image"></li>
                        
                        <li class="about-item points">Двухдневные походы по Белорусскому Полесью с ночёвкой</li>
                        <li class="about-item points">Корпоративные туристические слёты</li>
                        <li class="about-item points">Кемпинг-тур с ночёвкой</li>
                    </ul>
                </div>
                <span class="spiner-image-span">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/bug.png' alt="good icon" class="good-icon-image">
                </span>
            </div>
        </div>
    </div>
</section>