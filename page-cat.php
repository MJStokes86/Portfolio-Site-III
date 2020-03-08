<<<<<<< HEAD
<?php

/*
=======
<?php 

/*

>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
Template Name: CategoryPost

*/ ?>

<?php get_header(); ?>

<div id="content">
<div id="main">
	
	<?php

<<<<<<< HEAD
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			?>

			<?php query_posts( 'category_name=' . get_the_title() . '&post_status=publish, future' ); ?>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					?>
=======
	if(have_posts()) {
						while(have_posts()) {
							the_post();?>

			<?php query_posts('category_name=' . get_the_title() . '&post_status=publish, future'); ?>
			<?php if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

					<p><?php the_content(); ?>

					<?php
				}
			}
		}
<<<<<<< HEAD
	}



	?>
=======
	} 



	 ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a


</div>
</div>

<?php get_footer(); ?>
<<<<<<< HEAD
=======






>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
