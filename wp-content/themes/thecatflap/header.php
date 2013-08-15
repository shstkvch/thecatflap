<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php bloginfo('name'); ?> <?php wp_title(' - '); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
		<div id="container">

			<header id="site_header" role="banner">
				<div class="top_feature left">
				<!--
				<a href="https://twitter.com/the_catflap" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @the_catflap</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				
				<iframe src="//www.facebook.com/plugins/like.php?href=https://www.facebook.com/pages/The-Catflap/528919823841116&amp;width=450&amp;height=46&amp;colorscheme=light&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:46px;" allowTransparency="true"></iframe>
				-->

				</div>
				<?php
					// word of the fucking day
					global $post;
					$args = array( 'posts_per_page' => 1, 'category_name' => 'wordoftheday' );
					$myposts = get_posts( $args );

					if($myposts):
				?>
				<?php
					foreach ($myposts as $post ) : setup_postdata($post);
				?>
				<div class="top_feature right">
					<a href="<?php echo home_url(); ?>/category/wordoftheday"> <!-- this shouldn't be hardcoded but i cba to find the proper way to do it -->
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
					</a>
				</div>
				<?php 
				endforeach; 
				endif; 
				?>
				<div class="titlebox">
					<a href="<?php echo home_url(); ?>" rel="nofollow">
					  <!-- this crap with the inline stylesheet is bad and i should fix it but i cba -->
					  <h1 style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/library/images/catflap_logo.png)"><?php bloginfo('name'); ?></h1>
					  <h2>Striving for Accurecy</h2>
					</a>
					<!-- Gorgeous news for a fugly Britain
					Striving for accurecy
					Because printed news is hard to hold
					Because porn is banned now 
					Funnier than The Guardian
					Updated every second of every so often 
					Celebrating 2,432 years of satire
					Celebrating 75 years of journalism -->
				</div>

				<!-- share box shit -->

				<!--<div class="floatylike">
					<p id="beg">Feed<br/>the<br/>Writers?</p>
					<div class="fb_share">
						<a href="#">Share</a>
					</div>
					<div class="twt_share">
						<a href="#">Tweet</a>
					</div>
				</div>-->

			</header> <!-- end header -->
			<div class="main_menu">
				<!--<?php bones_main_nav(); ?>-->
			</div>
						
