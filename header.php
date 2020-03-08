<!DOCTYPE html> 
<html <?php language_attributes(); ?>> 
<head>     
<<<<<<< HEAD
<meta charset="<?php bloginfo( 'charset' ); ?>">     
<title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title> 
<meta name="viewport" content="width=device-width, 
	minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="<?php bloginfo( 'description' ); ?>"> 
<?php
if ( is_singular() ) {
	wp_enqueue_script( 'comment-reply' );}
?>
 
=======
<meta charset="<?php  bloginfo('charset'); ?>">     
<title><?php  bloginfo('name');?> <?php wp_title(); ?></title> 
<meta name="viewport" content="width=device-width, 
    minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>"> 
<?php if( is_singular() )
wp_enqueue_script( 'comment-reply' );  ?> 
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
<?php wp_head(); ?>     
<meta name="google-site-verification" content="DdV-3oSjd8nkwrbwTVqiMRgZIrc2p6jDa8lKJ68Q_0g" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">     
<link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
<<<<<<< HEAD
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/lib/img/Logo.ico">
=======
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/Logo.ico">
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

<script src="https://use.fontawesome.com/a46e157fb6.js"></script>     
<script src='https://www.google.com/recaptcha/api.js'></script>







</head>


<<<<<<< HEAD
<?php

if ( is_home() ) {
	$bkny_classes = array( 'bkny_class', 'my-class' );
} else {
	$bkny_classes = array( 'no-bkny-class' );
=======
<?php 

if(is_home()){
	$bkny_classes = array('bkny_class', 'my-class');
}
else{
	$bkny_classes = array('no-bkny-class');
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
}



<<<<<<< HEAD
?>


<body <?php body_class( $bkny_classes ); ?>>

<?php
if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) {
	gtm4wp_the_gtm_tag(); }
?>
=======
 ?>


<body <?php body_class($bkny_classes); ?>>

<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a


<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5HP9VXZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HP9VXZ');</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88864910-1', 'auto');
  ga('send', 'pageview');

</script>



<nav class="navigation nav-default navbar-fixed-top navbar-color">
	<div class="container-fluid">
		<div class="navbar-header">


<div class=" button_container" id="toggle">
	<span class="top"></span>
	<span class="middle"></span>
	<span class="bottom"></span>
		
</div>

<<<<<<< HEAD
 <a href="http://localhost/wordpress/portfolioiii" class='navbar-brand navbar-text-color'><img class= 'img-responsive navbar-img' src="<?php bloginfo( 'template_directory' ); ?>/lib/img/Logo.png" alt=""></a> 

 <!-- <a href="http://mjstokes.com/" class='navbar-brand navbar-text-color'><img class= 'img-responsive navbar-img' src="<?php bloginfo( 'template_directory' ); ?>/lib/img/Logo.png" alt=""></a> -->


 <h1 class="navbar-brand" id='my-name'>MICHAEL J STOKES</h1>
=======
 <a href="http://mjstokes.com/" class='navbar-brand navbar-text-color'><img class= 'img-responsive navbar-img' src="<?php bloginfo('template_directory'); ?>/img/Logo.png" alt=""></a><h1 class="navbar-brand" id='my-name'>MICHAEL J STOKES</h1>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
				</div>
			
		</div>
</nav>






<div class="overlay" id="overlay">
	<nav class="overlay-menu">
<<<<<<< HEAD
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'overlay-menu',
			)
=======
		<?php 
		wp_nav_menu(array(
		'theme_location' => 'primary',
		'container' => false,
		'menu_class' => 'overlay-menu')
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
		);
		?>
		

	</nav>
</div>




<<<<<<< HEAD



		
=======
		
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
