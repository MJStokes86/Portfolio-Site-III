

<footer>
<div class="footer">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<div class="col-xs-3">
	<div class="footer-logo">
		<img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" id='footer-logo'>
	</div>
</div>

<div class="col-xs-3">
<p>Site Links</p>
<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
</div>

<div class="col-xs-3">
<p>Recent Posts</p>
<ul class='recent_posts_list'>

<?php 

$recentPost = new WP_Query(

array(
	'type' => 'post',
	'posts_per_page' =>3,
	'order' => 'ASC',
	'orderby' => 'date',

	)
);

 if($recentPost->have_posts()) { ?>


<?php
 	while($recentPost->have_posts()) {
 		$recentPost->the_post(); ?>

 	<li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></li>

 	<?php



 	}


 }


 	?>
 	</ul>

	
</div>

<div class="col-xs-3 text-center">
<h3>Contact Me</h3>
<p>336-693-5580</p> <p>mjstokes1986@att.net</p>
	

</div>



</div>
</div>
</div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>