<?php

// Load dependencies from Composer
require get_template_directory() . '/vendor/autoload.php';

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
		} );
	return;
}

Timber::$dirname = array('templates', 'views');

class StarterSite extends TimberSite {

	function __construct() {
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
    add_action( 'wp_enqueue_scripts', array( $this, 'theme_scripts' ) );
		parent::__construct();
	}

	function register_post_types() {
		//this is where you can register custom post types
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

	function add_to_context( $context ) {
		$context['menu'] = new TimberMenu();
		$context['site'] = $this;
		return $context;
	}

  /**
   * Enqueue scripts and styles.
   */
  function theme_scripts() {
  	wp_enqueue_style( 'theme-name-style', get_stylesheet_uri() );

  	if(!is_admin()){
  		wp_deregister_script('jquery');
  		wp_register_script('jquery', ('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js'),
  			false, '1.11.3', true);
  	}

  	wp_enqueue_script('theme_script', get_stylesheet_directory_uri() . '/assets/js/main.js',
  		array('jquery'), '1.0', true);
  }

	function add_to_twig( $twig ) {
		/* this is where you can add your own fuctions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );

		return $twig;
	}

}

new StarterSite();
