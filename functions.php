<?php
	function init_header() {
	    remove_action("wp_head", "_admin_bar_bump_cb");
	    wp_enqueue_style("styles",  get_stylesheet_uri() );
	}
	function init_menu() {
		register_nav_menus( array(
			"main_menu" => __( "Primary menu", "crea" ),
			"foot_menu" => __( "Footer menu", "crea" ), 
		) );
	}

	add_action("after_setup_theme", "init_menu");
	add_action("get_header", "init_header");
?>