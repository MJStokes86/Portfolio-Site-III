

<footer>
<div class="footer text-center">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<div class="col-xs-3">
	<div class="footer-logo">
		<img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" id='footer-logo'>
	</div>
</div>

<div class="col-xs-3 site_links">
<p>Site Links</p>
<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
</div>

<div class="col-xs-3 recent-post-links">
<p>Recent Posts</p>
<ul class='recent_posts_list'>

<?php 

$recentPost = new WP_Query(

array(
	'type' => 'post',
	'posts_per_page' =>3,
	'order' => 'ASC',
	'orderby' => 'date',
	'cat' => 39

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

<div class="col-xs-3 text-center footer-contact">
<!-- <h3>Contact Me</h3>
<p><i class="fa fa-phone"> (336) 693-5580</p></i><p><i class="fa fa-envelope"> mjstokes1986@att.net</p></i>
<hr> -->
<ul class="social-media">
	<li><a href="http://facebook.com/mstokesj86" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook32.png" alt=""></a></li>
	<li><a href="http://linkedin.com/in/mjstokes1" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin32.png" alt=""></a></li>
	<li><a href="http://github.com/mjstokes86" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/github32.png" alt=""></a></li>
	<li><a href="http://twitter.com/mstokes86" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter32.png" alt=""></a></li>
</ul>

<small><p>Copyright &copy; <?php echo date('Y'); ?> <br>
mjstokes.com <br>
All rights reserved </p></small>
	

</div>



</div>
</div>
</div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>