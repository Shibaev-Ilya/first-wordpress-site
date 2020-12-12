<?php
/**
 * Template name: Home page
 */

get_header();
?>
    <main>
        <div class="main-slider">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/img/slider/main-xs.jpg" media="(max-width: 768px)">
                <img src="<?php echo get_template_directory_uri() ?>/img/slider/main.jpg" alt="2d">
            </picture>
        </div>
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

                                    <?php echo get_the_post_thumbnail( get_the_ID(), 'full');?>

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
                                    <a href="<?php echo esc_url(get_permalink()) ?>" rel="bookmark">
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
    </main>
<?php
get_footer();
