

<footer>
<div class="footer text-center">
<div class="container-fluid">
<div class="row" id="footer-row">
<div class="col-xs-12">
<div class="col-xs-4">
	<div class="footer-logo">
		<img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" id='footer-logo' class="img-responsive">
	</div>
</div>

<div class="col-xs-4 site_links">
<p>Site Links</p>
<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
</div>

<div class="col-xs-4 recent-post-links">
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

 	<li><a href="<?php the_permalink(); ?>" ><p><?php the_title(); ?></p></a></li>

 	<?php



 	}


 }

 		wp_reset_postdata();



 	?>
 	</ul>

	
</div>
</div>

<div class="container-fluid text-center footer-contact">
<!-- <h3>Contact Me</h3>
<p><i class="fa fa-phone"> (336) 693-5580</p></i><p><i class="fa fa-envelope"> mjstokes1986@att.net</p></i>
<hr> -->
<ul class="social-media">
<div class="row">	
	<li><a href="http://facebook.com/mstokesj86" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook32.png" alt=""></a></li>
	<li><a href="http://linkedin.com/in/mjstokes1" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin32.png" alt=""></a></li>
	<li><a href="http://github.com/mjstokes86" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/github32.png" alt=""></a></li>
	<li><a href="http://twitter.com/mstokes86" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter32.png" alt=""></a></li>
</ul>


<small><p>Copyright &copy; <?php echo date('Y'); ?> <br>
mjstokes.com <br>
All rights reserved </p></small>

<small><a href="http://wordpress.org" target="_blank" id="WordPress" ><i class="devicons devicons-wordpress"></i></a><br><p>Powered by WordPress</p></small>
</div>


</div>



</div>
</div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>