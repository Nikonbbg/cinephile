<?php
/*
Template Name: Шаблон фильмов
*/

get_header();
$args = array(
    'post_type' => 'films',
    'publish' => true,
    'paged' => get_query_var('paged'),
);

query_posts($args);
?><div id="main">
    <div class="inner"><br>
        <section>
            <header class="major">
                <h2>Фильмы</h2>
            </header>
            <div class="posts"><?
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content-films', get_post_format() );




                endwhile;
//                the_post_navigation();
                ?>
            </div>
        </section>
    </div>
    </div>
<?
get_sidebar();
get_footer();