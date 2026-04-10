<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
  wp_enqueue_style( 'child-style1', get_stylesheet_directory_uri() . '/vendor.min.css');
  wp_enqueue_style( 'child-style2', get_stylesheet_directory_uri() . '/style.css' );
  wp_enqueue_script( 'script2', get_stylesheet_directory_uri() . '/js/vendor.min.js');
  wp_enqueue_script( 'script3', get_stylesheet_directory_uri() . '/js/theme.min.js');
  wp_enqueue_script( 'script4', get_stylesheet_directory_uri() . '/js/modernizr.min.js');
  wp_enqueue_script( 'script5', get_stylesheet_directory_uri() . '/js/card.min.js');
  wp_enqueue_script( 'script1', get_stylesheet_directory_uri() . '/js/jquery-3.5.0.min.js');
  wp_enqueue_script( 'script6', get_stylesheet_directory_uri() . '/js/cookie.notice.js');
}
function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery-3.5.0.min.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
function the_breadcrumb() {
	if (!is_home()) {
		echo '<li class="breadcrumb-item"><a href="';
		echo get_option('home');
		echo '"></li>';
		bloginfo('name');
		echo "</a> &nbsp; / &nbsp; ";
		if (is_category() || is_single()) {
			the_category('&nbsp; / &nbsp;');
			if (is_single()) {
				echo " &nbsp; / &nbsp; ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/adminlogo.png);
		height:240px;
		width:187px;
		background-size: 187px 240px;
		background-repeat: no-repeat;
        	padding-bottom: 0px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return 'https://www.reload.rs/';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
    return 'Релоад - Израда веб-сајтова за јавне субјекте';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
if ( ! current_user_can( 'manage_options' ) ) {
    // update toolbar
    function update_adminbar($wp_adminbar) {
      // remove unnecessary items
      $wp_adminbar->remove_node('wp-logo');
      $wp_adminbar->remove_node('customize');
      $wp_adminbar->remove_node('comments');
    }
    // admin_bar_menu hook
    add_action('admin_bar_menu', 'update_adminbar', 999);
    add_action( 'admin_menu', 'pk_remove_admin_menus' );
    function pk_remove_admin_menus() {
        remove_menu_page( 'edit-comments.php' );
        remove_menu_page( 'profile.php' );
        remove_menu_page( 'tools.php' );
        function sample_admin_notice__success() {
            ?>
            <div class="notice notice-success is-dismissible">
                <p><?php _e( 'Добродошли у РЕЛОАД административни панел.  <a href="http://www.reload.rs/uputstvo.pdf" target="_blank">Кликните овде да прочитате упутство за коришћење админ панела.</a>
                 ', 'sample-text-domain' ); ?></p>
            </div>
            <?php
        }
        add_action( 'admin_notices', 'sample_admin_notice__success' );
        }
        function remove_screen_options($display_boolean, $wp_screen_object){
          $blacklist = array('post.php', 'post-new.php', 'index.php', 'edit.php');
          if (in_array($GLOBALS['pagenow'], $blacklist)) {
            $wp_screen_object->render_screen_layout();
            $wp_screen_object->render_per_page_options();
            $wp_screen_object->remove_help_tabs();
            return false;
          } else {
            return true;
          }
        }
        add_filter('screen_options_show_screen', 'remove_screen_options', 10, 2);
    }
// Admin footer modification
function remove_footer_admin ()
{
    echo '<span id="footer-thankyou">Ово је специјализовани софтвер за јавна предузећа и установе који је развила фирма Релоад. <a href="http://www.reload.rs" target="_blank">Посетите веб-страницу фирме Релоад.</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
function new_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','new_submenu_class');
