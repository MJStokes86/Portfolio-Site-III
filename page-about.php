<?php get_header(); ?>



<div class="img-bg text-center" id="img1">
	<div class="container">
		<div class="row">
		
		<div class="col-xs-12" id="brand">
		

		<h4 style='color:#fff'>About</h4>
		<hr style='color:#fff'>
		<h1 id='my-name'>MICHAEL J STOKES</h1>
		
			</div>
		</div>
	</div>
</div>

<div class="content-block text-center">	
<div class="container">	
<div class="row">
<div class="col-xs-12">
	<p>
	<?php 
	query_posts('cat=14&showposts=1'); 
	if(have_posts()) {
		the_post(); ?></p>

	<p><?php the_content(); ?></p>

	<?php 
}




?>



</div>									
</div>
</div>	
</div>

<div class="skills">
<div class="content-block text-center" id="skills">	
<div class="container">	
<div class="row">
<div class="col-xs-12">
	<p>
	<?php 
	query_posts('cat=15&showposts=1'); 
	if(have_posts()) {
		the_post(); ?></p>

	<p><?php the_content(); ?></p>

	<?php 
}




?>



</div>									
</div>
</div>	
</div>
</div>



<div class="img-bg latest-post" id='img2'>
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-12">

	</div>			
	</div>	
	</div>	
</div>	





	

<?php get_footer(); ?>