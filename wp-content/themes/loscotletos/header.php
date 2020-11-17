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

global $redux_loscotletos;
$main_title = $redux_loscotletos['lc-header-title'];

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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(69474052, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/69474052" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="main_page_wrapper main_page_wrapper_main_page container">
    <header>
        <div class="header_title">
            <?php if($main_title) { ?>
                 <a href="<?php echo home_url("/") ?>"><h1 class="glitch" data-text="<?= $main_title ?>"><?= $main_title ?></h1></a>
            <?php } else { ?>
                <a href="<?php echo home_url("/") ?>"><h1 class="glitch" data-text="sorry, we dot have title">sorry, we dot have title</h1></a>
            <?php }
//                вызов формы поиска из файла searchform.php
//                echo get_search_form();
            ?>
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

