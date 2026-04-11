<?php
/**
 * Template Name: Search Page
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- Page header -->
        <section class="sd-page-header">
            <div class="container">
                <nav aria-label="breadcrumb" class="sd-archive-breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Почетна</a></li>
                        <li class="breadcrumb-item active">Претрага</li>
                    </ol>
                </nav>
                <h1 class="sd-page-title">Претрага</h1>
            </div>
        </section>

        <!-- Search hero -->
        <section class="sd-search-hero">
            <div class="container">
                <div class="sd-search-hero-inner">
                    <p class="sd-search-lead">Унесите термин или фразу да бисте пронашли вести, догађаје и садржај са сајта.</p>
                    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="sd-search-form">
                        <div class="sd-search-input-wrap">
                            <i class="fe-icon-search sd-search-icon"></i>
                            <input
                                type="search"
                                name="s"
                                class="sd-search-input"
                                placeholder="Претражите садржај сајта…"
                                value="<?php echo esc_attr( get_search_query() ); ?>"
                                autocomplete="off"
                                autofocus
                            >
                            <button type="submit" class="sd-search-btn">
                                Претражи <i class="fe-icon-arrow-right"></i>
                            </button>
                        </div>
                    </form>

                    <div class="sd-search-hints">
                        <span class="sd-search-hints-label">Брзи линкови:</span>
                        <a href="<?php echo home_url( '/category/вести' ); ?>" class="tag-link">Вести</a>
                        <a href="<?php echo home_url( '/о-нама' ); ?>" class="tag-link">О нама</a>
                        <a href="<?php echo home_url( '/контакт' ); ?>" class="tag-link">Контакт</a>
                        <a href="<?php echo home_url( '/галерија' ); ?>" class="tag-link">Галерија</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>
