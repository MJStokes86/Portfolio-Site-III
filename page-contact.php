<?php get_header(); ?>

<body id='page-contact'>

<div class="container text-center">
<div class="row">
<div class="col-xs-12">
<h4 style='color:#fff'>Contact</h4>
<br>
<h1 style='color:#fff'>Michael J. Stokes</h1>

</div>
</div>
</div>

<br>
<br>
<br>



<div class="container text-center">
<div class="row">
<div class="col-xs-12">
<div class="col-xs-6">
	<p>Phone</p>
	<br>
	<p>336-693-5580</p>

</div>

<div class="col-xs-6">
	<p>Email</p>
	<br>
	<p>mjstokes1986@att.net</p>
</div>

<ul class="text-center social">
<li>Link</li>
<li>Link</li>
<li>Link</li>
</ul>


</div>
</div>
</div>


<div class="contact-form container">
	<div class="row">
		<div class="col-xs-12">
			
			<?php while (have_posts() ): the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content text-center">
						<?php the_content(); ?>
				<?php echo do_shortcode( '[contact-form-7 id="184" title="Contact form 1"]' ); ?>

					</div>


				</article>

			<?php endwhile; ?>
		</div>
	</div>
</div>
	




<?php get_footer(); ?>