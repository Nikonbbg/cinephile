<?
/*
Template Name: Шаблон страницы поиска
*/

$query = filter_input(
    INPUT_POST,
    'query',
    FILTER_SANITIZE_SPECIAL_CHARS
);

$dbSelect = findFilmLikeTitleOrContent($query);

get_header();
?><div id="main">
    <div class="inner">
        <section>
            <header class="major">
                <h2><?= $query ?></h2>
            </header>
            <div class="posts"><?
                //                while ( $dbSelect->have_posts() ) {
                //                    $dbSelect->the_post();
                //
                //                    get_template_part( 'template-parts/content-films', get_post_format() );
                //                }
                $args = array(
                    'post_type' => 'films',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'simular_films',
                            'field' => 'slug',
                            'terms' => 'comedy'
                        )
                    )
                );
                $querywp = new WP_Query ($args);
                while ( $querywp->have_posts() ) {
                    $querywp->the_post();

                    get_template_part( 'template-parts/content-films', get_post_format() );
                }

                ?></div>
        </section>
    </div>
</div>
    <script>
        $(document).ready(function () {
            $("input[name='query']").val('<?= $query ?>')
        })
    </script><?
get_sidebar();
get_footer();