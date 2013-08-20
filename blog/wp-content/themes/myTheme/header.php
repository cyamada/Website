<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  
<?php wp_head(); ?>

</head>
<body>

<div id="header">
	<div class="wrapper">
    	<h1 id="banner">
        	<a href="../../../../index.php"><img src="/images/Logo.jpg" /></a>
        </h1><!-- banner -->
        
        <div id="nav-bar">
        	<ul>
            	<li>
                	<a href="../../../../index.php">Home</a>
                </li>
                <li>
                	<a href="../../../../ventures.php">C&amp;V</a>
                </li>
                <li>
                	<a href="/blog">Blog</a>
                </li>
                <li>
                	<a href="../../../../photography.php">Photography</a>
                </li>
                <li>
                	<a href="../../../../cinematography.php">Cinematography</a>
                </li>
                <li class="last-child">
                	<a href="mailto:connor@cyamada.com">Contact</a>
                </li>
            </ul>
        </div><!-- nav-bar -->
    </div><!-- wrapper -->
</div><!-- header -->
 
</body>