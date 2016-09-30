
<body id='page-blog'>

<?php get_header(); ?>



	<div class="container-fluid">

	<div class="row-fluid">
	<div class="col-xs-12">


		<div class="cols left-div">

		<?php 

		$latestPost = new WP_Query('type=post&posts_per_page=1&order=ASC&cat=35');


		 if($latestPost->have_posts()){ 

		 	while($latestPost->have_posts()){
		 		$latestPost->the_post(); ?>

		 		
		 	

		<p class="running_head_black" id="post_date"><?php echo get_the_date('n.d.y'); ?></p>
		<!-- <div class="col-xs-1" id="post_category">
		<p>

		<?php 


		$cat = get_the_category();
			echo $cat[0]->cat_name;


		?></p>
		</div>
 -->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>


		<div class="featured_photo"><?php echo the_post_thumbnail('large') ?></div>


		<div class="blog-title"><h1><span class="running_head_pink"><?php echo the_title() ?></span></h1></div>	
		


		<div class="template-part">
		<p><?php echo get_the_excerpt() ?> <a class='ghost-button' href="<?php the_permalink(); ?>">Read more</a></p>
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
		<h1>Recent Posts</h1>


			<?php 

			$recentPost = new WP_Query(

				array(
					'type' => 'post',
					'posts_per_page' => 6,
					'order' => 'ASC',
					'orderby' => 'date'

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



			<div class="recent_post_thumbnail"><?php echo the_post_thumbnail('thumbnail') ?></div>
			<br>
			<h2 class="blog-title" id="container_titles"><?php the_title(); ?></h2>
			<br>
			<p>
			<?php echo get_the_excerpt() ?>
			<a class="ghost-button-pink" href="<?php the_permalink(); ?>">Read more</a>

			
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

			}

		wp_reset_postdata();


			?>


			


		</div>
	</div>
	</div>
		

	










<?php get_footer(); ?>