<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>
<h2><?php _e("This post is password protected. Enter the password to view comments."); ?></h2>
<?php
return;
}
}
$commentalt = '';
$commentcount = 1; ?>

<div id="comments-template">
<h4><?php comments_number('No User', '1 User', '% Users' );?> Responded in &quot; <?php the_title(); ?> &quot;</h4>


<div class="com-medzera"></div>


<?php if ( $comments ) : ?>
<? // Begin Comments ?>
<?php foreach ($comments as $comment) : ?>
<? if ($comment->comment_type != "trackback" && $comment->comment_type != "pingback" && !ereg("<pingback />", $comment->comment_content) && !ereg("<trackback />", $comment->comment_content)) { ?>

<div class="com-box" id="comment-<?php comment_ID() ?>">
<div class="com-avatar"><?php if(function_exists("MyAvatars")) : ?> <?php MyAvatars(); ?><?php else: ?><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/avatar.jpg" alt="avatar"/></a><?php endif; ?></div>

<div class="com-meta">
<div class="com-left"><?php comment_author_link(); ?> said,&nbsp;&nbsp;<?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></div>
<div class="com-date"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a></div>
<div class="com-text"><?php comment_text(); ?></div></div>

</div>


<?php

($commentalt == "")?$commentalt="":$commentalt="";

$commentcount++;

?>

<? } ?>

<?php endforeach; /* end for each comment */ ?>

<? // Begin Trackbacks ?>
<?php foreach ($comments as $comment) : ?>
	<? if ($comment->comment_type == "trackback" || $comment->comment_type == "pingback" || ereg("<pingback />", $comment->comment_content) || ereg("<trackback />", $comment->comment_content)) { ?>

<? if (!$runonce) { $runonce = true; ?>
<h5>Pingback &amp; Trackback</h5>
<? } ?>


<div class="com-box" id="comment-<?php comment_ID() ?>">

<div class="com-meta">
<div class="com-left">Pingback from <?php comment_author_link(); ?>&nbsp;&nbsp;<?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></div>
<div class="com-date"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a></div>
</div>

</div>



<?php

($commentalt == "-alt")?$commentalt="":$commentalt="-alt";

$commentcount++;

?>

<? } ?>

<?php endforeach; /* end for each comment */ ?>

<? if ($runonce) { ?>
<? } ?>
<? // End Trackbacks ?>

<?php endif; ?>

<? // End Comments ?>

<?php if ('open' == $post->comment_status) : ?>

<?php if (get_option('comment_registration') && !$user_ID) : ?>

<h5>Sorry, the comments area closed</h5>

<?php else : ?>

<h6>Leave A Reply Here</h6>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">

<p><input name="author" type="text" class="form-input" value="<?php echo $comment_author; ?>"/>&nbsp;&nbsp;Username <span class="red">[*]</span></p>
<p><input name="email" type="text" class="form-input" value="<?php echo $comment_author_email; ?>" />&nbsp;&nbsp;Email Address <span class="red">[*]</span></p>
<p><input name="url" type="text" class="form-input" value="<?php echo $comment_author_url; ?>"/>&nbsp;&nbsp;Website</p>

<p><?php comments_rss_link('Subscribes'); ?> to this post comments updates</p>

<p><textarea name="comment" cols="50%" rows="8"></textarea></p>

<p><input name="Submit" type="submit" value="Submit" class="form-button"/><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

<p id="notify"><strong>Please Note:</strong> Your comment will be under moderation. Don't resubmit please. Thank you.</p>

</form>

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>

</div>