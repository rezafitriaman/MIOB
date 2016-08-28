<?php 
/**
*miob.nl functions and definitions
*
*@package miob.nl 
*@since miob.nl
*/

/* add styles*/
function add_theme_styles () {
	wp_enqueue_style ( 'apps', get_template_directory_uri () . '/css/apps.css') ;
	wp_enqueue_style ( 'Raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,600,700,300') ;
	wp_enqueue_style ( 'Lusitana', 'https://fonts.googleapis.com/css?family=Lusitana') ;
  wp_enqueue_style ( 'Ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:400,300,700') ;
}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

/* add js*/
function add_theme_scripts () {
	/* laad in de footer*/
	wp_enqueue_script ( 'apps-js', get_template_directory_uri() . '/js/apps.js', array ('jquery'), false, true ) ;
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/* add bootstrap navwalker*/
// Register Custom Navigation Walker

// require_once('wp_bootstrap_navwalker.php');
// 	register_nav_menus( array(
//     	'primary' => __( 'Primary Menu', 'THEMENAME' ),
// 	) );

function register_menu() {
  register_nav_menu('primary-menu', __('miob'));
}
add_action('init', 'register_menu');

function extra_theme_setup() {
  add_image_size( '370x250', 370, 250, true );
  add_image_size( '835x515', 835, 515, true );
  add_image_size( '1600x670', 1600, 670, true );
}
add_action( 'after_setup_theme', 'extra_theme_setup' );

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Site instellingen',
    'menu_title'  => 'Site instellingen',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Header instellingen',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Footer instellingen',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
  
}


add_theme_support( 'post-thumbnails' );

/* add customPostype*/
// Register customPostype
function create_post_type() {
	$labels = array(
    'name'               => 'module',
    'singular_name'      => 'module',
    'menu_name'          => 'Module'
  );

	$args = array(
	'labels'        => $labels,
    'public'        => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,	
  	);


	register_post_type( 'module', $args );


}

add_action( 'init', 'create_post_type' );

/* add customPostypeCategorie*/
// Register customPostypeCategorie
function my_taxonomies_product() {
  $labels = array(
    'name'              => 'Categories',
    'singular_name'     => 'Category',
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'module_category', 'module', $args );
}

add_action( 'init', 'my_taxonomies_product', 0 );

/* add customPostype*/
// Register customPostype
// page-attributes = add page order
function create_post_lessen() {
	$labels = array(
    'name'               => 'lessen',
    'singular_name'      => 'lessen',
    'menu_name'          => 'Lessen'
  );

	$args = array(
	'labels'        => $labels,
    'public'        => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    'has_archive'   => true,	
  	);


	register_post_type( 'lessen', $args );

}
add_action( 'init', 'create_post_lessen' );

/* add customPostypeCategorie*/
// Register customPostypeCategorie
function my_taxonomies_lessen() {
  $labels = array(
    'name'              => 'Categories',
    'singular_name'     => 'Category',
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'lessen_category', 'lessen', $args );
}

add_action( 'init', 'my_taxonomies_lessen', 0 );

/* add customPostype*/
// Register customPostype
// page-attributes = add page order
function create_post_hoofdstukken() {
	$labels = array(
    'name'               => 'hoofdstukken',
    'singular_name'      => 'hoofdstukken',
    'menu_name'          => 'Hoofdstukken'
  );

	$args = array(
	'labels'        => $labels,
    'public'        => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    'has_archive'   => true,	
  	);


	register_post_type( 'hoofdstukken', $args );

}
add_action( 'init', 'create_post_hoofdstukken' );

/* add customPostypeCategorie*/
// Register customPostypeCategorie
function my_taxonomies_hoofdstukken() {
  $labels = array(
    'name'              => 'Categories',
    'singular_name'     => 'Category',
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'hoofdstukken_category', 'hoofdstukken', $args );
}

add_action( 'init', 'my_taxonomies_hoofdstukken', 0 );

