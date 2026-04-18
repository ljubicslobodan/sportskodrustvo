<?php
/**
 * Footer template
 */
?>

<footer class="sd-footer">

    <!-- Main footer -->
    <div class="sd-footer-main">
        <div class="container">
            <div class="row">

                <!-- Brand column -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="sd-footer-brand">
                        <a href="<?php echo home_url(); ?>" class="sd-footer-logo-link">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-2.png"
                                 alt="<?php bloginfo( 'name' ); ?>"
                                 class="sd-footer-logo">
                        </a>
                        <p class="sd-footer-about">
                            Спортско друштво Врање 1093 — организација посвећена промовисању спорта и здравог начина живота у општини Врање.
                        </p>
                        <div class="sd-footer-social">
                            <a href="https://www.facebook.com/profile.php?id=61570608391388" target="_blank" aria-label="Facebook">
                                <i class="fe-icon-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/sportsko_drustvo_vranje_1093/?igsh=MXM0b2xvdTM2OXppOA%3D%3D&utm_source=qr" target="_blank" aria-label="Instagram">
                                <i class="fe-icon-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Links column -->
                <div class="col-lg-2 col-md-3 col-6 mb-4 mb-lg-0">
                    <h4 class="sd-footer-heading">Странице</h4>
                    <ul class="sd-footer-links">
                        <li><a href="<?php echo home_url(); ?>">Почетна</a></li>
                        <li><a href="<?php echo home_url() . '/о-нама'; ?>">О нама</a></li>
                        <li><a href="<?php echo home_url() . '/контакт'; ?>">Контакт</a></li>
                        <li><a href="<?php echo home_url() . '/архива'; ?>">Архива</a></li>
                        <li><a href="<?php echo home_url() . '/мапа-сајта'; ?>">Мапа сајта</a></li>
                    </ul>
                </div>

                <!-- Categories column -->
                <div class="col-lg-2 col-md-3 col-6 mb-4 mb-lg-0">
                    <h4 class="sd-footer-heading">Садржај</h4>
                    <ul class="sd-footer-links">
                        <li><a href="<?php echo home_url() . '/category/вести'; ?>">Вести</a></li>
                        <li><a href="<?php echo home_url() . '/category/најава-догађаја'; ?>">Најава догађаја</a></li>
                        <li><a href="<?php echo home_url() . '/category/табеле'; ?>">Табеле</a></li>
                        <li><a href="<?php echo home_url() . '/политика-приватности'; ?>">Политика приватности</a></li>
                        <li><a href="<?php echo admin_url(); ?>">Администрација</a></li>
                    </ul>
                </div>

                <!-- Contact column -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="sd-footer-heading">Контакт</h4>
                    <ul class="sd-footer-contact">
                        <li>
                            <i class="fe-icon-map-pin"></i>
                            <span>Иво Лоле Рибара 6<br>17500 Врање, Србија</span>
                        </li>
                        <li>
                            <i class="fe-icon-mail"></i>
                            <a href="mailto:sdvranje1093@vranje.org.rs">sdvranje1093@vranje.org.rs</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom bar -->
    <div class="sd-footer-bottom">
        <div class="container">
            <div class="sd-footer-bottom-inner">
                <div class="sd-footer-copy">
                    &copy; <?php echo date( 'Y' ); ?> Спортско друштво Врање 1093
                </div>
                <div class="sd-footer-partners">
                    <a href="https://vranje.rs" target="_blank" class="sd-footer-partner" title="Град Врање">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vranjefooterlogo.png" alt="Град Врање" height="28">
                        <span>Град Врање</span>
                    </a>
                    <span class="sd-footer-sep"></span>
                    <a href="https://www.reload.rs" target="_blank" class="sd-footer-partner" title="Релоад — израда веб-сајтова">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reloadfooterlogo.png" alt="Релоад" height="28">
                        <span>Израдио: Релоад</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
