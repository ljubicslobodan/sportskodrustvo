<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
    <footer class="bg-dark pt-3 pb-3">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center text-center text-md-left mt-3 mb-3">
                <div class="order-4 pt-3 text-center">
                    <a href="<?php echo home_url() . '/политика-приватности' ?>">
                        <div class="footer-link text-white ml-3">Политика приватности</div>
                    </a><br>
										<a href="<?php echo admin_url(); ?>">
									<div class="footer-link text-white ml-3">Зона за администраторе</div>
										</a>
                </div>
                <div class="order-2 pt-3 text-center footer-link text-white">
<div><img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-2.png" alt="Grb Vranja" height="61" width="80" /></div>
                </div>
               <div class="order-3 pt-3 text-center">
                    <a href="https://vranje.rs">
                        <div class="m-0 text-sm text-white">
                            <div><img src="<?php echo get_stylesheet_directory_uri();?>/img/vranjefooterlogo.png" alt="Grb Vranja" height="50" width="35" /></div>
                            <span class='opacity-60'>Град Врање.</span>                            
                        </div>
                    </a>
                </div>
                <div class="order-1 pt-3 text-center">
                    <a href="https://www.reload.rs" target="_blank">
                        <div class="m-0 text-sm text-white order-3">
                            <div><img src="<?php echo get_stylesheet_directory_uri();?>/img/reloadfooterlogo.png" alt="izrada vebsajta reload logo" height="50" width="44" /></div>
                            <span class='d-inline-block nav-link text-white opacity-60 p-0'>Веб софтвер за јавне субјекте израдио: Релоад</span>
                            <br><span class='opacity-60'>© Задржана права на софтвер и дизајн.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
   <?php wp_footer(); ?>
