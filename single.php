<body id="page-blog">

<?php get_header(); ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-xs-12 main-blog">



<<<<<<< HEAD
			<?php

			if ( have_posts() ) :

				while ( have_posts() ) :
					the_post();
					?>
			 
				
					<?php the_title( '<h1 class="blog-title text-center" style="font-size: 50px; line-height: 1.8;">', '</h1>' ); ?>
=======
			<?php 

		if(have_posts()):

			while(have_posts()): the_post(); ?> 
				
				<?php the_title('<h1 class="blog-title text-center" style="font-size: 50px; line-height: 1.8;">', '</h1>'); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				
				



	
				
<<<<<<< HEAD
					 <?php if ( has_post_thumbnail() ) : ?>

					<div class="text-center"><?php the_post_thumbnail( 'large' ); ?></div>
=======
				 <?php if(has_post_thumbnail()): ?>

					<div class="text-center"><?php the_post_thumbnail('large'); ?></div>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

				<?php endif; ?>

				<div class="content">
				<br>
				<br>

				<p><?php the_content(); ?></p>

				
				</div>

				<hr style="border-color: pink;">	
<<<<<<< HEAD
					<?php
					$post_tags = get_the_tags();
					if ( $post_tags ) {
						foreach ( $post_tags as $tag ) {
							echo '<ul class="tags"><li><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li></ul>';
						}
					}
=======
				<?php 
				$post_tags = get_the_tags();
				if ($post_tags) {
					foreach($post_tags as $tag) {
						echo '<ul class="tags"><li><a href="' . get_tag_link($tag->term_id) . '">' .  $tag->name . '</a></li></ul>';
					}
					} 
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
					?>
					

				
					
				</article>


				


<<<<<<< HEAD
					<?php
			endwhile;
=======
			<?php endwhile;
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

		endif;


<<<<<<< HEAD
			?>
=======
		?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a






<!-- 
<<<<<<< HEAD
		<div class="cols right-div"><?php get_sidebar(); ?></div> -->
=======
		<div class="cols right-div"><?php get_sidebar() ?></div> -->
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
			

		


		</div>
	</div>
</div>


<div class="container comment_container">

<div class="row">
	<div class="col-xs-12">


	

<<<<<<< HEAD
	<?php
	if ( comments_open() ) {
					comments_template();
	} else {
		echo '<h5 class="text-center">Sorry, Comments are Closed!</h5>';
	}

	?>
=======
	<?php if(comments_open()) {
					comments_template();
					} else {
						echo '<h5 class=""text-center">Sorry, Comments are Closed!</h5>';
					}

					?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
		



	</div>
</div>
</div>
	
<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
