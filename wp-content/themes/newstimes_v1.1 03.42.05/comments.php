<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
<p class="nocomments">Password protected.</p>
<?php		return;	} ?>
<!-- You can start editing here. --> 
<div class="comments-box"> <a name="comments" id="comments"></a>
  <?php if ( have_comments() ) : ?>
  	<div id="displaying"><?php _e("Displaying", "nt"); ?> <?php comments_number('No Comments', '1 Comments', '% Comments' );?>  </div>
 	<div id="haveyoursay"><?php _e("Have Your Say", "nt"); ?>  </div>
                       	<div class="cb"></div>
  <ol class="commentlist"> 
    <?php wp_list_comments('avatar_size=35'); ?>
  </ol>
  <div class="navigation">
    <div class="left">
      <?php previous_comments_link() ?>
    </div>
    <div class="right">
      <?php next_comments_link() ?>
    </div>
  </div>
  <?php else : // this is displayed if there are no comments so far ?>
  <?php if ('open' == $post->comment_status) : ?>
  <!-- If comments are open, but there are no comments. -->
  <?php else : // comments are closed ?>
  <!-- If comments are closed. -->
  <?php endif; ?>
  <?php endif; ?>
  <?php if ('open' == $post->comment_status) : ?>   	 
  <div id="respond">     
    <h2 style="margin-top: 8px;"><?php _e("Leave a comment", "nt"); ?></h2>
    <div class="cancel-comment-reply"> <small>
      <?php cancel_comment_reply_link(); ?>
      </small> </div>
    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
    <p><?php print 'You must be'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php print 'Logged in'; ?></a> <?php print 'to post comment'; ?>.</p>
    <?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
      <p><?php print 'Logged as'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php print 'Log out'; ?> &raquo;</a></p>
      <?php else : ?>
      <p>     <input class="author" type="text" value="<?php _e("Your Name", "nt"); ?>..." onclick="this.value='';" name="author" id="author" size="22" tabindex="1"/>
        <label for="author"><small>
        <?php if ($req) echo "(Required)"; ?>
        </small></label>  </p>    <p>
        <input class="email" type="text" value="<?php _e("Your Email", "nt"); ?>..." onclick="this.value='';" name="email" id="email" size="22" tabindex="2"/>
        <label for="email"><small>(Will not be published)
        <?php if ($req) echo " (Required)"; ?>
        </small></label>
      </p>
      <p>
        <input class="url" type="text" value="<?php _e("Your Website", "nt"); ?>..." onclick="this.value='';" name="url" id="url" size="22" tabindex="3"/>
        <label for="url"><small>(Optional)</small></label>
      </p>
      <?php endif; ?>
      <p>
        <textarea name="comment" id="comment" tabindex="4"></textarea>
      </p>        <p><small><strong>XHTML:</strong> <?php _e("You can use these html tags", "nt"); ?>: <code><?php echo allowed_tags(); ?></code></small></p>
      <p>        <input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e("Submit Comment", "nt"); ?>" />
        <?php comment_id_fields(); ?>
      </p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
    <?php endif; // If registration required and not logged in ?>
  </div>
  <?php endif; // if you delete this the sky will fall on your head ?>
</div>