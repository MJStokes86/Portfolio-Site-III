
<body id='page-blog'>

<?php get_header(); ?>



	

	<div class="row-fluid">


		<div class="cols left-div">

		<?php 

		$latestPost = new WP_Query('type=post&posts_per_page=1&order=ASC&cat=35');


		 if($latestPost->have_posts()){ 

		 	while($latestPost->have_posts()){
		 		$latestPost->the_post(); ?>

		 		
		 	

		<div class="col-xs-1" id="post_date"><p><?php echo get_the_date('n.d.y'); ?></p></div> 
		<div class="col-xs-1" id="post_category">
		<p>

		<?php 


		$cat = get_the_category();
			echo $cat[0]->cat_name;


		?></p>
		</div>

		<br>
		<br>
		<br>
		<br>
		<br>

		<div class="featured_photo"><?php echo the_post_thumbnail('100px') ?></div>

		<div class="blog-title"><h1><?php echo the_title() ?></h1></div>	

		<br>	


		<div class="template-part">



		<p>
		<?php echo get_the_excerpt() ?>
		<a href="<?php the_permalink(); ?>">Read more&raquo;</a>

			
		</p>

		</div>




		<?php

		}

		 	} ?>
			
		

		</div>


		

		<div class="cols right-div"><?php get_sidebar() ?></div>

		

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
			<h2><?php the_title(); ?></h2>
			<br>
			<p>
			<?php echo get_the_excerpt() ?>
			<a href="<?php the_permalink(); ?>">Read more&raquo;</a>

			
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

			?>


			


		</div>
	</div>
	</div>
		

	










<?php get_footer(); ?>