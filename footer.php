

<footer>
<div class="footer text-center">
<div class="container-fluid">
<div class="row" id="footer-row">
<div class="col-xs-12">

<br>

<div class="footer-logo">
		<img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/Logo.png" id='footer-logo' class="img-responsive">
	</div>


	<br>
					<p>&copy;Copyright <script>document.write(new Date().getFullYear())</script> Michael J. Stokes | All Rights Reserved.</p>
					<br>
<!-- 
<small><a href="http://wordpress.org" target="_blank" id="WordPress" ><i class="devicons devicons-wordpress"></i></a><br><p>Powered by WordPress</p></small> -->

<!-- <ul class="social-media">
	<li><a href="https://www.facebook.com/Michael-J-Stokes-609653772560194/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/facebook32.png" alt=""></a></li>
	<li><a href="http://linkedin.com/in/mjstokes1" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/linkedin32.png" alt=""></a></li>
	<li><a href="http://github.com/mjstokes86" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/github32.png" alt=""></a></li>
	<li><a href="https://twitter.com/MStokes86" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/twitter32.png" alt=""></a></li>
</ul>

 -->


</div>




<!-- <div class="col-xs-4 recent-post-links">
<p>Recent Posts</p>
<ul class='recent_posts_list'>

<?php

$recentPost = new WP_Query(
	array(
		'type'           => 'post',
		'posts_per_page' => 3,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'cat'            => array( 3, 5 ),

	)
);

if ( $recentPost->have_posts() ) {
	?>


	<?php
	while ( $recentPost->have_posts() ) {
		$recentPost->the_post();
		?>

	 <li><a href="<?php the_permalink(); ?>" ><p><?php the_title(); ?></p></a></li>

 

		<?php



	}
}

 wp_reset_postdata();





?>
	 </ul>

	
</div>








</div>




</div>



</div>
</div> -->


<!-- ....................mobile-footer.................-->


<div class=" mobile-footer text-center">
<div class="container-fluid">
<div class="row" id="footer-row">
<div class="col-xs-12">


<<!-- div class="mobile-site_links">
<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
</div>

<br>



<div class="mobile-recent-post-links">
<p id="mobile-recent-post-links-title">Recent Posts</p>
<ul class='recent_posts_list'>

<?php

$recentPost = new WP_Query(
	array(
		'type'           => 'post',
		'posts_per_page' => 3,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'cat'            => array( 3, 5 ),

	)
);

if ( $recentPost->have_posts() ) {
	?>


	<?php
	while ( $recentPost->have_posts() ) {
		$recentPost->the_post();
		?>

	 <li><a href="<?php the_permalink(); ?>" ><p><?php the_title(); ?></p></a></li>

 

		<?php



	}
}

 wp_reset_postdata();





?>
	 </ul>

	
</div>

<br>
 -->





	<div class="mobile-footer-logo">
		<img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/Logo.png" id='mobile-footer-logo' class="img-responsive">
	</div>

	<br>

	<ul class="mobile-social-media">
	<li><a href="https://www.facebook.com/Michael-J-Stokes-609653772560194/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/facebook32.png" alt=""></a></li>
	<li><a href="http://linkedin.com/in/mjstokes1" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/linkedin32.png" alt=""></a></li>
	<li><a href="http://github.com/mjstokes86" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/github32.png" alt=""></a></li>
	<li><a href="https://twitter.com/MJSTOKES101" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/twitter32.png" alt=""></a></li>
	<br>
	<br>

	<small><p>Copyright &copy; <?php echo date( 'Y' ); ?> <br>
mjstokes.com <br>
All rights reserved </p></small>
<!-- 
<small><a href="http://wordpress.org" target="_blank" id="WordPress" ><i class="devicons devicons-wordpress"></i></a><br><p>Powered by WordPress</p></small> -->
</ul>
















</div>




</div>



</div>
</div>































<!-- ....................mobile-footer-ends.................-->





</footer>

<?php wp_footer(); ?>
</body>
</html>
