

<div class="container">
<div class="row">
<div class="col-xs-12">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col-xs-4">
	<div class="pull-left"><?php the_post_thumbnail('thumbnail'); ?></div>
</div>

<div class="col-xs-4">
	<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	<?php if(has_post_thumbnail()): ?>



	<?php endif; ?>

	<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

	<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
</div>


</article>
</div>
</div>
</div>