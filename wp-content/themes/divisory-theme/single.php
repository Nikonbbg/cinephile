<?
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package divisory-theme
 */

get_header();
?><main id="main" class="site-main" role="main"><?
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content-film', get_post_format() );
        endwhile;
        $ganres = get_field('ganre', get_the_ID(), '');
        $simulars = getSimularFilms($ganres);
       ?>
    <div class="inner">
        <section>
            <div class="box">
                <header class="major">
                    <h2>Трэйлер</h2>
                </header>
                <p class="align-center"><?= get_field('video', get_the_ID(), '') ?></p>
            </div>
        </section>
    </div>

    <div class="inner"><br>
    <section>
        <div class="box">
            <header class="major">
                <h2>Похожие фильмы</h2>
            </header>
            <div class="posts"><?
                foreach ($simulars as $simular) {
                    require('template-parts/content-simular-films.php');
                }
            ?></div>
        </div>
    </section>
    </div>
    </main><?
get_sidebar();
get_footer();
