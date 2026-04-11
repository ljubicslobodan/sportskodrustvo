<?php
/**
 * Search results template
 */
get_header();

$search_query = get_search_query();
$result_count = $wp_query->found_posts;
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
                <h1 class="sd-page-title">
                    <?php if ( have_posts() ) : ?>
                        Резултати за: <em class="sd-search-query-title"><?php echo esc_html( $search_query ); ?></em>
                    <?php else : ?>
                        Нема резултата за: <em class="sd-search-query-title"><?php echo esc_html( $search_query ); ?></em>
                    <?php endif; ?>
                </h1>
            </div>
        </section>

        <!-- Results section -->
        <section class="sd-search-results-section">
            <div class="container">
                <div class="sd-search-results-wrap">

                    <?php if ( have_posts() ) : ?>

                        <!-- Count -->
                        <p class="sd-search-count">
                            <i class="fe-icon-check-circle"></i>
                            Пронађено <strong><?php echo $result_count; ?></strong> <?php echo $result_count === 1 ? 'резултат' : ( $result_count < 5 ? 'резултата' : 'резултата' ); ?>
                        </p>

                        <!-- Inline search bar -->
                        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="sd-search-form sd-search-form--inline">
                            <div class="sd-search-input-wrap">
                                <i class="fe-icon-search sd-search-icon"></i>
                                <input
                                    type="search"
                                    name="s"
                                    class="sd-search-input"
                                    placeholder="Нова претрага…"
                                    value="<?php echo esc_attr( $search_query ); ?>"
                                    autocomplete="off"
                                >
                                <button type="submit" class="sd-search-btn">
                                    Претражи <i class="fe-icon-arrow-right"></i>
                                </button>
                            </div>
                        </form>

                        <div class="sd-search-results-list">
                        <?php while ( have_posts() ) : the_post();
                            $categories = get_the_category();
                            $cat_name   = $categories ? esc_html( $categories[0]->name ) : '';
                            $cat_link   = $categories ? esc_url( get_category_link( $categories[0]->term_id ) ) : '';
                            $excerpt    = get_the_excerpt();
                        ?>
                            <article class="sd-search-result-item">
                                <div class="sd-search-result-meta">
                                    <?php if ( $cat_name ) : ?>
                                        <a href="<?php echo $cat_link; ?>" class="sd-search-result-cat">
                                            <i class="fe-icon-tag"></i> <?php echo $cat_name; ?>
                                        </a>
                                        <span class="sd-search-result-sep">·</span>
                                    <?php endif; ?>
                                    <span class="sd-search-result-date">
                                        <i class="fe-icon-calendar"></i>
                                        <?php echo get_the_date( 'j. F Y.' ); ?>
                                    </span>
                                </div>
                                <h2 class="sd-search-result-title">
                                    <a href="<?php the_permalink(); ?>" class="sd-search-result-link">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php if ( $excerpt ) : ?>
                                    <p class="sd-search-result-excerpt"><?php echo esc_html( $excerpt ); ?></p>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="sd-search-result-more">
                                    Читај даље <i class="fe-icon-arrow-right"></i>
                                </a>
                            </article>
                        <?php endwhile; ?>
                        </div>

                        <!-- Pagination -->
                        <div class="sd-search-pagination">
                            <?php
                            echo paginate_links( [
                                'prev_text' => '<i class="fe-icon-arrow-left"></i> Претходна',
                                'next_text' => 'Следећа <i class="fe-icon-arrow-right"></i>',
                                'type'      => 'list',
                            ] );
                            ?>
                        </div>

                    <?php else : ?>

                        <!-- Empty state -->
                        <div class="sd-search-empty">
                            <div class="sd-search-empty-icon">
                                <i class="fe-icon-search"></i>
                            </div>
                            <h2 class="sd-search-empty-title">Ништа није пронађено</h2>
                            <p class="sd-search-empty-text">
                                Покушајте са другим термином, проверите правопис или претражите мање специфичним изразом.
                            </p>
                            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="sd-search-form">
                                <div class="sd-search-input-wrap">
                                    <i class="fe-icon-search sd-search-icon"></i>
                                    <input
                                        type="search"
                                        name="s"
                                        class="sd-search-input"
                                        placeholder="Покушајте поново…"
                                        autocomplete="off"
                                        autofocus
                                    >
                                    <button type="submit" class="sd-search-btn">
                                        Претражи <i class="fe-icon-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                    <?php endif; ?>

                </div>
            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>
