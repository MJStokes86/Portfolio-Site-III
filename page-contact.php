<?php get_header(); ?>

<body id='page-contact'>
<div class="container contact-container text-center">




<br>
<br>
<br>



<div class="row">
<div class="col-xs-12">
<?php while (have_posts() ): the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content text-center">
						<?php the_content(); ?>



</div>
</div>
</div>


<div class="contact-form container">
	<div class="row">
		<div class="col-xs-12">
			
			
				<?php echo do_shortcode( '[contact-form-7 id="184" title="Contact form 1"]' ); ?>

					</div>


				</article>

			<?php endwhile; ?>
		</div>
	</div>
</div>
	




<?php get_footer(); ?>