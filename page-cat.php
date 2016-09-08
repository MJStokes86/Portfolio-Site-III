<?php 

/*

Template Name: CategoryPost

*/ ?>

<?php get_header(); ?>

<div id="content">
<div id="main">
	
	<?php

	if(have_posts()) {
						while(have_posts()) {
							the_post();?>

			<?php query_posts('category_name=' . get_the_title() . '&post_status=publish, future'); ?>
			<?php if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>

					<p><?php the_content(); ?>

					<?php
				}
			}
		}
	} 



	 ?>


</div>
</div>

<?php get_footer(); ?>






