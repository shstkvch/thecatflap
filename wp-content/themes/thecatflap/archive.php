<?php get_header(); ?>
	<div class="wrap">
		<div id="inner-content" class="wrap clearfix">
				<div class="apology">
					<h1>Our Apologies...</h1>
					<p>This part of the website is still under construction.</p>
					<p>It will look less naff soon, honest.</p>
				</div>
				<div class="pure-g">
					<div class="pure-u-1">
						<div class="title bit">
							<h2 class="miscellaneous"><?php echo(single_cat_title()); ?></h2>
						</div>
					</div>
				</div>
				<div class="pure-g">
					<?php while (have_posts()) : the_post(); ?>
						<div class="pure-u-1-4">
							<a href="<?php the_permalink(); ?>">
								<div class="article bit">
								 	<?php 
						                if (has_post_thumbnail()) { // im amazed this work
						                	the_post_thumbnail('less-important-img');
						            	}
						            ?>
									<h2><?php the_title(); ?></h2>
									<?php if($post->post_excerpt) the_excerpt();  ?>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="pure-g">
					<div class="pure-u-1">
						<?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?> 
					 </div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
