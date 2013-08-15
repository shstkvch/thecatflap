<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e("Post Not Found", "bonestheme"); ?></h1>

							</header> <!-- end article header -->

							<section class="entry-content">

								<p><?php _e("Sorry, we can't find the post you were looking for. Thankfully, our exciting front page is only a <a href='" . home_url() . "'>click away!</a>", "bonestheme"); ?></p>

							</section> <!-- end article section -->

						</article> <!-- end article -->

					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
