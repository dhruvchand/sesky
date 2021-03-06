<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php do_action( 'before' ); ?>
<div class="pure-g-r" id="layout">
    <div class="sidebar pure-u">
        <header class="header pure-u-1">
            <div class="pure-g-r">
                <div class="pure-u-3-5">
                    <h1 class="brand-title">The Beach Side Blues</h1>
                </div>
                <div class="menu-part pure-u-2-5">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="/faq">faq</a>
                    </li>
                    <li class="nav-item">
                        <a href="/forum">forum</a>
                    </li>
                    <li class="nav-item">
                        <a href="/faq">menu &raquo;</a>
<!--
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
-->
                    </li>
                </ul>
        </div>
        </header>
    </div>

    <div class="content pure-u-1">
        <!-- A wrapper for all the blog posts -->
        <div class="posts pure-g-r">
            <h1 class="content-subhead pure-u-1">Recent Posts</h1>

            <?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php sesky_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

            <!-- A single blog post -->
            <section class="post pure-u-1-2">
                <header class="post-header">
                    <img class="post-avatar"
                         alt="Tilo Mitra's avatar" src="http://purecss.io/img/common/tilo-avatar.png"
                         height="48" width="48">

                    <h2 class="post-title pure-u-1">Defense of The Ancients</h2>

                    <p class="post-meta pure-u-1">
                        By <a href="#" class="post-author">Tilo Mitra</a> under <a class="post-category post-category-design" href="#">CSS</a> <a class="post-category post-category-pure" href="#">Pure</a>
                    </p>
                </header>

                <div class="post-description pure-u-1">
                    <p>
                        The following article contains strong, profane and provocative language. The views expressed in this article are the views of the author alone. It was common consensus among the editors that the author retains the right to express himself in a manner of his choosing. The discretion of the reader is called upon under this circumstance.
Disclaimer: TBSB does not own the rights to any of the images displayed in this page. The images have been obtained from various webpages, and are used for a merely illustrative purpose. The rights to these images lay with the owners of DoTA 2 – Valve Corporation.
                    </p>
                </div>
            </section>
<!--
        </div>
        <div class="posts pure-g-r">
            <h1 class="pure-u-1 content-subhead">Recent Posts</h1>
            -->

            <section class="post pure-u-1-2">
                <header class="post-header">
                    <img class="post-avatar"
                         alt="Eric Ferraiuolo's avatar" src="http://purecss.io/img/common/ericf-avatar.png"
                         height="48" width="48">

                    <h2 class="post-title pure-u-1">On Programming Languages (Part 1)</h2>

                    <p class="post-meta pure-u-1">
                        By <a class="post-author" href="#">Eric Ferraiuolo</a> under <a class="post-category post-category-js" href="#">JavaScript</a>
                    </p>
                </header>

                <div class="post-description pure-u-1">
                    <p>
                       TBSB is proud to announce a series of articles by Shashi Gowda, fourth year student of Information Technology. In this series, a tour de force, Shashi explains the many intricacies of the different programming languages – C, Python and Lisp.

Experienced programmers liken programming more to an artform or a craft than to a science or to engineering. It is, in essence, taking tools and crafting puzzle-like structures that work in harmony towards an end goal                    </p>
                </div>
            </section>

            <section class="post pure-u-1-2">
                <header class="post-header">
                    <img class="post-avatar" alt="Reid Burke's avatar"
                         src="http://purecss.io/img/common/reid-avatar.png"
                         height="48" width="48">

                    <h2 class="post-title pure-u-1">The DebSoc</h2>

                    <p class="post-meta pure-u-1">
                        By <a class="post-author" href="#">Reid Burke</a> under <a class="post-category" href="#">Uncategorized</a>
                    </p>
                </header>

                <div class="post-description pure-u-1">
                    <p>Abhinav Roy Burman is a second year student of Electronics and Communication Engineering and is a member of the NITK Debating Society. An avid debater and football player, he was a part of the team that won the Best Novice Team award at the Rashtreeya Vidayalaya Debating Tournament. He is also interested in dramatics and played the role of a shepherd in the play Fools, performed by the Rotoract Club and the Literary Stage and Debating Society. Abhinav speaks about the Debating Society (DebSoc in short) in this article.</p>
                    <div class="post-images pure-g-r">
                        <div class="pure-u-1-2">
                            <a href="http://www.flickr.com/photos/uberlife/8915936174/">
                                <img alt="Photo of someone working poolside at a resort"
                                     src="http://farm8.staticflickr.com/7448/8915936174_8d54ec76c6.jpg">
                            </a>

                            <div class="post-image-meta pure-u-1">
                                <h3>CSSConf Photos</h3>
                            </div>
                        </div>

                        <div class="pure-u-1-2">
                            <a href="http://www.flickr.com/photos/uberlife/8907351301/">
                                <img alt="Photo of the sunset on the beach"
                                     src="http://farm8.staticflickr.com/7382/8907351301_bd7460cffb.jpg">
                            </a>

                            <div class="post-image-meta pure-u-1">
                                <h3>JSConf Photos</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="post pure-u-1-2">
                <header class="post-header">
                    <img class="post-avatar"
                         alt="Andrew Wooldridge's avatar" src="/img/common/andrew-avatar.png"
                         height="48" width="48">

                    <h2 class="post-title pure-u-1">YUI 3.10.2 Released</h2>

                    <p class="post-meta pure-u-1">
                        By <a class="post-author" href="#">Andrew Wooldridge</a> under <a class="post-category post-category-yui" href="#">YUI</a>
                    </p>
                </header>

                <div class="post-description pure-u-1">
                    <p>
                        We are happy to announce the release of YUI 3.10.2! You can find it now on the Yahoo! CDN, download it directly, or pull it in via npm. We’ve also updated the YUI Library website with the latest documentation.
                    </p>
                </div>
            </section>
        </div>

        <footer class="footer">
            <div class="pure-menu pure-menu-horizontal pure-menu-open">
                <ul>
                    <li><a href="http://purecss.io/">About</a></li>
                    <li><a href="http://twitter.com/yuilibrary/">Twitter</a></li>
                    <li><a href="http://github.com/yui/pure/">Github</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>

<script src="http://yui.yahooapis.com/3.10.1/build/yui/yui-min.js"></script>
<script>
YUI().use('node-base', 'node-event-delegate', function (Y) {
    // This just makes sure that the href="#" attached to the <a> elements
    // don't scroll you back up the page.
    Y.one('.content').delegate('click', function (e) {
        e.preventDefault();
    }, 'a[href="#"]');
});
</script>



</body>
</html>

