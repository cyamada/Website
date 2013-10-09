<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>blog</title>	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

<?php get_header(); ?>

<div id="main">
    <div class="two">
        <div class="blog-wrapper"
           	<?php get_sidebar(); ?>
            <div class="blog">
            
            	<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                
                	<div <?php post_class() ?>>
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumb">
                        	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                        </div><!-- post-thumb -->
                        <?php endif; ?>
                        
                        <div class="post">
                        	<?php the_content(''); ?>
                        </div><!-- post -->
                        <ul class="meta">
                        	<li id="date"><?php the_time('F jS, Y') ?></li>
                            <li id="category">posted in <?php the_category(', ') ?></li>
                            <li id="num-comments"><?php comments_number('no comments','1 comment','% comments'); ?></li>
                        </ul>
                    </div><!-- post_class -->
                    
                    <?php endwhile; ?>
                    
                    <div class="pagination">
                    	<ul>
                        	<li class="older"><?php next_posts_link('older') ?></li>
                            <li class="newer"><?php previous_posts_link('newer') ?></li>
                        </ul>
                    </div><!-- pagination -->
                    
                    <?php else : ?>
                    	
                        <h2>nothing found</h2>
                        <p>sorry, but the page you are looking for isn't here</p>
                        <p><a href="<?php echo get_option('home'); ?>">return to the homepage</a></p>
                        
                    <?php endif; ?>
            </div><!-- blog -->
        </div><!-- blog-wrapper -->
    </div><!-- two -->
</div><!-- main -->
        
</div><!-- main -->

<?php get_footer(); ?>

</body>
</html>
