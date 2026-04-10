<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
				<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="google-site-verification" content="Osl0re-I62BVRS9670EZ77ZOhxyu_OG5kWnLlP2PG5M" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
            <!-- Off-Canvas Menu-->
            <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
                <div class="offcanvas-scrollable-area border-top" style="height:calc(100%); top: 44px;">
                    <div class="widget widget-categories p-4">
                        <ul>
                            <li><a href="<?php echo home_url()?>">Почетна</a></li>
			       <li><a href="<?php echo home_url() . '/о-нама' ?>">О нама</a></li>
								<li><a href="<?php echo home_url() . '/контакт' ?>">Контакт</a></li>
				<li><a href="<?php echo home_url() . '/архива' ?>">Архива</a></li>                  
                            <li><a href="<?php echo home_url() . '/мапа-сајта' ?>">Мапа сајта</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
            <header class="navbar-wrapper navbar-sticky navbar-boxed">
                <div class="container">
                    <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="<?php echo home_url() ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="Веб софтвер за јавне субјекте"/></a></div>
                    <div class="d-table-cell w-100 align-middle pl-md-3">
                        <div class="navbar-top d-none d-lg-flex justify-content-between align-items-center">
  <div class="navbar-link mr-3"></div> 
                            <div>                         
                                <?php
					wp_nav_menu(
					  array(
					    'menu' => 'topmenu',
			        'menu_class'      => 'list-inline mb-0',
			        'before'          => '<span class="navbar-link">',
			        'after'           => '</span>',
						  )
						);
						?>
                            </div>
                        </div>
                        <div class="navbar justify-content-end justify-content-lg-between">
                            <form class="search-box" method="get">
                                <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
                            </form>
                            <?php
				wp_nav_menu(
				  array(
				    'menu' => 'mainmenu',
		        'menu_class'      => 'navbar-nav d-none d-lg-block',
		        'before'          => '<span class="nav-link">',
		        'after'           => '</span>',
					  )
					);
				?>
                                <div>
                                    <ul class="navbar-buttons d-inline-block align-middle mr-lg-2">
                                        <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                                        <li><a href="<?php echo home_url() . '/претрага' ?>"><i class="fe-icon-search"></i></a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </header>

