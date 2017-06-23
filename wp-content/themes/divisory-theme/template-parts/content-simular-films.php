<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divisory-theme
 */

?>
<article id="film-<?= $simular['ID'] ?>" class="film 4u">
    <a href="<?= $simular['DETAIL_URL'] ?>" class="image"><img src="<?= $simular['PICTURE'] ?>" alt=""></a>
    <h3><?= $simular['TITLE'] ?></h3>
    <ul class="actions align-center">
        <li><a href="<?= $simular['DETAIL_URL'] ?>" class="button small">Детально</a></li>
    </ul>
</article>