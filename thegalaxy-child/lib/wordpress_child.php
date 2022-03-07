<?php
	
	/*
		Call Custom Styles
	*/
	

	function galaxy_scriptss() 
	{
		
		wp_enqueue_style( 'galaxy-child-style', get_stylesheet_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'galaxy-child-custom-style', get_stylesheet_directory_uri() . '/css/custom.css' );
	    wp_enqueue_script( 'galaxy-child-custom-js', get_stylesheet_directory_uri() . '/js/custom.js' );
	    wp_enqueue_style( 'google-font-four', 'https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700;800;900&display=swap' );
	    
	}
	
	add_action( 'wp_enqueue_scripts', 'galaxy_scriptss', 99 );
	
?>