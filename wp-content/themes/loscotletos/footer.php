<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package loscotletos
 */

global $redux_loscotletos;
$main_title = $redux_loscotletos['lc-header-title'];

?>
    <footer>
        <div class="footer__info">
            <p class="footer__info__title"><?= $main_title ?></p>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-useful-links-menu',
                    'container' => 'ul',
                    'menu_class' => 'footer__useful-links',
                )
            );
            ?>
        </div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-social-networks-menu',
                'container' => false,
                'menu_class' => 'footer__social',
            )
        );
        ?>
    </footer>
</div><!-- #page -->
<a class="js-scroll-to-top">&#9650;</a>
<?php wp_footer(); ?>

</body>
</html>
