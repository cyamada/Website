<?php add_theme_support( 'post-thumbnails' ); ?>

<?php
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43377521-1', 'cyamada.com');
  ga('send', 'pageview');

</script>
<?php } ?>
