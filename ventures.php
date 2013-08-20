<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>c&amp;v</title>
<link href="css/vent.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/nprogress.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<script src="js/bootstrap.min.js"></script>
<script src="js/nprogress.js"></script>
<script type="text/javascript" src="js/jquery-2.0.0.js"></script>
<script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap.js"></script>
<script>
$(document).ready(function($) {
	NProgress.start();
});

$(window).load(function($) {
	NProgress.done();	
});
</script>
<script>
  $(document).ready(function(){
	NProgress.done();
    $('.carousel').carousel({
      interval: 4000
    });
  });
</script>
</head>

<body>

<?php include('venture/php/vheader.php'); ?>

<?php include('venture/php/vnav.php'); ?>

<?php include('venture/php/carousel.php'); ?>

<?php include('venture/php/vcontent.php'); ?>

<?php include('php/footer.php'); ?>
</body>
</html>