<?php get_header(); ?>
<div class="wrap">
	<div id="inner-content" class="wrap clearfix">
			<div class="pure-g" role="main">
				<div class="pure-u-7-12">
					<div class="title bit">
						<h2 class="top_stories">Latest Articles</h2>
					</div>
					<?php query_posts('showposts=1&category_name=news,comment,culture&offset=0'); if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
					<!-- 1 -->
					<div <?php post_class(array('article', 'bit')); ?>>
			            <a href="<?php the_permalink(); ?>">
			                <?php 
			                if (has_post_thumbnail()) { // im amazed this work
			                	the_post_thumbnail('article-img');
			            	}
			            	?>
			            	<h1><?php the_title(); ?></h1>
			            	<?php if($post->post_excerpt) the_excerpt();  ?>
			            </a>
			        </div>
			    <?php 
			    endwhile;
			    endif;
			    ?>

			    <div class="pure-g">
			    	<!-- 3-4 -->
				    <?php 
				    query_posts('showposts=2&category_name=news,comment,culture&offset=2'); if (have_posts()) : ?><?php while (have_posts()) : the_post();
				    ?>
				    	
			    		<div class="pure-u-1-2">
							<div <?php post_class(array('article', 'bit')); ?>>
					            <a href="<?php the_permalink(); ?>">
					                <?php 
					                if (has_post_thumbnail()) { // im amazed this work
					                	the_post_thumbnail('less-important-img');
					            	}
					            	?>
					            	<h2><?php the_title(); ?></h2>
					            	<?php if($post->post_excerpt) the_excerpt();  ?>
					            </a>
					        </div>
					    </div>
						
				    <?php 
				    endwhile;
				    endif;
				    ?>
			    </div>
			    <div class="pure-g">
			    	<!-- 7-8 -->
				    <?php 
				    query_posts('category_name=news,comment,culture&offset=7'); if (have_posts()) : ?><?php while (have_posts()) : the_post();
				    ?>
				    	
			    		<div class="pure-u-1-2">
							<div <?php post_class(array('article', 'bit')); ?>>
					            <a href="<?php the_permalink(); ?>">
					                <?php 
					                if (has_post_thumbnail()) { // im amazed this work
					                	the_post_thumbnail('less-important-img');
					            	}
					            	?>
					            	<h2><?php the_title(); ?></h2>
					            	<?php if($post->post_excerpt) the_excerpt();  ?>
					            </a>
					        </div>
					    </div>
						
				    <?php 
				    endwhile;
				    endif;
				    ?>
				 </div>
			 	<!--
			 	<div class="pure-g">		
					<?php
						query_posts('showposts=2&category_name=news,comment,culture&offset=9'); if (have_posts()) : 
					?>
					<div class="bit lesser">
					<h2 class="miscellaneous">Also in this section:</h2>
					<ul>
						<?php while (have_posts()) : the_post();?>
						<li>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
						</li>
					<?php 
					endwhile;
					?>
					</ul>
					<?php
					endif; 
					?>
			 	</div>-->
				
			</div> <!-- end 3-5 columns-->
			<div class="pure-u-5-12">
					<div class="title bit">
						<h3 class="miscellaneous">&nbsp;</h3>
					</div>
						<!-- 2 -->
						<?php
							query_posts('showposts=1&category_name=news,comment,culture&offset=1'); if (have_posts()) : ?><?php while (have_posts()) : the_post();
						?>
							<div <?php post_class(array('article', 'bit', 'small')); ?>>
								<a href="<?php the_permalink(); ?>">
									
									<?php 
									if(has_post_thumbnail()):
										$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'article-img' ); 
					                	$alt_text = get_post_meta($post->ID, '_wp_attachment_image_alt', true);
									?>
									<img src="<?php echo $thumbnail['0']; ?>" alt="<?php echo($alt_text); ?>"/>
									<h2><?php the_title(); ?></h2>
									<?php if($post->post_excerpt) the_excerpt();  ?>
									<?php endif; ?>
								</a>
							</div>

						<?php 
						endwhile;
						endif; 
						?>
						<!-- 5-7 -->
						<?php
							query_posts('showposts=3&category_name=news,comment,culture&offset=4'); if (have_posts()) : ?><?php while (have_posts()) : the_post();
						?>
							<div <?php post_class(array('article', 'bit', 'small')); ?>>
								<a href="<?php the_permalink(); ?>">
									
									<?php 
									if(has_post_thumbnail()):
										$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'article-img' ); 
					                	$alt_text = get_post_meta($post->ID, '_wp_attachment_image_alt', true);
									?>
									<img src="<?php echo $thumbnail['0']; ?>" alt="<?php echo($alt_text); ?>"/>
									<h2><?php the_title(); ?></h2>
									<?php if($post->post_excerpt) the_excerpt();  ?>
									<?php endif; ?>
								</a>
							</div>

						<?php 
						endwhile;
						endif; 
						?>
										
						<!--
						<?php
							query_posts('showposts=2&category_name=news,comment,culture&offset=4'); if (have_posts()) : 
						?>
						<div class="bit lesser">
						<h2 class="miscellaneous">Also in this section:</h2>
						<ul>
							<?php while (have_posts()) : the_post();?>
							<li>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
							</li>
						<?php 
						endwhile;
						?>
						</ul>
						<?php
						endif; 
						?>
						
					</div>-->
					<!--<div class="title bit">
						<h3 class="miscellaneous">Culture</h3>
					</div>-->
					<!-- CULTURE PISH -->
					<!--<?php
						query_posts('showposts=1&category_name=culture&offset=0'); if (have_posts()) : ?><?php while (have_posts()) : the_post();
					?>
						<div <?php post_class(array('article', 'bit', 'smaller')); ?>>
							<a href="<?php the_permalink(); ?>">
								<?php
								if(has_post_thumbnail()):
									$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'article-img' ); 
				                	$alt_text = get_post_meta($post->ID, '_wp_attachment_image_alt', true);
								?>
									<img src="<?php echo $thumbnail['0']; ?>" alt="<?php echo($alt_text); ?>"/>
									<h2><?php the_title(); ?></h2>
									<?php if($post->post_excerpt) the_excerpt();  ?>
								<?php endif; ?>
							</a>
						</div>
					<?php
					endwhile;
					endif;
					?>-->
					<!-- lesser culture -->
					<!--<div class="bit lesser">
						<h2 class="miscellaneous">Also in this section:</h2>
						<ul>
						<?php
							query_posts('showposts=2&category_name=culture&offset=1'); if (have_posts()) : ?><?php while (have_posts()) : the_post();
						?>
							<li>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
							</li>
						<?php 
						endwhile;
						endif; 
						?>
						</ul>
					</div>
					-->
					<!-- lesser a bloody ad or something -->
					<!--<div class="bit advert">
						<h2 class="miscellaneous">Advertisement:</h2>
						<div class="ad_holder">
							<img src="http://dummyimage.com/mediumrectangle?text=FUCKING ADVERTS"></img>
						</div>
					</div>-->
			</div> <!-- end 2-5 column -->
		</div> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>
