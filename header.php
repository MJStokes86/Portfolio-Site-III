<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php  bloginfo('charset'); ?>">
	<title><?php  bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
	<script src="https://use.fontawesome.com/a46e157fb6.js"></script>
	<script src="//cdn.jsdelivr.net/jquery.touchswipe/1.6.15/jquery.touchSwipe.min.js"></script>




</head>


<?php 

if(is_home()){
	$bkny_classes = array('bkny_class', 'my-class');
}
else{
	$bkny_classes = array('no-bkny-class');
}



 ?>


<body <?php body_class($bkny_classes); ?>>

<nav class="nav-default navbar-fixed-top navbar-color">
	<div class="container-fluid">
		<div class="navbar-header">


<div class=" button_container" id="toggle">
	<span class="top"></span>
	<span class="middle"></span>
	<span class="bottom"></span>
		
</div>

<a href="#" class='navbar-brand navbar-text-color'><img class= 'img-responsive navbar-img' src="<?php bloginfo('template_directory'); ?>/img/Logo.png" alt=""></a><h1 class="navbar-brand" id='my-name'>MICHAEL J STOKES</h1>
				</div>
			
		</div>
	</div>
</nav>






<div class="overlay" id="overlay">
	<nav class="overlay-menu">
		<?php 
		wp_nav_menu(array(
		'theme_location' => 'primary',
		'container' => false,
		'menu_class' => 'overlay-menu')
		);
		?>
		

	</nav>
</div>




		