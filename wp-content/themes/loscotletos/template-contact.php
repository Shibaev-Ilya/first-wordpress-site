<?php
/**
 * Template name: Contact Template
 */
get_header();
?>

<main>
    <h3>Это мой template-contact.php</h3>
    <section class="main_php_column">
        <div class="preview_card">
            <div class="preview_card__img">
                <img src="<?php echo get_template_directory_uri() ?>/img/banners/default_img.jpg" width="900" height="506" alt="">
            </div>
            <div class="preview_card__text">
                <div class="preview_card__text__title">
                    <h2>Контакты</h2>
                </div>
                <div class="preview_card__text__text">
                            <p>Телефон +7 777 777 77 77</p>
                            <p>Email mail@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
