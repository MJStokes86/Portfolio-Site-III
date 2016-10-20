<?php get_header(); ?>

<div class="img-bg text-center" id="img1">
	<div class="container">
		<div class="row">
		
		<div class="col-xs-12" id="brand">

		<img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" id='logo'>
		<h1 id='name' style='font-size: 50px'>MICHAEL J STOKES</h1>
		<br>
		<p id='web-dev'>WEB DEVELOPMENT</p>
			</div>
		</div>
	</div>
</div>

<div class="content-block text-center parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/GrandCentral.jpg">	
<div class="container">	
<div class="row">
<div class="col-xs-12">
	<h1 id='date'><?php $d = date('F j, Y'); echo $d; ?></h1>
</div>									
</div>
</div>	
</div>

<div class="img-bg latest-post" id='img2'>
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-12" id="latest-post-container">

	<h1 class='running_head_pink text-left'>Latest Posts</h1>

	<br>
	<br>
	<br>
	<br>
	


	<?php 




			$lastBlog = new WP_Query('type=post&posts_per_page=3&order=ASC&cat=39');

			
		


			if( $lastBlog->have_posts()):

			while($lastBlog->have_posts()): $lastBlog->the_post(); ?>


	<div class="col-xs-4 text-center">


	<div class="thumbnail-img img-responsive"><?php echo the_post_thumbnail('medium'); ?></div>	


	<h1 class="latest-blog-title"><span><a href="<?php the_permalink(); ?>"><?php echo the_title() ?></a></span></h1>

				
	</div>




			<?php endwhile;

		endif;

		wp_reset_postdata();
	?>

	</div>			
	</div>	
	</div>	
</div>	


<div class="services parallax-window">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12" id="my_services">
			<!-- 	<h1 class="text-center">

				<?php 
				$cat_id = 13;
					echo get_cat_name($cat_id);
					 ?></h1> -->
				
			
					<?php 
					query_posts('cat=13&showposts=1');
					if(have_posts()) {
						while(have_posts()) {
							the_post();?>

					<p><?php the_content(); ?></p>
					

					<?php

						}
					}



					 ?>
				

			</div>
		</div>
	</div>
</div>



<!-- <div class="featured-work">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<h1 class="text-left">
	Featured work
</h1>

<div class="col-xs-3"></div>
<div class="col-xs-3"></div>
<div class="col-xs-3"></div>


</div>	
</div>	
</div>
</div>

 -->




<?php get_footer(); ?>