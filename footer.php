<?php
$col_1 = get_field("col_1", "options");
$applications_section = get_field("applications_section", "options");
$main_footer_menu = render_menu('footer');
?>
<!-- Start: Footer -->
<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-11">
                <div class="footer--grid">
                    <!-- Nav Links -->
                    <div class="footer--nav">
                        <div class="footer--nav-grid">
                            <div>
                                <div class="footer--nav-col">
                                    <h4><?php _e('Business Accounts', 'fundd'); ?></h4>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_business_accounts',
                                        'container' => false,
                                        'menu_class' => 'footer--nav-list',
                                    ));
                                    ?>
                                </div>

                                <div class="footer--nav-col">
                                    <h4><?php _e('Plus CRM', 'fundd'); ?></h4>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_plus_crm',
                                        'container' => false,
                                        'menu_class' => 'footer--nav-list',
                                    ));
                                    ?>
                                </div>
                            </div>

                            <div>
                                <div class="footer--nav-col">
                                    <h4><?php _e('Card Machines', 'fundd'); ?></h4>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_card_machines',
                                        'container' => false,
                                        'menu_class' => 'footer--nav-list',
                                    ));
                                    ?>
                                </div>

                                <div class="footer--nav-col">
                                    <h4><?php _e('Ecommerce Payments', 'fundd'); ?></h4>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_ecommerce_payments',
                                        'container' => false,
                                        'menu_class' => 'footer--nav-list',
                                    ));
                                    ?>
                                </div>
                            </div>

                            <div>
                                <div class="footer--nav-col">
                                    <h4><?php _e('Personal Account', 'fundd'); ?></h4>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_personal_account',
                                        'container' => false,
                                        'menu_class' => 'footer--nav-list',
                                    ));
                                    ?>
                                </div>

                                <div class="footer--nav-col">
                                    <h4><?php _e('Company', 'fundd'); ?></h4>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_company',
                                        'container' => false,
                                        'menu_class' => 'footer--nav-list',
                                    ));
                                    ?>
                                </div>
                            </div>

                            <div>
                                <div class="footer--nav-col">
                                    <div class="footer--company">
                                        <div class="footer--company-top">
                                            <?php if ($col_1):
                                                $support_email = $col_1["support_email"];
                                                $phone = $col_1["phone"];
                                                $developers_email = $col_1["developers_email"];
                                                $sales_email = $col_1["sales_email"];
                                                ?>
                                                <div class="contact-info">
                                                    <?php if ($support_email || $phone): ?>
                                                        <div class="contact-info--col">
                                                            <h5><?php _e("Support", "darwin") ?></h5>
                                                            <div><a href="tel:<?php echo $phone ?>"
                                                                    title="<?php echo $phone ?>"><?php echo $phone ?></a>
                                                            </div>
                                                            <div><a href="mailto:<?php echo $support_email ?>"
                                                                    title="<?php echo $support_email ?>"><?php echo $support_email ?></a>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if ($developers_email): ?>
                                                        <div class="contact-info--col">
                                                            <h5><?php _e("Developers", "darwin") ?></h5>
                                                            <div><a href="mailto:<?php echo $developers_email ?>"
                                                                    title="<?php echo $developers_email ?>"><?php echo $developers_email ?></a>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer--nav-col">
                                    <h4><?php _e('Help Centre', 'fundd'); ?></h4>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_help_centre',
                                        'container' => false,
                                        'menu_class' => 'footer--nav-list',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="footer--quick-links">
                        <div class="footer--nav-grid">
                            <?php
                            // Fetch the menu items
                            $menu_name = 'footer_quick_links'; // Replace with your menu's theme location
                            $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()[$menu_name]);

                            if ($menu_items) {
                                // Divide menu items into equal parts
                                $items_per_column = ceil(count($menu_items) / 3); // Adjust '3' for the number of columns
                                $chunks = array_chunk($menu_items, $items_per_column);

                                foreach ($chunks as $chunk) {
                                    echo '<div>';
                                    echo '<div class="footer--nav-col">';
                                    echo '<ul>';
                                    foreach ($chunk as $menu_item) {
                                        echo '<li><a href="' . esc_url($menu_item->url) . '" title="' . esc_attr($menu_item->title) . '">' . esc_html($menu_item->title) . '</a></li>';
                                    }
                                    echo '</ul>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                // Display fallback message if no menu is assigned
                                echo '<p>' . __('No menu items found.', 'fundd') . '</p>';
                            }
                            ?>
                            <div>
                                <div class="footer--nav-col">
                                    <?php if ($applications_section["title"]): ?>
                                        <h4><?php echo $applications_section["title"] ?></h4>
                                    <?php else: ?>
                                        <h4><?php _e("Download the Paayco app", "darwin") ?></h4>
                                    <?php endif; ?>
                                    <div class="download-list">
                                        <div>
                                            <a href="<?php echo $applications_section["ios_app_url"] ?>"
                                            title="<?php _e("Download on App Store", "darwin") ?>" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/app-store.png"
                                                    alt="<?php _e("Download on App Store", "darwin") ?>">
                                            </a>
                                        </div>

                                        <div>
                                            <a href="<?php echo $applications_section["android_app_url"] ?>"
                                            title="<?php _e("Download on Google Play", "darwin") ?>" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/google-pay.png"
                                                    alt="<?php _e("Download on Google Play", "darwin") ?>">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer--text">
                    <?php echo get_field("footer_text", "options") ?>
                </div>

                <div class="footer--copyright">
                    <p>Copyright &copy; <?php echo date("Y") ?> All Rights Reserved </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->
</main>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function ($) {
        // Define the URLs for each tab
        var tabUrls = {
            'corporate-tab': '<?php echo home_url() ?>',
            'business-tab': '<?php echo home_url('business-landing-page') ?>',
            'personal-tab': '<?php echo home_url('personal-landing-page') ?>'
        };

        // Listen for changes on the radio inputs
        $('.sliding-tabs input[type="radio"]').change(function () {
            var selectedTab = $(this).attr('id');
            if (tabUrls[selectedTab]) {
                window.location.href = tabUrls[selectedTab];
            }
        });
    });
</script>
</body>

</html>