<!-- Footer -->
<?php
if (is_active_sidebar('first-footer-widget-area') || is_active_sidebar('second-footer-widget-area') || is_active_sidebar('third-footer-widget-area') || is_active_sidebar('fourth-footer-widget-area')) :
    ?>
    <div class="footer_wrapper">
        <div class="footer" <?php echo "style='background-color:" . onepage_get_option('onepage_footer_sidebar_bg_color', '#111') . "'"; ?>>
            <div class="container">
                <div class="row">
                    <?php
                    /* A sidebar in the footer? Yep. You can can customize
                     * your footer with four columns of widgets.
                     */
                    get_sidebar('footer');
                    ?>
                </div>
            </div>
        </div>
        <?php
    endif;
    ?>
    <!--</div>-->
    <div class="bottom_footer" <?php echo "style='background-color:" . onepage_get_option('onepage_footer_bg_color', '#0d141b') . "'"; ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    $logo = '';
                    $logo_text = '';
                    $logo_text = onepage_get_option('onepage_header_logo_text');
                    if (isset($logo_text) && $logo_text != '') {
                        $logo = "<h1 class='logo_text_footer'>" . $logo_text . "</h1>";
                    } else {
                        if (onepage_get_option('onepage_header_logo_img') != '') {
                            $logo = "<img src='" . onepage_get_option('onepage_header_logo_img', ONEPAGE_DIR_URI . 'assets/images/site_logo.png') . "' alt='logo' />";
                        } else {
                            $logo = "<img src='" . ONEPAGE_DIR_URI . 'assets/images/site_logo.png' . "' alt='logo' />";
                        }
                    }
                    echo $logo;
                    $socials = Onepage_Data::get_instance()->social();
                    if (!empty($socials)) {
                        ?>
                    <div class="addtoany_share_save_container addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="http://u95903dx.bget.ru/" data-a2a-title="Главная" style="line-height: 32px;"><a class="a2a_button_facebook" href="/#facebook" title="Facebook" rel="nofollow" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(59, 89, 152);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path></svg></span><span class="a2a_label">Facebook</span></a><a class="a2a_button_twitter" href="/#twitter" title="Twitter" rel="nofollow" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(85, 172, 238);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label">Twitter</span></a><a class="a2a_button_vk" href="/#vk" title="VK" rel="nofollow" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_vk" style="background-color: rgb(88, 126, 163);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M15.764 22.223h1.315s.394-.044.6-.262c.184-.2.18-.574.18-.574s-.03-1.764.79-2.023c.81-.255 1.844 1.705 2.942 2.46.832.57 1.464.445 1.464.445l2.936-.04s1.538-.097.81-1.304c-.06-.1-.426-.894-2.186-2.526-1.843-1.71-1.594-1.434.624-4.39 1.353-1.804 1.893-2.902 1.724-3.374-.16-.45-1.153-.33-1.153-.33l-3.306.02s-.247-.034-.428.074c-.178.108-.293.356-.293.356s-.522 1.394-1.223 2.58c-1.47 2.5-2.06 2.633-2.3 2.476-.563-.36-.42-1.454-.42-2.23 0-2.423.365-3.435-.72-3.696-.357-.085-.623-.143-1.544-.15-1.182-.014-2.18.003-2.743.28-.378.185-.667.595-.49.62.218.027.713.13.975.49.34.46.33 1.496.33 1.496s.193 2.852-.46 3.206c-.442.245-1.056-.252-2.37-2.52-.67-1.163-1.18-2.446-1.18-2.446s-.1-.24-.273-.37c-.212-.155-.506-.204-.506-.204l-3.145.02s-.473.015-.647.22c-.154.183-.01.56-.01.56s2.46 5.757 5.245 8.657c2.553 2.66 5.454 2.485 5.454 2.485z"></path></svg></span><span class="a2a_label">VK</span></a></div></div>
                    <?php } ?>
                    <p><?php echo esc_attr(onepage_get_option('onepage_footer_copyright_text', '2017')); ?></p>
                    <div class="scroll-top page-scroll visible-xs visible-sm">
                        <a class="to_top page-scroll" href="#page-top">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>