<?php get_header(); ?>

<div class="img-bg text-center" id="img1">
	<div class="container">
		<div class="row">
		
		<div class="col-xs-12" id="brand">
		

		
		<h1 id='my-name'>Featured Work</h1>
		
			</div>
		</div>
	</div>
</div>


<div class="content-block portfolio">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">

			<?php 


			$app = new WP_Query('type=post&posts_per_page=9&order=ASC&cat=17');

			
			if($app->have_posts()) {

				while($app->have_posts()) {
					$app->the_post();?>




				<br>
				<br>
				<br>

	<div class="col-xs-12">

		<div class="col-xs-6"><?php the_title(); ?></div>
		<div class="col-xs-6">

		<div class="thumbnail-img"><?php echo the_post_thumbnail('thumbnail') ?></div>
		</div>
		<br>
		<br>
		<br>

		<div class="app-desc">
			<?php the_content();?>
		</div>

		<div class="tags">
			<ul>
			
			<?php 
			$postID = $post->ID;
			$tags = get_the_tags($postID);
			foreach ($tags as $tag) {
				echo '<div class="col-xs-2"><li class="tags_list"><a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '</a></li></div>';
			}




			 ?>
			 
			 </ul>
			 <hr align="left" width="100%">

			 		
		</div>

		

	</div>

	
	<?php
					}
				} ?>

			</div>


		</div>
	</div>

</div>

			


 


<?php get_footer(); ?>