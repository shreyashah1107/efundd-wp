<?php
$col_1 = get_field("col_1", "options");
$col_2 = get_field("col_2", "options");
$col_3 = get_field("col_3", "options");
$main_footer_menu = render_menu('footer');
?>
<!-- Start: Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer--grid">
            <!-- Company Info & Contact Details -->
            <?php if (isset($col_1)): ?>
                <div class="footer--company">
                    <div class="footer--company-top">
                        <?php if (!empty($col_1["logo"])): ?>
                            <div class="logo">
                                <img src="<?php echo $col_1["logo"]["url"] ?>"
                                     alt="<?php echo @$col_1["logo"]["alt"] ?>">
                            </div>
                        <?php endif; ?>
                        <div class="contact-info">
                            <?php if (!empty($col_1["phone"]) || !empty($col_1["support_email"])): ?>
                                <div class="contact-info--col">
                                    <h5>Support</h5>
                                    <?php if (!empty($col_1["support_email"])): ?>
                                        <div><a href="mailto:<?php echo $col_1["support_email"] ?>"
                                                title="<?php echo $col_1["support_email"] ?>"><?php echo $col_1["support_email"] ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($col_1["phone"])): ?>
                                        <div><a href="tel:<?php echo $col_1["phone"] ?>"
                                                title="<?php echo $col_1["phone"] ?>"><?php echo $col_1["phone"] ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($col_1["developers_email"])): ?>
                                <div class="contact-info--col">
                                    <h5>Developers</h5>
                                    <div><a href="mailto:<?php echo $col_1["developers_email"] ?>"
                                            title="<?php echo $col_1["developers_email"] ?>"><?php echo $col_1["developers_email"] ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($col_1["sales_email"])): ?>
                                <div class="contact-info--col">
                                    <h5>Sales</h5>
                                    <div><a href="mailto:<?php echo $col_1["sales_email"] ?>"
                                            title="<?php echo $col_1["sales_email"] ?>"><?php echo $col_1["sales_email"] ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- Hide < 1200px -->
                    <div class="footer--company-bottom">
                        <p>Copyright &copy; <?= date('Y') ?> | All Rights Reserved </p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Quick Links -->
            <div class="footer--nav">
                <div class="footer--nav-grid">
                    <?php
                    foreach ($main_footer_menu as $menu_item) {
                        if (!empty($menu_item['children']) && isset($menu_item['title'])) {
                            $menu_childrens = $menu_item["children"];
                            ?>
                            <div class="footer--nav-col">
                                <h4><?php echo $menu_item["title"] ?></h4>
                                <ul>
                                    <?php foreach ($menu_childrens as $menu_item) { ?>
                                        <li><a href="<?php echo $menu_item["url"] ?>"
                                               title="<?php echo $menu_item["title"] ?>"><?php echo $menu_item["title"] ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php }
                    } ?>
                    <div class="footer--nav-col">
                        <ul>
                            <?php
                            foreach ($main_footer_menu as $menu_item) {
                            if (empty($menu_item['children']) && isset($menu_item['title'])) {
                                ?>
                                <li><a href="<?php echo $menu_item["url"] ?>"
                                       title="<?php echo $menu_item["title"] ?>"><?php echo $menu_item["title"] ?></a>
                                </li>
                            <?php } } ?>
                        </ul>
                    </div>

                </div>
            </div>

            <?php if (isset($col_3)):
                $awards_and_cerificates = $col_3["awards_and_cerificates"];
                if (isset($awards_and_cerificates)):
                    ?>
                    <!-- Awards Information -->
                    <div class="footer--awards">
                        <h4><?php _e("Awards & Certificates", "fundd") ?></h4>
                        <div class="achievements-wrapper">
                            <div class="achievements--list">
                                <?php foreach ($awards_and_cerificates as $award): ?>
                                    <div class="image">
                                        <img src="<?php echo $award["url"] ?>" alt="<?php echo @$award["alt"] ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; endif; ?>
            <!-- Hide > 1200px -->
            <div class="footer--copyright">
                <p>Copyright &copy; <?= date('Y') ?> | All Rights Reserved </p>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->
</main>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function($) {
        // Define the URLs for each tab
        var tabUrls = {
            'corporate-tab': '<?php echo home_url() ?>',
            'business-tab': '<?php echo home_url('business-landing-page') ?>',
            'personal-tab': '<?php echo home_url('personal-landing-page') ?>'
        };

        // Listen for changes on the radio inputs
        $('.sliding-tabs input[type="radio"]').change(function() {
            var selectedTab = $(this).attr('id');
            if (tabUrls[selectedTab]) {
                window.location.href = tabUrls[selectedTab];
            }
        });
    });
</script>
</body>
</html>