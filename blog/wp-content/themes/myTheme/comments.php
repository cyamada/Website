<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

<?php
	
	if (!empty($SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly.');
	
	if ( post_password_required() ) { ?>
    	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
    <?php
		return;
	}
?>

		<div id="comments">
        <h3 id="commentnum"><?php comments_number('no comments','1 comment','% comments' ); ?></h3>
        
        <?php if ( have_comments() ) : ?>
        
        <ol class="commentlist">
        	<?php wp_list_comments('avatar_size=0&type=comment'); ?>
        </ol>
        
        <?php if ($wp_query->max_num_pages > 1) : ?>
        <div class="pagination">
        	<ul>
            	<li class="older"><?php previous_comments_link('older') ?></li>
                <li class="newer"><?php next_comments_link('newer') ?></li>
            </ul>
        </div><!-- pagination -->
        <?php endif; ?>
        <?php endif; ?>
        
        <?php if ( comments_open() ) : ?>
        <div id="respond">
        	<h3>leave a response</h3>
            
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            	<fieldset>
                	<label for="author" id="authorname">name:</label>
                    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />
                    <!--
                    <label for="email">email:</label>
                    <input type="text" name="email" id="email" value="<?php $comment_author_email; ?>" />
                    
                    <label for="url">website:</label>
                    <input type="text" name="url" value="<?php echo $comment_author_url; ?>" />
    				-->
                    <label for="comment" id="meslab">message:</label>
                    <textarea name="comment" id="comment" rows="" cols=""></textarea>
               
                    <input type="submit" class="commentsubmit" value="submit comment" />
                    
                    <?php comment_id_fields(); ?>
                    <?php do_action('comment_form', $post->ID); ?>
                </fieldset>
            </form>
            <p class="cancel"><?php cancel_comment_reply_link('cancel_reply'); ?></p>
        </div><!-- respond -->
        <?php else : ?>
        	<h3>comments are closed</h3>
        <?php endif; ?>
        </div><!-- comments -->

</body>
</html>