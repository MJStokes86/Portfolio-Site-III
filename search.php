<body id="page-blog">
	

<<<<<<< HEAD
<?php get_header(); ?>
=======
<?php get_header();?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

<div class="container results">


<div class="row">
	<div class="col-xs-12">
<<<<<<< HEAD
	<h1 class="blog-title">
	<?php
	echo $wp_query->found_posts . ' results that contains ';
	?>
	 " <?php the_search_query(); ?> "</h1>

	<?php

	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();
			?>
			 

				<?php get_template_part( 'content', 'search' ); ?>
=======
	<h1 class="blog-title"><?php 
echo $wp_query->found_posts.' results that contains '; ?> " <?php the_search_query(); ?> "</h1>

	<?php 

		if(have_posts()):

			while(have_posts()): the_post(); ?> 

				<?php get_template_part('content', 'search') ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
				

				
			<hr>

<<<<<<< HEAD
			<?php
			endwhile;

		if ( function_exists( 'wp_page_numbers' ) ) {
			wp_page_numbers(); }
=======
			<?php endwhile;

if(function_exists('wp_page_numbers')) { wp_page_numbers(); }
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

		endif;




<<<<<<< HEAD
	?>
=======
		?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

	</div>
		

	</div>
</div>
	

</div>


	



<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
