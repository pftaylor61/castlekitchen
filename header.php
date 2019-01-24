<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package Qohelet
 * @since Qohelet 0.0.1
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta http-equiv="cleartype" content="on">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed site">
    <div id="ck_innerwrapper" class="innerwrapper">
        <div id="ck_castellation">
            <img class="ck_castle_image" src="<?php echo get_stylesheet_directory_uri().'/assets/castellation_1000x30.png' ?>" width="100%" height="100%" title="" alt="Castellation" />
        </div><!-- /#ck_castellation -->
        
        <div id="ck_castellation_media_600">
            <img class="ck_castle_image" src="<?php echo get_stylesheet_directory_uri().'/assets/castellation_530x20.png' ?>" width="100%" height="100%" title="" alt="Castellation" />
        </div><!-- /#ck_castellation_media_600 -->        
        
        <div id="ck_rest_innerwrapper">

	<div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e( 'Skip to main content', 'qohelet' ); ?>"><?php esc_html_e( 'Skip to main content', 'qohelet' ); ?></a></div>

	<div id="headercontainer">

		<header id="masthead" class="site-header row" role="banner">
                    <div class="row1">
                        <div class="col grid_9_of_12 site-title">
				
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
						<?php 
						$headerImg = get_header_image();
						if( !empty( $headerImg ) ) { ?>
							<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /><h1>
						<?php } 
						echo get_bloginfo( 'name' );
						 ?>
                                                        </h1></a>
                            
				
			</div> <!-- /.col.grid_9_of_12 -->

			<div class="col grid_3_of_12">
				<div class="social-media-icons">
					<?php echo qohelet_get_social_media(); ?>
				</div>
				
			</div> <!-- /.col.grid_3_of_12 -->
                    </div><!-- /.row1 -->
                    <div class="row2">
                        <div class="col grid_6_of_12">
                            <span><?php echo get_bloginfo( 'description' ); ?></span>
                        </div>
                        <div class="col grid_6_of_12">
                            <nav id="site-navigation" class="main-navigation" role="navigation">
					<h3 class="menu-toggle assistive-text"><?php esc_html_e( 'Menu', 'qohelet' ); ?></h3>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'qohelet' ); ?>"><?php esc_html_e( 'Skip to content', 'qohelet' ); ?></a></div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav> <!-- /.site-navigation.main-navigation -->
                        </div>
                    </div><!-- /.row2 -->
		</header> <!-- /#masthead.site-header.row -->

	</div> <!-- /#headercontainer -->
	<div id="bannercontainer">
		<div class="banner row">
                    
			<?php if ( is_front_page() ) {
                            // place the slider fom the ocws slider plugin
                            // the OCWS Slider plugin is a necessary plugin
                            if (function_exists('ocwssl_function')) {
				echo ocwssl_function('ocwssl_function');
                            }
				
			} ?>
					
				
			
		</div> <!-- /.banner.row -->
	</div> <!-- /#bannercontainer -->

	<div id="maincontentcontainer">
		<?php	do_action( 'qohelet_before_woocommerce' ); ?>