<body id="page-blog">

<?php get_header(); ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-xs-12">


		<div class="cols left-div">


			<?php 

		if(have_posts()):

			while(have_posts()): the_post(); ?> 
				
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				
				




				<div class="article_single">
				<!-- <?php if(has_post_thumbnail()): ?>

					<div class="pull-left"><?php the_post_thumbnail('medium'); ?></div>

				<?php endif; ?>
 -->
				<p><?php the_content(); ?></p>

				<small><!-- <?php the_category(' '); ?> || --> <?php the_tags(); ?> <!-- || <?php edit_post_link(); ?> --></small>
				</div>


				
					
				</article>


				


			<?php endwhile;

		endif;


		?>





		</div>


		<div class="cols right-div"><?php get_sidebar() ?></div>
			

		


		</div>
	</div>
</div>


<div class="container comment_container">

<div class="row">
	<div class="col-xs-12">


	

	<?php if(comments_open()) {
					comments_template();
					} else {
						echo '<h5 class=""text-center">Sorry, Comments are Closed!</h5>';
					}

					?>
		



	</div>
</div>
</div>
	
<?php get_footer(); ?>