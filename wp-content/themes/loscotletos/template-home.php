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
            <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg" src="<?php echo get_template_directory_uri() ?>/img/slider/1.jpg" alt="loscotletos">
        </div>
        <div class="main-slider__item">
            <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg" src="<?php echo get_template_directory_uri() ?>/img/slider/2.jpg" alt="loscotletos">
        </div>
        <div class="main-slider__item">
            <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg" src="<?php echo get_template_directory_uri() ?>/img/slider/3.jpg" alt="loscotletos">
        </div>
        <div class="main-slider__item">
            <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg" src="<?php echo get_template_directory_uri() ?>/img/slider/4.jpg" alt="loscotletos">
        </div>
        <div class="main-slider__item">
            <img data-lazy="<?php echo get_template_directory_uri() ?>img/slider/1.jpg" src="<?php echo get_template_directory_uri() ?>/img/slider/5.jpg" alt="loscotletos">
        </div>
    </div>
</div>
<div><h2>hello</h2></div>
</main>
<?php
get_footer();
