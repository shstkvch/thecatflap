<?php get_header(); ?>
	<div class="wrap">
		<div id="inner-content" class="wrap clearfix">
				<div class="pure-g-r" role="main">
					<div class="pure-u-2-5">
						<div class="title bit">
							<h2 class="miscellaneous">The Catflap Word of the Day</h2>
							<p><em>The Catflap Dictionary and Shipping Map Company</em>, a subsidiary of Catflap Media International, is proud to release its entire Word of the Day archive online, for free.</p>
							<p>The archives originally spanned over 40 years of content, but many words were tragically destroyed during <em>The Great Catflap Publishing Office Microwave Fire</em> of last month.</p>
							<p>Follow The Catflap Word of the Day:</p>
							<p><a href="https://twitter.com/catflap_wotd" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @catflap_wotd</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
						</div>
					</div>
					<div class="pure-u-3-5">
						<?php while (have_posts()) : the_post(); ?>
							<div class="wotd bit">
								<h2><?php the_title(); ?></h2>
								<span class="date">From <?php echo(get_the_date('F j, Y')); ?></span>
								<p><?php the_content(); ?></p>
							</div>
						<?php endwhile; ?>
						<div class="bit">
							<p><?php previous_posts_link( 'Previous' ); ?> <?php next_posts_link( 'More' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
