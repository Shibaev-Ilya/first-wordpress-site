<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package loscotletos
 */

get_header();
?>

    <main>
        <section>
            <?php echo get_breadcrumbs(); ?>
            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content');

            endwhile; // End of the loop.
            ?>
        </section>
    </main><!-- #main -->

<?php
get_footer();
