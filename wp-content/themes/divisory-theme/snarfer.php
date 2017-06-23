<?php
/*
  Template Name: Snarfer
 */

define('WP_USE_THEMES', false);
get_header();
?><div id="main">erwgergwer<?
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
