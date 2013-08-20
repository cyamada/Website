<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>


<body>
<?php get_header(); ?>

<?php 

//Get Category
$category = get_category(get_query_var('cat'));

?>

<div id="main">
    <div class="two">
        <div class="blog-wrapper"
           	<?php get_sidebar(); ?>
            <div class="blog">
            <h1 class="page-title"><?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>	
            <?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';
						
					get_template_part( 'loop', 'category');
			?>
            
            <!-- Start Loop -->
    		<?php query_posts('category_name=' . $category->cat_name . '&paged='. get_query_var('paged')); ?>           

    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                    
                    <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                	<div class="pagination">
                    	<ul>
                    		<li class="older"><?php next_posts_link(__( 'older', 'your-theme' )) ?></li>
                    		<li class="newer"><?php previous_posts_link(__( 'newer', 'your-theme' )) ?></li>
                        </ul>
                	</div><!-- pagination -->
					<?php } ?>
                    
            <?php endwhile; else: ?>
            	<p id="error">there's nothing here :[</p>
    		<?php endif; ?> 
            
            <?php wp_reset_query(); ?>
            </div><!-- blog -->
        </div><!-- blog-wrapper -->
    </div><!-- two -->
</div><!-- main -->


</body>
</html>