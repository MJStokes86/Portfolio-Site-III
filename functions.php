<?php 

function bkny_theme_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bkny_theme.css', array(), '4.5.3', 'all');

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');	

	wp_enqueue_style('devicons', '//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css');

	wp_enqueue_style('glyphicons', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css');
	
	wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery.min.js', array(), '3.1.0', true);

	wp_enqueue_script('parallax','//cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js');
	
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bkny_theme.js', array(), '4.5.3', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);

}

add_action(wp_enqueue_scripts, 'bkny_theme_script_enqueue');




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



function themeprefix_scripts_styles_sidr () {

	wp_enqueue_script('sidrjs', get_stylesheet_directory_uri() . '/js/jquery.sidr.min.js', array('jquery'), '1', true);

	wp_enqueue_script('sidrinit', get_stylesheet_directory_uri() .'/js/sidr-init.js', array('sidrjs'), '1', true);
	
	wp_enqueue_style('sidrcss-dark', get_stylesheet_directory_uri() . '/css/jquery.sidr.dark.css', '', '1', 'all');
	
	
}

add_action(wp_enqueue_scripts, 'themeprefix_scripts_styles_sidr');


function get_fontawesome_enqueue () {

	wp_enqueue_style('font-awesomemin', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array(), '4.6.3', 'all');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css', array(), '4.6.3', 'all');
	wp_enqueue_script('font-awesome-eot', get_template_directory_uri() . '/font/fontawesome-webfont.eot', array(), '4.6.3', 'all');
	wp_enqueue_script('font-awesome-svg', get_template_directory_uri() . '/font/fontawesome-webfont.svg', array(), '4.6.3', 'all');
	wp_enqueue_script('font-awesome-ttf', get_template_directory_uri() . '/font/fontawesome-webfont.ttf', array(), '4.6.3', 'all');
	wp_enqueue_script('font-awesome-woff', get_template_directory_uri() . '/font/fontawesome-webfont.woff', array(), '4.6.3', 'all');
	wp_enqueue_script('font-awesome-woff2', get_template_directory_uri() . '/font/fontawesome-webfont.woff2', array(), '4.6.3', 'all');
	wp_enqueue_script('font-awesome-otf', get_template_directory_uri() . '/font/FontAwesome.otf', array(), '4.6.3', 'all');


}

add_action(wp_enqueue_scripts, 'get_fontawesome_enqueue');

function custom_excerpt_length() {
	return 55;
}

add_filter('excerpt_length', 'custom_excerpt_length');


function awesome_remove_version() {
	return '';


}

add_filter('the_generator', 'awesome_remove_version');


add_filter('wp_mail_content_type', 'set_content_type');


function set_content_type($content_type) {
	return 'text/html';

}



// function contact_form() {
// 	if(!isset($_POST['submit'])) { return; }


// 	$form = array();
// 	$form['the_name'] = $_POST['the_name'];
// 	$form['the_email'] = $_POST['the_email'];
// 	$form['subject'] = $_POST['subject'];
// 	$form['body'] = $_POST['body'];

// 	$subject = $form['subject'];

// 	$to = 'mjstokes1986@att.net';
	

// 	if(wp_mail($to, $subject)) {
// 		wp_redirect(home_url()); exit;
// 	}



// }

// add_action('wp_head', 'contact_form');



 ?>
