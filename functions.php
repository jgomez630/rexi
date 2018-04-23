<?php 
	
//add_action() hooks a function to an wp action during execution or specific events.
// 1st argument = wp-defined instruction type, 2nd argument = a user-defined function name. 

function university_files(){
	// calls a wp function & points to the main stylesheet.
		wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
		wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('font-awesome' , '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('uni_main_styles', get_stylesheet_uri());		
	}
		//tells wp to load js or css file using a user-defined function "university_files"
	add_action('wp_enqueue_scripts', 'university_files');

	function university_features() {
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'university_features');
 