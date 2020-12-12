<?php
/**
 * Template name: Contact Template
 */
get_header();
?>
    <main class="contacts">
        <!--        <h3>Это мой template-contact.php</h3>-->
        <!--        --><?php //echo get_breadcrumbs(); ?>

        <?php
        while (have_posts()) :
            the_post(); ?>
            <section class="contacts__main_column">
                <div class="preview_card">
                    <div class="preview_card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/banners/contacts-banner.jpg"
                             width="900"
                             height="300" alt="">
                    </div>
                    <div class="preview_card__text">
                        <!--                            <div class="preview_card__text__title">-->
                        <!--                                <h2>--><?php //the_title();
                        ?><!--</h2>-->
                        <!--                            </div>-->
                        <div class="preview_card__text__text">
                            <?php the_content(); ?>
                            <p>Телефон: +7 777 777 77 77</p>
                            <p>Email: email@example.com</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contacts__form widget-area">
                <div class="preview_card">
                    <div class="preview_card__text">
                        <div class="contacts__form__title">FEEDBACK FORM</div>
                        <?php
                        $contacts_form = get_post_meta(get_the_ID(), 'ale_formcode', true);
                        echo do_shortcode($contacts_form);
                        ?>
                    </div>
                </div>
            </section>
        <?php endwhile; // End of the loop.
        ?>
    </main><!-- #main -->

<?php
get_footer();
