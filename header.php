<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Foundation -->
  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.3/dist/js/foundation.min.js" integrity="sha256-l1HhyJ0nfWQPdwsVJLNq8HfZNb3i1R9M82YrqVPzoJ4= sha384-NH8utV74bU+noXiJDlEMZuBe34Bw/X66sw22frHkgIs8R1QKWc8ckxYB4DheLjH4 sha512-JMs3Y+JjY+DhwVOPeJhkLM/0FeK9ANxvuYiHGpGp7Q2kMlmNEN/2v6TkrXdirxqB3DHxPlQ8iMxvb/eSPCF5CA==" crossorigin="anonymous"></script>
  <!-- Animate.css -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Lobster|Oswald|Raleway:200" rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css"> 


</head>
<body <?php body_class(); ?>>
<div id="header" class="jumbotron">
<div class="header-logo"><a href="<?php echo site_url(); ?>"><h1><span class="xiong-red-letter">H</span>elsinki <span class="xiong-red-letter">B</span>eard <span class="xiong-red-letter">S</span>tore</h1></a> </div>

</div>
<div class="xiong-main-nav">
<?php wp_nav_menu( array( 'theme_location' => 'mainnav', 'container_class' => 'main-nav', 'container' => 'nav' )); ?> 

</div>
