<?php get_header(); ?>

<body id='page-blog'>




<div class="container-fluid">

	<div class="row-fluid">
	<div class="col-xs-12">


		<div class="cols left-div" id="featured_project_post">

<<<<<<< HEAD
		<?php

		$latestPost = new WP_Query( 'type=post&posts_per_page=1&order=ASC&cat=11' );


		if ( $latestPost->have_posts() ) {

			while ( $latestPost->have_posts() ) {
				$latestPost->the_post();
				?>

				
			
=======
		<?php 

		$latestPost = new WP_Query('type=post&posts_per_page=1&order=ASC&cat=17');


		 if($latestPost->have_posts()){ 

		 	while($latestPost->have_posts()){
		 		$latestPost->the_post(); ?>

		 		
		 	
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

		<div class="running_head_pink" id='featured'><p>Featured Project</p></div>

		

<<<<<<< HEAD
		<div class="project-thumbnail img-responsive" id="project_photo"><?php echo the_post_thumbnail( 'large' ); ?></div>
=======
		<div class="project-thumbnail img-responsive" id="project_photo"><?php echo the_post_thumbnail('large') ?></div>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

		<br>
		<br>


<<<<<<< HEAD
		<h1 class="featured-project-title" id="project-title"><span style="color: #fff;"class="blog-title"><?php echo the_title(); ?></span></h1>
=======
		<h1 class="featured-project-title" id="project-title"><span style="color: #fff;"class="blog-title"><?php echo the_title() ?></span></h1>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

		<br>	
		<br>
		<br>


		<div class="template-part" id="project-template-part">
<<<<<<< HEAD
		<p><?php echo get_the_excerpt(); ?> <a class='ghost-button' href="<?php the_permalink(); ?>">Continue Reading</a></p>
=======
		<p><?php echo get_the_excerpt() ?> <a class='ghost-button' href="<?php the_permalink(); ?>">Continue Reading</a></p>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
		</div>




<<<<<<< HEAD
				<?php

			}
		}
		?>
=======
		<?php

		}

		 	} ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
			
		

		</div>


		

<<<<<<< HEAD
		<div class="cols right-div" id="project_sidebar"><?php get_sidebar(); ?></div>
=======
		<div class="cols right-div" id="project_sidebar"><?php get_sidebar() ?></div>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

		

	</div>
	</div>
	</div>

	<br>
	<br>


<div class="container post_container" id="all_projects_container">

	<div class="row">
		<div class="col-xs-12">
		<div class="running_head_pink" id="recent_posts">
		<h1>My Projects</h1>
		</div>
<<<<<<< HEAD
			<?php

			$recentPost = new WP_Query(
				array(
					'type'           => 'post',
					'posts_per_page' => 6,
					'order'          => 'ASC',
					'orderby'        => 'date',
					'cat'            => 11,
					'offset'         => 1,

				)
			);


			if ( have_posts() ) {
				?>
=======
			<?php 

			$recentPost = new WP_Query(

				array(
					'type' => 'post',
					'posts_per_page' => 6,
					'order' => 'ASC',
					'orderby' => 'date',
					'cat' => 17, 
					'offset' => 1

				)

				);


			if(have_posts()) { ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a


		<br>
		<br>



		<div class=" row posts_table">

<<<<<<< HEAD
				<?php

				$counter = 0;

				while ( $recentPost->have_posts() ) {

					$recentPost->the_post();


					?>
=======
			<?php 

			$counter = 0;

			while($recentPost->have_posts()) {

				$recentPost->the_post();


				?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

		<div class="col-xs-4" id='border-right'>



<<<<<<< HEAD
			<div class="recent-thumbnail" id="project-img"><?php echo the_post_thumbnail( 'medium' ); ?></div>
=======
			<div class="recent-thumbnail" id="project-img"><?php echo the_post_thumbnail('medium') ?></div>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
			<br>
			<h2 class="blog-title" id="container_titles"><?php the_title(); ?></h2>
			<br>
			<p>
<<<<<<< HEAD
			<!-- <?php echo get_the_excerpt(); ?> -->
=======
			<!-- <?php echo get_the_excerpt() ?> -->
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
			<a class="ghost-button" href="<?php the_permalink(); ?>">View</a>

			
		</p>

		<hr style='border-color:pink'>




		</div>



<<<<<<< HEAD
					<?php

					$counter++;

					if ( $counter % 3 == 0 ) {
						?>
=======
		<?php 

		$counter++;

		if($counter %3 == 0) {
			?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

					</div>
		<div class="row posts_table">


<<<<<<< HEAD
						<?php

					}
				}






				?>

			 </div>

				<?php

				if ( function_exists( 'wp_page_numbers' ) ) {
					wp_page_numbers(); }
			}

			wp_reset_postdata();
=======
		<?php

		}

	
			



				

				}


		



			 ?>

			 </div>

			 <?php

			 if(function_exists('wp_page_numbers')) { wp_page_numbers(); }


			}

		wp_reset_postdata();
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a


			?>


			


		</div>
	</div>
	</div>

	<?php get_footer(); ?>
<<<<<<< HEAD
=======
		
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
