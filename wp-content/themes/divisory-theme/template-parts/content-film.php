<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divisory-theme
 */
?>
<div class="inner"><br>
    <div class="row">
        <header class="12u align-center">
            <h1><?= get_the_title() ?></h1>
        </header>
    </div>

    <section>
        <div class="box">
            <header class="major">
                <h2>Описание</h2>
            </header>
            <section id="banner" style="padding: 30px 0 4em 0;">
                <div class="content"><?= get_the_excerpt() ?></div>
                <span class="image object"><?= get_the_post_thumbnail() ?></span>
            </section>
        </div>
    </section>

    <p><?= get_the_content() ?></p>

</div>

