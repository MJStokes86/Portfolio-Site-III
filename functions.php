<<<<<<< HEAD
<?php

function bkny2_theme_script_enqueue() {

	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/lib/css/bkny2_theme.css', array(), '4.5.3', 'all' );

	wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/lib/css/responsive.css', array(), '4.5.3', 'all' );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/css/bootstrap.min.css', array(), '3.3.7', 'all' );

	wp_enqueue_style( 'devicons', '//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' );

	wp_enqueue_style( 'glyphicons', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/js/jquery.min.js', array(), '3.1.0', true );

	wp_enqueue_script( 'parallax', '//cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js' );

	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/lib/js/bkny2_theme.js', array(), '4.5.3', true );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/lib/js/bootstrap.min.js', array(), '3.3.7', true );

}

add_action( wp_enqueue_scripts, 'bkny2_theme_script_enqueue' );
=======
<?php 

function bkny_theme_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bkny_theme.css', array(), '4.5.3', 'all');

	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), '4.5.3', 'all');

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');	

	wp_enqueue_style('devicons', '//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css');

	wp_enqueue_style('glyphicons', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css');
	
	wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery.min.js', array(), '3.1.0', true);

	wp_enqueue_script('parallax','//cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js');
	
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bkny_theme.js', array(), '4.5.3', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);

}

add_action(wp_enqueue_scripts, 'bkny_theme_script_enqueue');
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a




<<<<<<< HEAD
function bkny2_theme_setup() {
	add_theme_support( 'menus' );
	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'secondary', 'Footer Navigation' );

}

add_action( 'init', 'bkny2_theme_setup' );

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );
add_theme_support( 'html5', array( 'search-form' ) );


function bkny2_widget_setup() {

	register_sidebar(
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar-1',
			'class'         => 'custom',
			'description'   => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action( 'widgets_init', 'bkny2_widget_setup' );

function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type( 'post_tag', 'page' );
	register_taxonomy_for_object_type( 'category', 'page' );
}

add_action( 'init', 'add_taxonomies_to_pages' );
=======
function bkny_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'bkny_theme_setup'); 

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video' ));
add_theme_support('html5', array('search-form'));


function bkny_widget_setup() {

	register_sidebar(
		array(
			'name' 	=> 'Sidebar',
			'id' 	=> 'sidebar-1', 
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title'	=> '</h1>',
			 )

		);
}
add_action('widgets_init','bkny_widget_setup');

function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type('post_tag', 'page');
	register_taxonomy_for_object_type('category', 'page');
}

add_action('init', 'add_taxonomies_to_pages');
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a





function custom_excerpt_length() {
	return 55;
}

<<<<<<< HEAD
add_filter( 'excerpt_length', 'custom_excerpt_length' );
=======
add_filter('excerpt_length', 'custom_excerpt_length');
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a


function awesome_remove_version() {
	return '';

<<<<<<< HEAD
}

add_filter( 'the_generator', 'awesome_remove_version' );


add_filter( 'wp_mail_content_type', 'set_content_type' );


function set_content_type( $content_type ) {
=======

}

add_filter('the_generator', 'awesome_remove_version');


add_filter('wp_mail_content_type', 'set_content_type');


function set_content_type($content_type) {
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
	return 'text/html';

}

<<<<<<< HEAD
if ( get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

function mytheme_comment( $comment, $args, $depth ) {
	?>

	<?php comment_text(); ?>
	
		<?php
		comment_reply_link(
			array_merge(
				$args, array(
					'add_below' => $add_below,
					'depth'     => $depth,
					'max_depth' => $args['max_depth'],
				)
			), $comment->comment_ID, $comment->comment_post_ID
		);
		?>
  
	<?php
}

	@ini_set( 'upload_max_size', '64M' );

	@ini_set( 'post_max_size', '64M' );
=======
if (get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}

function mytheme_comment($comment, $args, $depth) {
   ?>

   <?php comment_text(); ?>
    
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ,$comment->comment_ID, $comment->comment_post_ID); ?>
  
    <?php
    }

    @ini_set( 'upload_max_size' , '64M' );

	@ini_set( 'post_max_size', '64M');
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

	@ini_set( 'max_execution_time', '300' );




// function preprocess_new_comment($commentdata) {
<<<<<<< HEAD
// if(!isset($_POST['is_legit'])) {
// die('Not interested!');
// }
// return $commentdata;
// }
// if(function_exists('add_action')) {
// add_action('preprocess_comment', 'preprocess_new_comment');
// }

=======
// 	if(!isset($_POST['is_legit'])) {
// 		die('Not interested!');
// 	}

// 	return $commentdata;

// }

// if(function_exists('add_action')) {
// 	add_action('preprocess_comment', 'preprocess_new_comment');
// }


  
   



 ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
