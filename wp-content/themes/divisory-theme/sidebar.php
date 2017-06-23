<div id="sidebar">
						<div class="inner">

							<!-- Search -->
                                <ul class="actions align-center">
                                    <li><a class="button special searchButton" id="name">По контексту</a></li>
                                    <li><a class="button searchButton" id="byGenre">По жанру</a></li>
                                </ul>
								<section id="search">
                                    <form method="post" action="/search">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>
                                <section id="Genre" class="hide">
                                    <header class="major">
                                        <h2>Жанры</h2>
                                    </header>
                                    <form method="post" action="/search"><?
                                        $simularFilms = get_terms('simular_films', 'orderby=name');
                                        foreach ($simularFilms as $simularFilm) {
                                            ?><div class="6u$ 12u$(small)">
                                                <input type="checkbox" id="genre<?= $simularFilm->term_id ?>" name="genre<?= $simularFilm->term_id ?>" value="<?= $simularFilm->slug ?>">
                                                <label for="genre<?= $simularFilm->term_id ?>"><?= $simularFilm->name ?></label>
                                            </div><?
                                        }
                                        ?><br>
                                        <input type="submit" value="Найти">
                                    </form>
                                </section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<?= wp_nav_menu() ?>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Скоро</h2>
									</header>
									<div class="mini-posts"><?
                                        $novelties = getNovelties();
                                        foreach ($novelties as $novelty) {
                                            ?><article>
                                            <a href="<?= get_permalink($novelty->ID) ?>" class="image">
                                                <img src="<?= get_the_post_thumbnail_url($novelty->ID) ?>" alt="" />
                                            </a>
                                            <h3><?= get_the_title($novelty->ID) ?></h3>
                                            </article>
                                            <ul class="actions align-center">
                                            <li><a href="<?= get_permalink($novelty->ID) ?>" class="button">More</a></li>
                                            </ul><?
                                        }
                                    ?></div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
                                    <p class="copyright"><?= get_custom('copy') ?></p>
								</footer>

						</div>
					</div>
<script>
    $(document).ready(function () {
        $(".searchButton").click(function () {
            $(this).toggleClass("special");
//            $(".searchButton:not(" + $(this).attr('id') + ")").removeClass("special");

            var idSection =  $(this).attr("id").replace("by", "#");
//            alert(idSection);
            $(idSection).toggleClass("show");
            $("section:not(" + idSection + ")").toggleClass("hide");
//            $(".searchButton:not(" + this + ")").removeClass("special");
        })
    })
</script>