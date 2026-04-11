<?php
/**
 * The header for our theme
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

<!-- Mobile overlay -->
<div class="sd-mob-overlay" id="sd-mob-overlay"></div>

<!-- Mobile drawer -->
<div class="sd-mob-drawer" id="sd-mob-drawer" aria-hidden="true">
    <div class="sd-mob-drawer-header">
        <a href="<?php echo home_url(); ?>" class="sd-mob-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
        </a>
        <button class="sd-mob-close" id="sd-mob-close" aria-label="Затвори мени">
            <i class="fe-icon-x"></i>
        </button>
    </div>
    <nav class="sd-mob-nav">
        <?php wp_nav_menu( [
            'menu'       => 'mainmenu',
            'menu_class' => 'sd-mob-list',
            'container'  => false,
            'walker'     => new SD_Mobile_Walker(),
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        ] ); ?>
    </nav>
    <div class="sd-mob-drawer-footer">
        <?php wp_nav_menu( [
            'menu'       => 'topmenu',
            'menu_class' => 'sd-mob-util-list',
            'container'  => false,
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        ] ); ?>
        <a href="<?php echo home_url( '/претрага' ); ?>" class="sd-mob-search-link">
            <i class="fe-icon-search"></i> Претрага
        </a>
    </div>
</div>

<!-- Top bar -->
<div class="sd-topbar">
    <div class="container">
        <div class="sd-topbar-inner">
            <span class="sd-topbar-brand">
                <i class="fe-icon-award"></i>
                Спортско друштво Врање 1093
            </span>
            <nav class="sd-topbar-nav" aria-label="Секундарни мени">
                <?php wp_nav_menu( [
                    'menu'       => 'topmenu',
                    'menu_class' => 'sd-topbar-list',
                    'container'  => false,
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                ] ); ?>
                <a href="<?php echo home_url( '/претрага' ); ?>" class="sd-topbar-search-link" aria-label="Претрага">
                    <i class="fe-icon-search"></i>
                </a>
            </nav>
        </div>
    </div>
</div>

<!-- Main header -->
<header class="sd-header" id="sd-header">
    <div class="container">
        <div class="sd-header-inner">

            <a href="<?php echo home_url(); ?>" class="sd-logo" aria-label="<?php bloginfo( 'name' ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
            </a>

            <nav class="sd-nav d-none d-lg-flex" aria-label="Главни мени">
                <?php wp_nav_menu( [
                    'menu'       => 'mainmenu',
                    'menu_class' => 'sd-nav-list',
                    'container'  => false,
                    'walker'     => new SD_Nav_Walker(),
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                ] ); ?>
            </nav>

            <button class="sd-hamburger d-lg-none" id="sd-hamburger" aria-label="Отвори мени" aria-expanded="false">
                <span class="sd-hamburger-line"></span>
                <span class="sd-hamburger-line"></span>
                <span class="sd-hamburger-line"></span>
            </button>

        </div>
    </div>
</header>
