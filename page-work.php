<?php get_header(); ?>

<body id='page-blog'>


<div class="container-fluid">

	<div class="row-fluid">
	<div class="col-xs-12">


		<div class="cols left-div">

		<?php 

		$latestPost = new WP_Query('type=post&posts_per_page=1&order=ASC&cat=17');


		 if($latestPost->have_posts()){ 

		 	while($latestPost->have_posts()){
		 		$latestPost->the_post(); ?>

		 		
		 	

		<div class="running_head_pink" id='featured'><p>Featured Project</p></div>

		<br>
		<br>
		<br>
		<br>
		<br>
		

		<div class="featured_thumbnail" id="featured_photo"><?php echo the_post_thumbnail('large') ?></div>

		<br>
		<br>


		<h1 class="featured-work-title"><span style="color: #fff;"class="blog-title"><?php echo the_title() ?></span></h1>

		<br>	
		<br>
		<br>


		<div class="template-part">
		<p><?php echo get_the_excerpt() ?> <a class='ghost-button' href="<?php the_permalink(); ?>">Continue Reading</a></p>
		</div>




		<?php

		}

		 	} ?>
			
		

		</div>


		

		<div class="cols right-div"><?php get_sidebar() ?></div>

		

	</div>
	</div>
	</div>

	<br>
	<br>


<div class="container post_container">

	<div class="row">
		<div class="col-xs-12">
		<div class="running_head_pink" id="recent_posts">
		<h1>All Other Projects</h1>
		</div>
			<?php 

			$recentPost = new WP_Query(

				array(
					'type' => 'post',
					'posts_per_page' => 3,
					'order' => 'ASC',
					'orderby' => 'date',
					'cat' => 17, 
					'offset' => 1

				)

				);


			if(have_posts()) { ?>


		<br>
		<br>



		<div class=" row posts_table">

			<?php 

			$counter = 0;

			while($recentPost->have_posts()) {

				$recentPost->the_post();


				?>

		<div class="col-xs-4" id='border-right'>



			<div class="featured-thumbnail"><?php echo the_post_thumbnail('medium') ?></div>
			<br>
			<h2 class="blog-title" id="container_titles"><?php the_title(); ?></h2>
			<br>
			<p>
			<!-- <?php echo get_the_excerpt() ?> -->
			<a class="ghost-button" href="<?php the_permalink(); ?>">Read</a>

			
		</p>

		<hr style='border-color:pink'>




		</div>



		<?php 

		$counter++;

		if($counter %3 == 0) {
			?>

					</div>
		<div class="row posts_table">


		<?php

		}

	
			



				

				}


		



			 ?>

			 </div>

			 <?php

			 if(function_exists('wp_page_numbers')) { wp_page_numbers(); }


			}

		wp_reset_postdata();


			?>


			


		</div>
	</div>
	</div>

	<?php get_footer(); ?>
		