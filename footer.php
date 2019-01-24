<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package Qohelet
 * @since Qohelet 0.0.1
 */
?>

		<?php	do_action( 'qohelet_after_woocommerce' ); ?>
	</div> <!-- /#maincontentcontainer -->

	<div id="footercontainer">

		<footer class="site-footer row" role="contentinfo">

			<?php
			// Count how many footer sidebars are active so we can work out how many containers we need
			$footerSidebars = 0;
			for ( $x=1; $x<=4; $x++ ) {
				if ( is_active_sidebar( 'sidebar-footer' . $x ) ) {
					$footerSidebars++;
				}
			}

			// If there's one or more one active sidebars, create a row and add them
			if ( $footerSidebars > 0 ) { ?>
				<?php
				// Work out the container class name based on the number of active footer sidebars
				$containerClass = "grid_" . 12 / $footerSidebars . "_of_12";

				// Display the active footer sidebars
				for ( $x=1; $x<=4; $x++ ) {
					if ( is_active_sidebar( 'sidebar-footer'. $x ) ) { ?>
						<div class="col <?php echo $containerClass?>">
							<div class="widget-area" role="complementary">
								<?php dynamic_sidebar( 'sidebar-footer'. $x ); ?>
							</div>
						</div> <!-- /.col.<?php echo $containerClass?> -->
					<?php }
				} ?>

			<?php } ?>

		</footer> <!-- /.site-footer.row -->

		<?php 
			$mycurtheme = wp_get_theme();
                        $myparenttheme = wp_get_theme($mycurtheme->get('Template'));
                        $myparenttheme_addtext = "";
                        if ( is_child_theme() ) {
					$myparenttheme_addtext = ', (a child theme of <a href="'.$myparenttheme->get('ThemeURI').'">'.$myparenttheme->get('Name').'</a>'.' v'.$myparenttheme->get('Version').')';
				}
                        echo '<div class="row smallprint">';
			echo 'Powered by: <a href="https://classicpress.net">ClassicPress</a>, version '.$wp_version.', using the theme: <strong><a href="'.$mycurtheme->get('ThemeURI').'">'.$mycurtheme->get('Name').'</a></strong> version '.$mycurtheme->get('Version').$myparenttheme_addtext.', from <a href="'.$mycurtheme->get('AuthorURI').'">Old Castle Web Solutions</a>.';
			echo '</div> <!-- /.smallprint -->';
		?>

	</div> <!-- /.footercontainer -->
        </div><!-- /#ck_rest_innerwrapper -->
    </div> <!-- /.#ck_innerwrapper.innerwrapper -->     
</div> <!-- /.#wrapper.hfeed.site -->

<?php wp_footer(); ?>
</body>

</html>
