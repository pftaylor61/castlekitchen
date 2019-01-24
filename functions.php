<?php
/**
 * Castle Kitchen functions and definitions
 *
 * Castle Kitchen is a child theme of Qohelet
 * 
 * @package Qohelet
 * @since Qohelet 0.0.1
 */

 	
function castlekitchen_enqueue_styles() {
    wp_enqueue_style( 'ck_onlineFonts10', 'https://fonts.googleapis.com/css?family=MedievalSharp' ,array());
    $parent_style = 'qohelet-style';
    $mycurtheme = wp_get_theme();
    $myparenttheme = wp_get_theme($mycurtheme->get('Template'));
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css',array(), $myparenttheme->get('Version') );
    wp_enqueue_style( 'castlekitchen-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        $mycurtheme->get('Version')
    );
    wp_enqueue_style( 'onlineFonts1', 'http://db.onlinewebfonts.com/c/dfdac8da682990e4b503979837902c3b?family=TextaNarrowW00-Thin' ,array());
}
add_action( 'wp_enqueue_scripts', 'castlekitchen_enqueue_styles' );

if ( ! function_exists( 'castle_kitchen_get_credits' ) ) {
	function castle_kitchen_get_credits() {
		global $wp_version;
		$output = '';
		
                $mycurtheme = wp_get_theme();
                $myparenttheme = wp_get_theme($mycurtheme->get('Template'));
                $myparenttheme_addtext = "";
                if ( is_child_theme() ) {
					$myparenttheme_addtext = ', (a child theme of <a href="'.$myparenttheme->get('ThemeURI').'">'.$myparenttheme->get('Name').'</a>'.' v'.$myparenttheme->get('Version').')';
				}
                $output = 'This website is powered by <a href="https://classicpress.net">ClassicPress</a> (version '.$wp_version.'), using the <strong><a href="'.$mycurtheme->get('ThemeURI').'">'.$mycurtheme->get('Name').'</a></strong> theme, version '.$mycurtheme->get('Version').$myparenttheme_addtext.', from <a href="'.$mycurtheme->get('AuthorURI').'">Old Castle Web Solutions</a>.';

		return $output;
	}
}


?>