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
            <p><?= $main_title ?></p>
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

<?php wp_footer(); ?>

</body>
</html>
