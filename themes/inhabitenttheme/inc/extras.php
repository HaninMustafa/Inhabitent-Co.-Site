<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

//replace login logo to Inhabitent logo
function custom_login_logo() {
    echo '<style type="text/css">
        h1 a {
					background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important;
					width: 310px !important ;
					height: 60px !important;
					background-size: 310px 59px !important;
		 		}
    </style>';
}

add_action('login_head', 'custom_login_logo');

// replace login logo URL
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

//////////
function wpdocs_styles_method() {
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/build/css/style.min.css'
    );
        $url = CFS() -> get( 'hero_image' ); //E.g. #FF0000
        $custom_css = "
                .about-hero{
                        background-image: url({$url});

                }";
        wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_styles_method' );
/////////////

function inhabitent_filter_product_query( $query ) {
    if ( is_post_type_archive() && !is_admin() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title');
        $query->set( 'order', 'ASC');
        $query->set( 'posts_per_page', 16 );
    }
}
add_action( 'pre_get_posts', 'inhabitent_filter_product_query' );

//Custom Function to Get Archive Title

function inhabitent_archive_title($title) {

     if (is_post_type_archive('product')) {
        $title = 'Shop Stuff';

     } else if (is_tax('product_type')) {
        $title = single_term_title();
     }
     return $title;

}
add_filter( 'get_the_archive_title', 'inhabitent_archive_title');
