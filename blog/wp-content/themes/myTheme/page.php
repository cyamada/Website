<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

<?php get_header(); ?>

<div id="main">
    <div class="two">
        <div class="blog-wrapper"
           	<?php include('php/sidebar.php'); ?>
            <div class="blog">
            	<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                
                	<div class="post">
                    	<h2 class="title"><?php the_title(); ?></h2>
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumb">
                        	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                        </div><!-- post-thumb -->
                        <?php endif; ?>
                        
                        <?php the_content(); ?>
            		</div><!-- post -->
                    
            <?php endwhile; ?>
            <?php endif; ?>
            </div><!-- blog -->
		</div><!-- blog-wrapper -->
	</div><!-- two -->
</div><!-- main -->
     
</body>
</html>