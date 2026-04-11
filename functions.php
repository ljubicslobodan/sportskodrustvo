<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'home-post-thumb', 400, 225, true );

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
/**
 * Desktop nav walker — outputs sd-nav-* classes with dropdown support
 */
class SD_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="sd-dropdown">';
    }
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $has_children = in_array( 'menu-item-has-children', $item->classes );
        $is_active    = in_array( 'current-menu-item', $item->classes )
                     || in_array( 'current-menu-ancestor', $item->classes )
                     || in_array( 'current-menu-parent', $item->classes );

        if ( $depth === 0 ) {
            $li_cls = 'sd-nav-item';
            if ( $has_children ) $li_cls .= ' sd-nav-item--has-dropdown';
            if ( $is_active )    $li_cls .= ' sd-nav-item--active';

            $output .= '<li class="' . esc_attr( $li_cls ) . '">';
            $a_cls   = 'sd-nav-link' . ( $is_active ? ' sd-nav-link--active' : '' );
            $chevron = $has_children ? '<i class="fe-icon-chevron-down sd-nav-chevron"></i>' : '';
            $output .= '<a href="' . esc_url( $item->url ) . '" class="' . $a_cls . '">'
                     . esc_html( $item->title ) . $chevron . '</a>';
        } else {
            $icon_map = [
                'М рукомет' => 'fe-icon-users',
                'Ж рукомет' => 'fe-icon-users',
                'М одбојка' => 'fe-icon-activity',
                'Ж одбојка' => 'fe-icon-activity',
                'Футсал'    => 'fe-icon-target',
            ];
            $icon_cls = isset( $icon_map[ $item->title ] ) ? $icon_map[ $item->title ] : 'fe-icon-arrow-right';

            $is_active_sub = in_array( 'current-menu-item', $item->classes );
            $li_cls = 'sd-dropdown-item' . ( $is_active_sub ? ' sd-dropdown-item--active' : '' );
            $output .= '<li class="' . esc_attr( $li_cls ) . '">';
            $output .= '<a href="' . esc_url( $item->url ) . '" class="sd-dropdown-link">'
                     . '<i class="' . $icon_cls . ' sd-dropdown-icon"></i>'
                     . '<span>' . esc_html( $item->title ) . '</span>'
                     . '</a>';
        }
    }
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}

/**
 * Mobile nav walker — outputs sd-mob-* classes with accordion support
 */
class SD_Mobile_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="sd-mob-dropdown">';
    }
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $has_children = in_array( 'menu-item-has-children', $item->classes );
        $is_active    = in_array( 'current-menu-item', $item->classes )
                     || in_array( 'current-menu-ancestor', $item->classes );

        if ( $depth === 0 ) {
            $li_cls = 'sd-mob-item' . ( $has_children ? ' sd-mob-item--has-dropdown' : '' )
                                    . ( $is_active ? ' sd-mob-item--active' : '' );
            $output .= '<li class="' . esc_attr( $li_cls ) . '">';
            $output .= '<div class="sd-mob-item-row">';
            $output .= '<a href="' . esc_url( $item->url ) . '" class="sd-mob-link">'
                     . esc_html( $item->title ) . '</a>';
            if ( $has_children ) {
                $output .= '<button class="sd-mob-chevron-btn" type="button" aria-expanded="false" aria-label="Прошири">'
                         . '<i class="fe-icon-chevron-down"></i></button>';
            }
            $output .= '</div>';
        } else {
            $output .= '<li class="sd-mob-sub-item">';
            $output .= '<a href="' . esc_url( $item->url ) . '" class="sd-mob-sub-link">'
                     . esc_html( $item->title ) . '</a>';
        }
    }
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}

/**
 * Mobile menu + header scroll JS (runs after jQuery)
 */
add_action( 'wp_footer', function () { ?>
<script>
(function($) {
    var $header   = $('#sd-header');
    var $drawer   = $('#sd-mob-drawer');
    var $overlay  = $('#sd-mob-overlay');
    var $hamburger = $('#sd-hamburger');
    var $close    = $('#sd-mob-close');

    function openDrawer() {
        $drawer.addClass('sd-mob-drawer--open').attr('aria-hidden', 'false');
        $overlay.addClass('sd-mob-overlay--visible');
        $hamburger.attr('aria-expanded', 'true');
        $('body').addClass('sd-mob-open');
    }
    function closeDrawer() {
        $drawer.removeClass('sd-mob-drawer--open').attr('aria-hidden', 'true');
        $overlay.removeClass('sd-mob-overlay--visible');
        $hamburger.attr('aria-expanded', 'false');
        $('body').removeClass('sd-mob-open');
    }

    $hamburger.on('click', openDrawer);
    $close.on('click', closeDrawer);
    $overlay.on('click', closeDrawer);

    // Mobile accordion
    $(document).on('click', '.sd-mob-chevron-btn', function() {
        var $btn  = $(this);
        var $item = $btn.closest('.sd-mob-item--has-dropdown');
        var $drop = $item.find('> .sd-mob-dropdown');
        var isOpen = $item.hasClass('sd-mob-item--open');

        // Close others
        $('.sd-mob-item--open').not($item).each(function() {
            $(this).removeClass('sd-mob-item--open')
                   .find('> .sd-mob-dropdown').slideUp(220);
            $(this).find('.sd-mob-chevron-btn').attr('aria-expanded', 'false');
        });

        if (isOpen) {
            $item.removeClass('sd-mob-item--open');
            $drop.slideUp(220);
            $btn.attr('aria-expanded', 'false');
        } else {
            $item.addClass('sd-mob-item--open');
            $drop.slideDown(220);
            $btn.attr('aria-expanded', 'true');
        }
    });

    // Header scroll shadow
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 24) {
            $header.addClass('sd-header--scrolled');
        } else {
            $header.removeClass('sd-header--scrolled');
        }
    });

    // Close drawer on ESC
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') closeDrawer();
    });
})(jQuery);
</script>
<?php } );
