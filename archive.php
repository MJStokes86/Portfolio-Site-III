<body id="page-blog">
	

<?php get_header(); ?>

<div class="container results">


<div class="row">
	<div class="col-xs-12">

	
	<h1>
	<?php
	echo $wp_query->found_posts . ' results found in ';
	?>
	 " <?php the_archive_title( $prefix = '', $display = true ); ?> "</h1>

	<?php

	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();
			?>
			 

				<?php get_template_part( 'content', 'search' ); ?>
	<h1><?php 
echo $wp_query->found_posts.' results found in '; ?> " <?php the_archive_title($prefix='', $display=true) ?> "</h1>

	<?php 

		if(have_posts()):

			while(have_posts()): the_post(); ?> 

				<?php get_template_part('content', 'search') ?>
				

				<hr>


			<?php
			endwhile;
			<?php endwhile;


		endif;





	?>
		?>

	</div>
		

	</div>
</div>
	



</div>


	




<?php get_footer(); ?>

