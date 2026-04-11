<?php
/**
 * Homepage template — Спортско друштво Врање 1093
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- ================================================
             HERO CAROUSEL
             ================================================ -->
        <?php $ci = get_stylesheet_directory_uri() . '/img/carousel/'; ?>
        <section class="sd-hero-full">
            <div class="owl-carousel sd-main-carousel dots-inside"
                 data-owl-carousel='{"nav":true,"dots":true,"loop":true,"items":1,"autoplay":true,"autoplayTimeout":5000,"smartSpeed":900}'>

                <div class="sd-slide" style="background-image:url('<?php echo $ci; ?>image00003.jpeg')">
                    <div class="sd-slide-overlay"></div>
                    <div class="container h-100">
                        <div class="sd-slide-inner">
                            <div class="sd-slide-content">
                                <span class="sd-hero-eyebrow"><i class="fe-icon-map-pin"></i> Врање, Србија</span>
                                <h1 class="sd-hero-title">Спортско друштво<br><strong>Врање 1093</strong></h1>
                                <p class="sd-hero-desc">Промовишемо спорт и здрав начин живота кроз разноврсне активности за све грађане општине Врање.</p>
                                <div class="sd-hero-btns">
                                    <a class="btn btn-style-5 btn-warning mr-3 mb-2" href="<?php echo home_url() . '/о-нама' ?>">О нама</a>
                                    <a class="btn btn-style-5 btn-light mb-2" href="<?php echo home_url() . '/контакт' ?>">Контакт</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sd-slide" style="background-image:url('<?php echo $ci; ?>image00004.jpeg')">
                    <div class="sd-slide-overlay"></div>
                    <div class="container h-100">
                        <div class="sd-slide-inner">
                            <div class="sd-slide-content">
                                <span class="sd-hero-eyebrow"><i class="fe-icon-award"></i> Спортски резултати</span>
                                <h1 class="sd-hero-title">Поносни на<br><strong>наше резултате</strong></h1>
                                <p class="sd-hero-desc">Деценије успешног рада и постигнутих резултата на локалном, регионалном и националном нивоу.</p>
                                <div class="sd-hero-btns">
                                    <a class="btn btn-style-5 btn-warning mr-3 mb-2" href="<?php echo home_url() . '/архива' ?>">Архива</a>
                                    <a class="btn btn-style-5 btn-light mb-2" href="<?php echo home_url() . '/category/вести' ?>">Вести</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sd-slide" style="background-image:url('<?php echo $ci; ?>image00005.jpeg')">
                    <div class="sd-slide-overlay"></div>
                    <div class="container h-100">
                        <div class="sd-slide-inner">
                            <div class="sd-slide-content">
                                <span class="sd-hero-eyebrow"><i class="fe-icon-users"></i> Чланство</span>
                                <h1 class="sd-hero-title">Придружите се<br><strong>нашем тиму</strong></h1>
                                <p class="sd-hero-desc">Постаните члан Спортског друштва Врање 1093 и учествујте у спортским активностима за све узрасте.</p>
                                <div class="sd-hero-btns">
                                    <a class="btn btn-style-5 btn-warning mr-3 mb-2" href="<?php echo home_url() . '/контакт' ?>">Постани члан</a>
                                    <a class="btn btn-style-5 btn-light mb-2" href="<?php echo home_url() . '/о-нама' ?>">О нама</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sd-slide" style="background-image:url('<?php echo $ci; ?>image00006.jpeg')">
                    <div class="sd-slide-overlay"></div>
                    <div class="container h-100">
                        <div class="sd-slide-inner">
                            <div class="sd-slide-content">
                                <span class="sd-hero-eyebrow"><i class="fe-icon-calendar"></i> Догађаји</span>
                                <h1 class="sd-hero-title">Предстојећи<br><strong>спортски догађаји</strong></h1>
                                <p class="sd-hero-desc">Пратите све актуелности и најаве спортских такмичења и активности у општини Врање.</p>
                                <div class="sd-hero-btns">
                                    <a class="btn btn-style-5 btn-warning mr-3 mb-2" href="<?php echo home_url() . '/category/најава-догађаја' ?>">Најаве</a>
                                    <a class="btn btn-style-5 btn-light mb-2" href="<?php echo home_url() . '/category/вести' ?>">Вести</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sd-slide" style="background-image:url('<?php echo $ci; ?>image00007.jpeg')">
                    <div class="sd-slide-overlay"></div>
                    <div class="container h-100">
                        <div class="sd-slide-inner">
                            <div class="sd-slide-content">
                                <span class="sd-hero-eyebrow"><i class="fe-icon-star"></i> Традиција</span>
                                <h1 class="sd-hero-title">Вековна<br><strong>спортска традиција</strong></h1>
                                <p class="sd-hero-desc">Спортско друштво Врање 1093 — организација са дугом историјом у служби спорта и заједнице.</p>
                                <div class="sd-hero-btns">
                                    <a class="btn btn-style-5 btn-warning mr-3 mb-2" href="<?php echo home_url() . '/о-нама' ?>">Наша историја</a>
                                    <a class="btn btn-style-5 btn-light mb-2" href="<?php echo home_url() . '/контакт' ?>">Контакт</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sd-slide" style="background-image:url('<?php echo $ci; ?>image00008.jpeg')">
                    <div class="sd-slide-overlay"></div>
                    <div class="container h-100">
                        <div class="sd-slide-inner">
                            <div class="sd-slide-content">
                                <span class="sd-hero-eyebrow"><i class="fe-icon-flag"></i> Општина Врање</span>
                                <h1 class="sd-hero-title">Спорт у срцу<br><strong>Врања</strong></h1>
                                <p class="sd-hero-desc">Окупљамо спортисте свих узраста и промовишемо здрав и активан живот у општини Врање.</p>
                                <div class="sd-hero-btns">
                                    <a class="btn btn-style-5 btn-warning mr-3 mb-2" href="<?php echo home_url() . '/о-нама' ?>">О нама</a>
                                    <a class="btn btn-style-5 btn-light mb-2" href="<?php echo home_url() . '/контакт' ?>">Контакт</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Badge -->
            <div class="sd-hero-float-badge">
                <i class="fe-icon-award"></i>
                <span>од 1093. године</span>
            </div>
        </section>

        <!-- ================================================
             STATS BAR
             ================================================ -->
        <div class="sd-stats-bar">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-6 col-sm-3 sd-stat-col">
                        <div class="sd-stat">
                            <i class="fe-icon-calendar sd-stat-icon"></i>
                            <strong class="sd-stat-num">1093</strong>
                            <span class="sd-stat-lbl">Година оснивања</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 sd-stat-col">
                        <div class="sd-stat">
                            <i class="fe-icon-layers sd-stat-icon"></i>
                            <strong class="sd-stat-num">10+</strong>
                            <span class="sd-stat-lbl">Спортских грана</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 sd-stat-col">
                        <div class="sd-stat">
                            <i class="fe-icon-users sd-stat-icon"></i>
                            <strong class="sd-stat-num">500+</strong>
                            <span class="sd-stat-lbl">Активних чланова</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 sd-stat-col">
                        <div class="sd-stat">
                            <i class="fe-icon-star sd-stat-icon"></i>
                            <strong class="sd-stat-num">30+</strong>
                            <span class="sd-stat-lbl">Догађаја годишње</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================================================
             АКТУЕЛНОСТИ — NEWS + EVENTS + SIDEBAR
             ================================================ -->
        <section class="sd-section-main py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <!-- ВЕСТИ -->
                        <h2 class="h3 block-title mb-4">Вести<small>Информације о активностима спортског друштва</small></h2>
                        <div class="row">
                            <?php
                            global $post;
                            $default_thumb = get_stylesheet_directory_uri() . '/img/galerija/1.jpg';
                            $myposts = get_posts([
                                'posts_per_page' => 3,
                                'orderby'        => 'date',
                                'category'       => 6,
                            ]);
                            if ( $myposts ) :
                                foreach ( $myposts as $post ) :
                                    setup_postdata( $post );
                                    $thumb   = has_post_thumbnail()
                                        ? get_the_post_thumbnail_url( null, 'home-post-thumb' )
                                        : $default_thumb;
                                    $excerpt = has_excerpt()
                                        ? get_the_excerpt()
                                        : wp_trim_words( strip_tags( get_the_content() ), 15, '…' );
                            ?>
                            <div class="col-sm-6 col-md-4 mb-4 d-flex">
                                <article class="sd-news-card w-100">
                                    <a href="<?php the_permalink(); ?>" class="sd-news-img-wrap">
                                        <img src="<?php echo esc_url( $thumb ); ?>"
                                             alt="<?php the_title_attribute(); ?>"
                                             class="sd-news-img">
                                        <span class="sd-news-date-tag"><?php echo get_the_date( 'd M Y' ); ?></span>
                                    </a>
                                    <div class="sd-news-body">
                                        <h3 class="sd-news-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <?php if ( $excerpt ) : ?>
                                        <p class="sd-news-excerpt"><?php echo esc_html( $excerpt ); ?></p>
                                        <?php endif; ?>
                                        <a href="<?php the_permalink(); ?>" class="sd-more-link">
                                            Читај даље <i class="fe-icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <?php endforeach; wp_reset_postdata(); endif; ?>
                        </div>
                        <div class="mb-5">
                            <a class="btn btn-style-5 btn-secondary" href="<?php echo home_url() . '/category/вести' ?>">Погледајте све вести</a>
                        </div>

                        <!-- НАЈАВА ДОГАЂАЈА -->
                        <h2 class="h3 block-title mb-4">Најава догађаја<small>Предстојећи спортски догађаји у општини</small></h2>
                        <?php
                        global $post;
                        $myposts = get_posts([
                            'posts_per_page' => 4,
                            'orderby'        => 'date',
                            'category'       => 7,
                        ]);
                        if ( $myposts ) :
                            foreach ( $myposts as $post ) :
                                setup_postdata( $post );
                                $thumb = has_post_thumbnail()
                                    ? get_the_post_thumbnail_url( null, 'home-post-thumb' )
                                    : $default_thumb;
                        ?>
                        <article class="sd-event-card mb-3">
                            <div class="sd-event-date-box">
                                <span class="sd-event-dd"><?php echo get_the_date( 'd' ); ?></span>
                                <span class="sd-event-mm"><?php echo get_the_date( 'M' ); ?></span>
                            </div>
                            <img src="<?php echo esc_url( $thumb ); ?>"
                                 alt="<?php the_title_attribute(); ?>"
                                 class="sd-event-thumb">
                            <div class="sd-event-info">
                                <h3 class="sd-event-title">
                                    <a href="<?php the_permalink(); ?>" class="reload-link"><?php the_title(); ?></a>
                                </h3>
                                <small class="text-muted">
                                    <i class="fe-icon-clock mr-1"></i><?php echo get_the_date( 'd. F Y.' ); ?>
                                </small>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="sd-event-arrow" aria-label="Читај даље">
                                <i class="fe-icon-chevron-right"></i>
                            </a>
                        </article>
                        <?php endforeach; wp_reset_postdata(); endif; ?>
                        <div class="pt-2">
                            <a class="btn btn-style-5 btn-secondary" href="<?php echo home_url() . '/category/најава-догађаја' ?>">Погледајте све најаве</a>
                        </div>

                    </div><!-- /col-lg-9 -->

                    <?php include 'inc/sidebar.php'; ?>

                </div><!-- /row -->
            </div><!-- /container -->
        </section>

        <!-- ================================================
             О НАМА — ICON BOXES
             ================================================ -->
        <section class="sd-about-section py-5 bg-secondary">
            <div class="container">
                <h2 class="h3 block-title text-center mb-5">О нама<small>Спортско друштво Врање</small></h2>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><i class="fe-icon-target"></i></div>
                            <h3 class="icon-box-title">Наша мисија</h3>
                            <p class="icon-box-text">Промовисање спорта и здравог начина живота кроз организовање спортских активности за све узрасте у општини Врање.</p>
                            <a class="icon-box-link" href="<?php echo home_url() . '/о-нама' ?>">Сазнај више <i class="fe-icon-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><i class="fe-icon-users"></i></div>
                            <h3 class="icon-box-title">Чланство</h3>
                            <p class="icon-box-text">Придружите се нашем друштву и учествујте у широком спектру спортских активности. Чланство је отворено за све заинтересоване.</p>
                            <a class="icon-box-link" href="<?php echo home_url() . '/контакт' ?>">Постани члан <i class="fe-icon-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><i class="fe-icon-award"></i></div>
                            <h3 class="icon-box-title">Резултати</h3>
                            <p class="icon-box-text">Поносни смо на спортске резултате остварене на локалном, регионалном и националном нивоу кроз вишедеценијски рад.</p>
                            <a class="icon-box-link" href="<?php echo home_url() . '/архива' ?>">Архива <i class="fe-icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================================================
             ГАЛЕРИЈА CAROUSEL
             ================================================ -->
        <section class="sd-gallery-section py-4">
            <div class="container">
                <h2 class="h3 block-title text-center mb-4">Галерија<small>Фотографије са наших активности</small></h2>
                <div class="owl-carousel"
                     data-owl-carousel='{"nav":false,"dots":false,"loop":true,"margin":10,"autoplay":true,"autoplayTimeout":3000,"responsive":{"0":{"items":2},"576":{"items":3},"768":{"items":4},"992":{"items":5}}}'>
                    <div class="sd-gallery-thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/galerija/1.jpg" alt="Галерија"></div>
                    <div class="sd-gallery-thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/galerija/2.jpg" alt="Галерија"></div>
                    <div class="sd-gallery-thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/galerija/3.jpg" alt="Галерија"></div>
                    <div class="sd-gallery-thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/galerija/4.jpg" alt="Галерија"></div>
                    <div class="sd-gallery-thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/galerija/5.jpg" alt="Галерија"></div>
                    <div class="sd-gallery-thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/galerija/6.jpg" alt="Галерија"></div>
                </div>
            </div>
        </section>

        <!-- ================================================
             КОНТАКТ STRIP
             ================================================ -->
        <section class="sd-contact-bar py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="sd-contact-block">
                            <i class="fe-icon-mail sd-contact-ico"></i>
                            <div>
                                <h4 class="sd-contact-head">Електронска пошта</h4>
                                <a class="sd-contact-val" href="mailto:sdvranje1093@vranje.org.rs">sdvranje1093@vranje.org.rs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="sd-contact-block">
                            <i class="fe-icon-map-pin sd-contact-ico"></i>
                            <div>
                                <h4 class="sd-contact-head">Адреса</h4>
                                <span class="sd-contact-val">Иво Лоле Рибара 6<br>17500 Врање, Србија</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sd-contact-block">
                            <i class="fe-icon-share-2 sd-contact-ico"></i>
                            <div>
                                <h4 class="sd-contact-head">Друштвене мреже</h4>
                                <a class="sd-contact-val d-block" href="https://www.facebook.com/profile.php?id=61570608391388" target="_blank">
                                    <i class="fe-icon-facebook mr-1"></i>Facebook страница
                                </a>
                                <a class="sd-contact-val d-block" href="https://www.instagram.com/sportsko_drustvo_vranje_1093/?igsh=MXM0b2xvdTM2OXppOA%3D%3D&utm_source=qr" target="_blank">
                                    <i class="fe-icon-instagram mr-1"></i>Instagram профил
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>
