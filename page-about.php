<?php get_header(); ?>



<div class="img-bg text-center" id="img3">
	<div class="container">
		<div class="row">
		
		<div class="col-xs-12" id="brand">

		<p>
	<?php
	query_posts( 'cat=2&showposts=1' );
	if ( have_posts() ) {
		the_post();
		?>
		</p>

	<article class="article_about"><p><?php the_content(); ?></p></article>

		<?php
	}

	<?php 
	query_posts('cat=14&showposts=1'); 
	if(have_posts()) {
		the_post(); ?></p>

	<article class="article_about"><p><?php the_content(); ?></p></article>

	<?php 
}




	?>

?>
		

			</div>
		</div>
	</div>
</div>
<!-- 
<div class="content-block2 text-center parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_directory' ); ?>/lib/img/Dumbo-Brooklyn.jpg">	

<div class="content-block2 text-center parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/Dumbo-Brooklyn.jpg">	
<div class="container">	
<div class="row">
<div class="col-xs-12">
	<p>
	<?php
	query_posts( 'cat=14&showposts=1' );
	if ( have_posts() ) {
		the_post();
		?>
		</p>

	<article class="article_about"><p><?php the_content(); ?></p></article>

		<?php
	}

	<?php 
	query_posts('cat=14&showposts=1'); 
	if(have_posts()) {
		the_post(); ?></p>

	<article class="article_about"><p><?php the_content(); ?></p></article>

	<?php 
}




	?>

?>



</div>									
</div>
</div>	
</div> -->

<div class="skills">
<div class="content-block text-center" id="skills">	
<div class="container">	
<div class="row">
<div class="col-xs-12">
	<p>
	<?php
	query_posts( 'cat=15&showposts=1' );
	if ( have_posts() ) {
		the_post();
		?>
		</p>

	<p><?php the_content(); ?></p>

		<?php
	}

	<?php 
	query_posts('cat=15&showposts=1'); 
	if(have_posts()) {
		the_post(); ?></p>

	<p><?php the_content(); ?></p>

	<?php 
}




	?>

<center>
<a href="<?php bloginfo( 'template_directory' ); ?>/Michael_Stokes_Dev_Resume.pdf" target="_blank" ><p id="resume_button" class='ghost-button'>MY RESUME</p></a>

?>

<center>
<a href="<?php bloginfo('template_directory'); ?>/Michael_J_Stokes_Resume.pdf" target="_blank" ><p id="resume_button" class='ghost-button'>MY RESUME</p></a>
</center>



</div>									
</div>
</div>	
</div>
</div>



<div class="img-bg interests text-center" id='img4'>
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-12">

	<?php
	query_posts( 'cat=6&showposts=1' );
	if ( have_posts() ) {
		the_post();
		?>
		</p>

	<p><?php the_content(); ?></p>

		<?php
	}

	<?php 
	query_posts('cat=16&showposts=1'); 
	if(have_posts()) {
		the_post(); ?></p>

	<p><?php the_content(); ?></p>

	<?php 
}




	?>

?>



	</div>			
	</div>	
	</div>	
</div>	





	

<?php get_footer(); ?>

