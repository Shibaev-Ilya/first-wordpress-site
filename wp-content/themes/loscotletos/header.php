<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package loscotletos
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="theme-color" content="#ffffff">
    <meta name="yandex-verification" content="e9c089b8483d47c7" />
    <!--<link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link type="text/plain" rel="author" href="<?php /*echo get_template_directory() */?>humans.txt">-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="main_page_wrapper main_page_wrapper_main_page container">
    <header>
        <div class="header__top">
            <div class="header__top__title">
                <a href="<?php echo home_url("/") ?>"><h1 class="glitch" data-text="Celanpatrium">Celanpatrium</h1></a>
            </div>
            <div class="header__top__tools">
                <?php
                //  вызов формы поиска из файла searchform.php
                echo get_search_form();

                wp_nav_menu(
                array(
                'theme_location' => 'lang-menu-header',
                'container' => 'ul',
                'menu_class' => 'header__lang-menu',
                )
                );
                ?>
            </div>
        </div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'header-categories-menu',
                'container' => false,
                'menu_class' => 'header_nav',
            )
        );
        ?>
    </header>

