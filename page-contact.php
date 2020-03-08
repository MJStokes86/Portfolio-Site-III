<?php get_header(); ?>

<<<<<<< HEAD
<body id='page-contact'>	
=======
<body id='page-contact'>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
<div class="container contact-container text-center">




<br>
<br>
<br>



<<<<<<< HEAD

<div class="row">
<div class="col-xs-12">
	
<?php
while ( have_posts() ) :
	the_post();
	?>
=======
<div class="row">
<div class="col-xs-12">
<?php while (have_posts() ): the_post(); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content text-center">
						<?php the_content(); ?>



</div>
</div>
</div>


<div class="contact-form container">
	<div class="row">
		<div class="col-xs-12">
			
			
<<<<<<< HEAD
				<?php echo do_shortcode( '[contact-form-7 id="485" title="Portfolio III"]' ); ?>
=======
				<?php echo do_shortcode( '[contact-form-7 id="184" title="Contact form 1"]' ); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

					</div>


				</article>

			<?php endwhile; ?>
		</div>
	</div>
</div>
	




<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
