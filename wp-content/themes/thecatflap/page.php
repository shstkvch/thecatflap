<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<h2 class="section_name"><!-- fuckall to put here --></h2>
									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
									<script type="text/javascript">
										var article_title = $("<div/>").html("<?php the_title(); ?>").text(); // removes htmlentities the quick & dirty way
									</script>

									<p class="excerpt"><?php if($post->post_excerpt) the_excerpt();  ?></p>

								</header> <!-- end article header -->
								<div class="pure-g">
									<div class="pure-u-1">
										<div class="article_img">
											<?php the_post_thumbnail('article', array('class' => 'article_img'));   ?>
											<?php $custom_fields = get_post_custom(); 
											if ($custom_fields['featured_image_caption'][0]) {
											?>
												<span class="caption"><?php echo($custom_fields['featured_image_caption'][0]); ?></span>
											<?php 
											}
											?>
										</div>
										<?php the_content(); ?>
									</div>
								</div>


								<!--<footer class="article-footer">
									<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

								</footer> <!-- end article footer -->



							</article> <!-- end article -->

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div> <!-- end #main -->

					<?php // get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
