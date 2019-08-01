<?php

function theme_styles () {

wp_enqueue_style('style', get_template_directory_uri() . '/css/style.min.css' );
wp_enqueue_style('wide', get_template_directory_uri() . '/css/style-wide.min.css' );
wp_enqueue_style('social', get_template_directory_uri() . '/css/social-btns-slim.min.css' );


}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Menu arguments

register_nav_menus(['primary'=>('Primary Menu')]);

function theme_register_menu(){
    register_nav_menu('footer-menu',__('Footer Menu'));
}

add_action('init', 'theme_register_menu');

//Enable Featured images

function add_featured_image_support_to_your_wordpress_theme(){
add_theme_support( 'post-thumbnails' );

}

add_action('after_setup_theme','add_featured_image_support_to_your_wordpress_theme');

// ADDS PLACEHOLDERS TO COMMENT INPUTS

function my_update_comment_fields( $fields ) {

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . __( '(optional)', 'text-domain' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$fields['author'] =
		'<p class="comment-form-author">
			<label for="author">' . __( "Name", "text-domain" ) . $label . '</label>
			<input id="author" name="author" type="text" placeholder="' . esc_attr__( " Jane Doe", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['email'] =
		'<p class="comment-form-email">
			<label for="email">' . __( "Email", "text-domain" ) . $label . '</label>
			<input id="email" name="email" type="email" placeholder="' . esc_attr__( " name@email.com", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['url'] =
		'<p class="comment-form-url">
			<label for="url">' . __( "Website", "text-domain" ) . '</label>
			<input id="url" name="url" type="url"  placeholder="' . esc_attr__( " http://darrencolson.uk", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" />
			</p>';

	return $fields;
}
add_filter( 'comment_form_default_fields', 'my_update_comment_fields' );



// Load Social Media Buttons
include_once( get_stylesheet_directory() . '/includes/socialmediabtn.php' );

//------ Links Featured images to post pages / Disables link on individual post pages

function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
 
	If (! is_singular()) { 
		 
	$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	return $html;
	 
	} else { 
	 
	return $html;
	 
	}
	 
	}
	add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );

?>