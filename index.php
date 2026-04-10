<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="bg-secondary">
                <div class="pt-0 pb-3">
                    <div class="container">
                        <div class="box-shadow bg-white">
                            <div class="p-4">
                                <div>
                                    <div class="owl-carousel owl-loaded owl-drag" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;margin&quot;: 30, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;630&quot;:{&quot;items&quot;:2},&quot;991&quot;:{&quot;items&quot;:3},&quot;1200&quot;:{&quot;items&quot;:3}} }">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(-1608px, 0px, 0px); transition: all 0.45s ease 0s; width: 3861px;">
                                                <div class="owl-item" style="width: 291.667px; margin-right: 30px;"><img src="<?php echo get_stylesheet_directory_uri();?>/img/galerija/1.jpg" alt="Спортско друштво Врање 1093"></div>
                                               <div class="owl-item" style="width: 291.667px; margin-right: 30px;"><img src="<?php echo get_stylesheet_directory_uri();?>/img/galerija/2.jpg" alt="Спортско друштво Врање 1093"></div>
                                                <div class="owl-item" style="width: 291.667px; margin-right: 30px;"><img src="<?php echo get_stylesheet_directory_uri();?>/img/galerija/3.jpg" alt="Спортско друштво Врање 1093"></div>
                                                <div class="owl-item" style="width: 291.667px; margin-right: 30px;"><img src="<?php echo get_stylesheet_directory_uri();?>/img/galerija/4.jpg" alt="Спортско друштво Врање 1093"></div>
                                                <div class="owl-item" style="width: 291.667px; margin-right: 30px;"><img src="<?php echo get_stylesheet_directory_uri();?>/img/galerija/5.jpg" alt="Спортско друштво Врање 1093"></div>
                                                <div class="owl-item" style="width: 291.667px; margin-right: 30px;"><img src="<?php echo get_stylesheet_directory_uri();?>/img/galerija/6.jpg" alt="Спортско друштво Врање 1093"></div>
                                            </div>
                                        </div>
                                        <div class="owl-nav">
                                            <button type="button" class="owl-prev"></button>
                                            <button type="button" class="owl-next"></button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h1 class="h3 block-title">Спортско друштво Врање 1093</h1>
                                    <p class="text-lg  text-muted pt-3 d-block d-lg-block">Друштво је спортска добитна организација са статусом привредног друштва која обавља делатност у складу са законом и статутом.</p>
                                    <div class="pt-3 text-right">
                                        <a class="btn btn-style-5 btn-warning mr-3 mb-3" href="<?php echo home_url() . '/о-нама' ?>">Опширније</a><a class="btn btn-style-5 btn-success mr-3 mb-3" href="<?php echo home_url() . '/контакт' ?>">Контакт</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div>
                <div class="container pb-3 mb-1">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="box-shadow">
                                <div class="p-4">
                                    <div class="row ">
                                        <div class="container">
              <h2 class="h3 block-title">Актуелности<small>Информације за грађане у вези активности спортског друштва</small></h2>
                                            <div class="row pt-4 d-flex justify-content-center">
                                                <div class="col-md-6">
                                                    <h3 class="widget-title">Вести</h3>
                                                    <dl class="dl-with-icon">
                                                        <?php
																	global $post;

																	$myposts = get_posts( array(
																			'posts_per_page' => 4,
																			'orderby' => 'date',
																			'category' => 6

																	) );
																	if ( $myposts ) {
																			foreach ( $myposts as $post ) :
																					setup_postdata( $post ); ?>
                                                            <dt><i class="fe-icon-file text-success"></i><a href="<?php the_permalink(); ?>" class="reload-link"><?php the_title(); ?></a></dt>
                                                            <dd>
                                                                <?php echo get_the_date(); ?>
                                                            </dd>
                                                          
                                                            <?php
																			endforeach;
																			wp_reset_postdata();
																	}
																	?>                                                                                                       </dl>
													<a class="btn btn-style-5 mb-3 btn-secondary" href="<?php echo home_url() . '/category/вести' ?>">Погледајте све вести</a>
                                                </div>
												 <div class="col-md-6">
                                                    <h3 class="widget-title">Најава догађаја</h3>
                                                    <dl class="dl-with-icon">
                                                        <?php
														global $post;
														$myposts = get_posts( array(
																'posts_per_page' => 4,
																'orderby' => 'date',
																'category' => 7
														) );
														if ( $myposts ) {
																foreach ( $myposts as $post ) :
																		setup_postdata( $post ); ?>
                                                            <dt><i class="fe-icon-info text-success"></i><a href="<?php the_permalink(); ?>" class="reload-link"><?php the_title(); ?></a></dt>
                                                            <dd>
                                                                <?php echo get_the_date(); ?>
                                                            </dd>
                                                            
                                                            <?php
                            																endforeach;
                            																wp_reset_postdata();
                                  														}
      														                          ?>
                                                                </dl>
													<a class="btn btn-style-5 mb-3 btn-secondary" href="<?php echo home_url() . '/category/најава-догађаја' ?>">Погледајте све најаве</a>
													<img src=""> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include 'inc/sidebar.php'; ?>
                    </div>
                </div>
            </div>
           
            <section class="pt-5 pb-md-3 bg-secondary">
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget">
                                <h3 class="widget-title">Електронска пошта</h3>
                                    <i class="fe-icon-mail pr-2"></i><a class="navi-link" href="mailto:sdvranje1093@vranje.org.rs">sdvranje1093@vranje.org.rs</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h3 class="widget-title">Адреса</h3>
                                <i class="fe-icon-home pr-2"></i><span class="navi-link">Иво Лоле Рибара 6, <br>17500 Врање, <br>Србија</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h3 class="widget-title">Друштвене мреже</h3>
                                <i class="fe-icon-facebook"></i><a class="navi-link" href="https://www.facebook.com/profile.php?id=61570608391388" target="_blank"> Пратите нашу Фејсбук страницу</a><br>
								<i class="fe-icon-instagram"></i><a class="navi-link" href="https://www.instagram.com/sportsko_drustvo_vranje_1093/?igsh=MXM0b2xvdTM2OXppOA%3D%3D&utm_source=qr" target="_blank"> Пратите нашу инстаграм страницу</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php
get_footer();
?>
