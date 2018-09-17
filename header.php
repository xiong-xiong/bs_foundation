<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
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
