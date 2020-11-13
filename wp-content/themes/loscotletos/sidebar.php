<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package loscotletos
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<section class="right_column widget-area">
    <div class="container_sticky">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</section>
