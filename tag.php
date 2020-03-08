<body id="page-blog">
	

<?php get_header(); ?>

<div class="container results">


<div class="row">
	<div class="col-xs-12" id="search_results">
	<h1 class="blog-title" id="results_title">
	<?php
	echo $wp_query->found_posts . ' results with tags matching ';
	?>
	  " <?php single_tag_title( $prefix = '', $display = true ); ?> "</h1>

	<?php

	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();
			?>
			 

				<?php get_template_part( 'content', 'search' ); ?>
				

				
			<hr>

			<?php
			endwhile;

		if ( function_exists( 'wp_page_numbers' ) ) {
			wp_page_numbers(); }



		endif;




	?>

	</div>
		

	</div>
</div>
	

</div>


	



<?php get_footer(); ?>
