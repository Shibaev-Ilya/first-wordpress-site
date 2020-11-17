<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package loscotletos
 */

?>

<div class="preview_card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="preview_card__img">
        <?php
        $href = get_post_meta(get_the_ID(), 'img', true);
        if ($href) { ?>
            <img src="<?php echo $href ?>" width="900" height="506" alt="">
        <?php } else { ?>
            <img src="<?php echo get_template_directory_uri() ?>/img/banners/home-prew.jpg" width="900" height="506" alt="">
        <?php }
        ?>
    </div>
    <div class="preview_card__text">
        <div class="preview_card__text__title">
            <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
        </div>
        <?php if ( 'post' === get_post_type() ) :
        ?>
        <div class="entry-meta">
            <?php
            loscotletos_posted_on();
            loscotletos_posted_by();
            ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
        <div class="preview_card__text__text" style="margin-bottom: 40px">
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
<!--        <div class="preview_card__text__buttons">-->
<!--            <a href="--><?php //echo esc_url(get_permalink()) ?><!--" rel="bookmark">-->
<!--                Read more <img class="arrow" src="--><?php //echo get_template_directory_uri() ?><!--/img/style/arrow.svg" width="15" height="10" alt="">-->
<!--            </a>-->
<!--        </div>-->
    </div>
</div>
