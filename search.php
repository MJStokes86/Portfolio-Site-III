<body id="page-blog">
	


<?php get_header(); ?>

<?php get_header();?>

<div class="container results">


<div class="row">
	<div class="col-xs-12">

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

	<h1 class="blog-title"><?php 
echo $wp_query->found_posts.' results that contains '; ?> " <?php the_search_query(); ?> "</h1>

	<?php 

		if(have_posts()):

			while(have_posts()): the_post(); ?> 

				<?php get_template_part('content', 'search') ?>
				

				
			<hr>


			<?php
			endwhile;

		if ( function_exists( 'wp_page_numbers' ) ) {
			wp_page_numbers(); }

			<?php endwhile;

if(function_exists('wp_page_numbers')) { wp_page_numbers(); }

		endif;





	?>

		?>

	</div>
		

	</div>
</div>
	

</div>


	




<?php get_footer(); ?>

<?php get_footer(); ?>
