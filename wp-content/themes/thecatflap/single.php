<?php get_header(); ?>
			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<div class="pure-g">
										<div class="pure-u-4-5">
											<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
											<h2 class="excerpt"><?php if($post->post_excerpt) echo(str_replace(array("<p>", "</p>"), '', get_the_excerpt())); // shocking code  ?></h2>
										</div>
										<div class="pure-u-1-5">
											<h3 class="miscellaneous">Share this:</h3>
											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style">
											<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
											<a class="addthis_button_tweet"></a>
											</div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-520ac2d219a7edf3"></script>
											<!-- AddThis Button END -->
										</div>
								</header> <!-- end article header -->
								<div class="pure-g">
									<div class="pure-u-1">
										
											<?php 
											$custom_fields = get_post_custom(); 
											if(!$custom_fields['featured_image_hide'][0] && has_post_thumbnail()) {
											?>
											<div class="article_img">
											<?php
												the_post_thumbnail('article', array('class' => 'article_img'));
												if ($custom_fields['featured_image_caption'][0]) {
											?>
												<span class="caption"><?php echo($custom_fields['featured_image_caption'][0]); ?></span>
											<?php 
												}
											?>
											</div>
											<?php // this is a fucking nightmare, i hate php
											}
											?>
										
										<?php the_content(); ?>

									</div>
								</div>
								<div class="pure-g">
									<!-- rel posts -->
									<div class="pure-u-1">
										<?php wp_related_posts()?>
									</div>
								</div>
								<div class="pure-g">
									<!-- licensing shit -->
									<div class="pure-u-1">
										<div class="license">
										<?php 
										$custom_fields = get_post_custom(); 
										if($custom_fields['image source'] && $custom_fields['image license']):
										?>
										<p>The image used in this article is freely available <a href="<?php echo($custom_fields['image source'][0])?>">here</a>
										and is licensed under <?php echo($custom_fields['image license'][0]) ?></p>
										<?php endif ?>
										</div>
									</div>
								</div>

								<!--<footer class="article-footer">
									<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

								</footer>--> <!-- end article footer -->



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
