<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divisory-theme
 */

get_header();
?><div id="main"><?
if (have_posts()) : while (have_posts()) : the_post();
        ?> 
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?= the_content() ?></p><? 
        endwhile;
else:
    ?>
    <p><?= _e('Sorry, no posts matched your criteria.'); ?></p><?
endif;
?></div><?
get_sidebar();
get_footer();
?>
