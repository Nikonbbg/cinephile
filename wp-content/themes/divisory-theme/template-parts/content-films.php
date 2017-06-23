<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divisory-theme
 */

?>
<article id="film-<? the_ID(); ?>" class="film">
    <a href="<?= get_the_permalink() ?>" class="image"><?= get_the_post_thumbnail() ?></a>
    <h3><?= get_the_title() ?></h3>
    <p><?= get_the_excerpt() ?></p>
    <ul class="actions align-center">
        <li><a href="<?= get_the_permalink() ?>" class="button">Детально</a></li>
    </ul>
</article>