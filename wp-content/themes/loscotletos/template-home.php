<?php
/**
 * Template name: Home page
 */

global $redux_loscotletos;
$phone = $redux_loscotletos['lc-phone'];
$email = $redux_loscotletos['lc-email'];
get_header();
?>
    <main>
        <div class="main-slider">
            <div class="js-main-slider">
                <div class="main-slider__item">
                    <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg"
                         src="<?php echo get_template_directory_uri() ?>/img/slider/1.jpg" alt="loscotletos">
                </div>
                <div class="main-slider__item">
                    <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg"
                         src="<?php echo get_template_directory_uri() ?>/img/slider/2.jpg" alt="loscotletos">
                </div>
                <div class="main-slider__item">
                    <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg"
                         src="<?php echo get_template_directory_uri() ?>/img/slider/3.jpg" alt="loscotletos">
                </div>
                <div class="main-slider__item">
                    <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg"
                         src="<?php echo get_template_directory_uri() ?>/img/slider/4.jpg" alt="loscotletos">
                </div>
                <div class="main-slider__item">
                    <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg"
                         src="<?php echo get_template_directory_uri() ?>/img/slider/5.jpg" alt="loscotletos">
                </div>
            </div>
        </div>
        <div>
            <h3>Это index.php</h3>
            <div class="main-page__wrapper">
                <section class="main_column">
                    <?php
                    // параметры по умолчанию
                    $posts = get_posts(array(
                        'numberposts' => 5,
                        'category' => 0,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'include' => array(),
                        'exclude' => array(),
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));

                    foreach ($posts as $post) {
                        setup_postdata($post); ?>

                        <div class="preview_card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="preview_card__img">
                                <img src="<?php echo get_template_directory_uri() ?>/img/banners/home-prew.jpg"
                                     width="900" height="506" alt="">
                            </div>
                            <div class="preview_card__text">
                                <div class="preview_card__text__title">
                                    <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                </div>
                                <div class="preview_card__text__text">
                                    <?php
                                    the_content(
                                        sprintf(
                                            wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                                __('...', 'loscotletos'),
                                                array(
                                                    'span' => array(
                                                        'class' => array(),
                                                    ),
                                                )
                                            ),
                                            wp_kses_post(get_the_title())
                                        )
                                    );
                                    ?>
                                </div>
                                <div class="preview_card__text__buttons">
                                    <a href="<?php ' . esc_url(get_permalink()) . '?>" rel="bookmark">
                                        Read more <img class="arrow" src="<?php echo get_template_directory_uri() ?>/img/style/arrow.svg" width="15" height="10" alt="">
                                    </a>

                                </div>
                            </div>
                        </div>

                    <?php }
                    wp_reset_postdata(); // сброс
                    ?>
                </section>

                <?php get_sidebar(); ?>

            </div>
        </div><!-- #main -->
    </main>
<?php
get_footer();
