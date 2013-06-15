<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

<div class="sidebar">	

  	<ul>
    	<li><a href="/blog/">blog</a></li>
        <h2>categories</h2>
        <li>
    		<?php wp_list_categories('show_count=0&title_li=&hide_empty=0'); ?>
        </li>
  	</ul>
</div>

</body>
</html>