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

		<div class="mobile-header">
		<a href="#sidr" id="nav-toggle"><i class="fa fa-bars fa-2x" id="bars"></i></a>
		</div>

		<div id="main-navigation">
			<nav class="nav">
				
				<?php 
				wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'sidr-nav')
				);
				?>

			</nav>
		</div>
		
		



<!-- img src="<?php  header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> -->


