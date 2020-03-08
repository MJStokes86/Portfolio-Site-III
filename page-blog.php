<?php get_header(); ?>

<body id='page-blog'>




	<div class="container-fluid">

	<div class="row-fluid">
	<div class="col-xs-12">


		<div class="cols left-div" id="new_blog_post">

		<?php


		$latestPost = new WP_Query( 'type=post&posts_per_page=1&order=ASC&cat=5' );


		if ( $latestPost->have_posts() ) {

			while ( $latestPost->have_posts() ) {
				$latestPost->the_post();
				?>

		<div class="running_head_pink"  id="featured"><p>Latest Post</p>
		  </div>
		

				
		 <div class="running_head_black" id="post_date"><p><?php echo get_the_date( 'n.d.y' ); ?></p></div>
		

		<div class="featured-thumbnail img-responsive" ><?php echo the_post_thumbnail( 'full' ); ?></div>

		

		<h1 class="featured-blog-title"><span style="color: #fff;"class="blog-title"><?php echo the_title(); ?></span></h1>
		
		<br>
		<br>
		<br>


		<div class="template-part">
		<p><?php echo get_the_excerpt() . '<br><br>'; ?><a class='ghost-button' href="<?php the_permalink(); ?>">Continue Reading</a></p>
		</div>

		

				<?php

			}
		}
		?>
			
		

		</div>


		

		<div class="cols right-div" id="blog_sidebar"><?php get_sidebar(); ?></div>

		

	</div>
	</div>
	</div>

	<br>
	<br>

	<div class="container post_container" id="blog_post_container">

	<div class="row">
		<div class="col-xs-12">
		<div class="running_head_pink" id="recent_posts">
		<h1>Recent Posts</h1>
		</div>


			<?php


			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

			$recentPost = new WP_Query(
				array(
					'type'           => 'post',
					'posts_per_page' => 6,
					'order'          => 'DESC',
					'orderby'        => 'date',
					'cat'            => '3',
					'paged'          => $paged,

				)
			);




			if ( have_posts() ) {
				?>


		<br>
		<br>



		<div class=" row posts_table">

				<?php

				$counter = 0;

				while ( $recentPost->have_posts() ) {

					$recentPost->the_post();


					?>

		<div class="col-xs-4 recent-blog-posts" id='border-right'>



			<div class="recent-thumbnail"><?php echo the_post_thumbnail( 'medium' ); ?><h3 style="color:pink; font-family:Anton, sans-serif;"><?php echo get_the_date( 'n.d.y' ); ?></h3></div>
			<h2 class="blog-title" id="container_titles"><?php the_title(); ?></h2>
			<br>
			<p>
			<!-- <?php echo get_the_excerpt(); ?> -->
			<a class="ghost-button" href="<?php the_permalink(); ?>">Read</a>

			
		</p>

		<hr style='border-color:pink'>




		</div>



					<?php

					$counter++;

					if ( $counter % 3 == 0 ) {
						?>

					</div>
		<div class="row posts_table">


						<?php

					}
				}

				  wp_reset_postdata();







				?>

			 </div>

				<?php

				if ( function_exists( 'wp_pagenavi' ) ) {
					wp_pagenavi();



				}
			}







			?>


			


		</div>
	</div>
	</div>
		

	










<?php get_footer(); ?>