/* add customPostype*/
// Register customPostype
// page-attributes = add page order
function create_post_lesonderdelen() {
	$labels = array(
    'name'               => 'lesonderdelen',
    'singular_name'      => 'lesonderdelen',
    'menu_name'          => 'Lesonderdelen'
  );

	$args = array(
	'labels'        => $labels,
    'public'        => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    'has_archive'   => true,	
  	);


	register_post_type( 'lesonderdelen', $args );

}
add_action( 'init', 'create_post_lesonderdelen' );

/* add customPostypeCategorie*/
// Register customPostypeCategorie
function my_taxonomies_lesonderdelen() {
  $labels = array(
    'name'              => 'Categories',
    'singular_name'     => 'Category',
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'lesonderdelen_category', 'lesonderdelen', $args );
}

add_action( 'init', 'my_taxonomies_lesonderdelen', 0 );


/* add dropdown menu in custom postype for parent*/
function dbk_meta_box_post_parent ($post, $metabox) { 
	
  $post_type = (isset($metabox['args']['post_type_parent'])) ? $metabox['args']['post_type_parent'] : $post->post_type;
  $read_only = (isset($metabox['args']['read_only'])) ? $metabox['args']['read_only']: false;

	$posts = get_posts(array('post_type' => $post_type, 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'asc', 'post_status' => array('publish', 'draft')));
  ?>
	<table class="" style="margin-bottom: 15px">
	<tbody>
	<tr>
	  	<td width="50%">
	    <?php echo ucfirst($post_type) ?>
	  	</td>
	  <td>
	    <?php if($post->post_parent > 0): ?>
	      <a href="<?php echo get_edit_post_link( $post->post_parent )  ?>"><?php echo get_the_title($post->post_parent) ?></a>
	    <?php else: ?>
	      <i>No parent</i>
	    <?php endif ?>
	  </td>
	</tr>
	<?php if(!$read_only): ?>
	<tr>
	  <td class="column-columnname"></td>
	  <td>
	  	<select name="parent_id" style="width:100%">
	  		<option value="">No parent</option>
	  		<?php foreach($posts as $p): ?>
	  			<option value="<?php echo $p->ID ?>" <?php selected($p->ID, $post->post_parent) ?>><?php echo esc_html($p->post_title) ?></option>
	  		<?php endforeach ?>
	  	</select>
	    <?php if($post->post_parent > 0): ?>
	      <a href="<?php echo get_edit_post_link( $post->post_parent )  ?>"><?php echo get_the_title($post->post_parent) ?></a>
	    <?php endif; ?>
	  </td>
	</tr>
	<?php endif ?>
	</tbody>
	</table>

 	<?php
}

// add custom parent
function dbk_add_metaboxes() {
    add_meta_box(
        'dbk_parent', //id
        'Hoofdstukken', //title
        'dbk_meta_box_post_parent', //callback
        'lessen', //post type
        'side', //context
        'default', //priority
        ['post_type_parent' => 'hoofdstukken'] //args
    );
}
add_action( 'add_meta_boxes', 'dbk_add_metaboxes' );

function dbk_add_module() {
    add_meta_box(
        'dbk_parent', //id
        'Module', //title
        'dbk_meta_box_post_parent', //callback
        'hoofdstukken', //post type
        'side', //context
        'default', //priority
        ['post_type_parent' => 'module'] //args
    );
}
add_action( 'add_meta_boxes', 'dbk_add_module' );

function dbk_add_lesonderdelen() {
    add_meta_box(
        'dbk_parent', //id
        'Lessen', //title
        'dbk_meta_box_post_parent', //callback
        'lesonderdelen', //post type
        'side', //context
        'default', //priority
        ['post_type_parent' => 'lessen'] //args
    );
}
add_action( 'add_meta_boxes', 'dbk_add_lesonderdelen' );

function get_lesson_overview_id($post) {
	$parent_id = $post->post_parent;
	$parent = get_post( $parent_id );
	$grandparent_id = $parent->post_parent;
	$overgrandparent = get_post( $grandparent_id );
	$overovergrandparent = $overgrandparent->post_parent;

	return $overovergrandparent;
}  
