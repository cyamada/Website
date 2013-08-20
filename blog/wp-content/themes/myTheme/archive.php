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
                
                <?php if (is_category()) { ?>
                		<h2 class="title"><?php single_cat_title(); ?></h2>
                    <?php } elseif (is_month()) { ?>
                    	<h2 class="title"><?php the_time('F, Y'); ?></h2>
                    <?php } ?> 
                
                <?php while (have_posts()) : the_post(); ?>
                
                	<div <?php post_class() ?>>
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumb">
                        	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                        </div><!-- post-thumb -->
                        <?php endif; ?>
                        
                        <?php the_content(''); ?>
                        <ul class="meta">
                        	<li><?php the_time('F jS, Y') ?></li>
                            <li>posted in <?php the_category(', ') ?></li>
                            <li><?php comments_number('no comments','1 comment','% comments'); ?></li>
                        </ul>
                    </div><!-- post_class -->
                    
                    <?php endwhile; ?>
                    
                    <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                	<div class="pagination">
                    	<ul>
                    		<li class="older"><?php next_posts_link(__( 'older', 'your-theme' )) ?></li>
                    		<li class="newer"><?php previous_posts_link(__( 'newer', 'your-theme' )) ?></li>
                        </ul>
                	</div><!-- pagination -->
					<?php } ?>
                    
                    <?php else : ?>
                    	
                        <h2>nothing found</h2>
                        <p>sorry, but the page you are looking for isn't here</p>
                        <p><a href="<?php echo get_option('home'); ?>">return to the homepage</a></p>
                        
                    <?php endif; ?>
            </div><!-- blog -->
        </div><!-- blog-wrapper -->
    </div><!-- two -->
</div><!-- three -->
        
</div><!-- main -->

<?php get_footer(); ?>

</body>
</html>