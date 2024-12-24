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
            <!-- Nav Links -->
            <div class="footer--nav">
                <div class="footer--nav-grid">
                    <div>
                        <div class="footer--nav-col">
                            <h4>Business Accounts</h4>
                            <ul>
                                <li><a href="#" title="Multi currency Accounts">Multi currency Accounts</a></li>
                                <li><a href="#" title="Bulk Payments">Bulk Payments</a></li>
                                <li><a href="#" title="Currency Converter">Currency Converter</a></li>
                                <li><a href="#" title="Business debit card">Business debit card</a></li>
                            </ul>
                        </div>

                        <div class="footer--nav-col">
                            <h4>Plus CRM</h4>
                            <ul>
                                <li><a href="#" title="Accounting">Accounting</a></li>
                                <li><a href="#" title="Biling">Biling</a></li>
                                <li><a href="#" title="Team Management">Team Management</a></li>
                                <li><a href="#" title="Project management">Project management</a></li>
                                <li><a href="#" title="Contratcs">Contratcs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="footer--nav-col">
                            <h4>Card Machines</h4>
                            <ul>
                                <li><a href="#" title="Mini Card Machine">Mini Card Machine</a></li>
                                <li><a href="#" title="Medi Card Machine">Medi Card Machine</a></li>
                                <li><a href="#" title="Max Card Machine">Max Card Machine</a></li>
                                <li><a href="#" title="Unattended Terminal">Unattended Terminal</a></li>
                            </ul>
                        </div>

                        <div class="footer--nav-col">
                            <h4>Ecommerce Payments</h4>
                            <ul>
                                <li><a href="#" title="Online payments">Online payments</a></li>
                                <li><a href="#" title="Payment link">Payment link</a></li>
                                <li><a href="#" title="Components">Components</a></li>
                                <li><a href="#" title="Linked Accounts">Linked Accounts</a></li>
                                <li><a href="#" title="Payment Methods">Payment Methods</a></li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="footer--nav-col">
                            <h4>Personal Account</h4>
                            <ul>
                                <li><a href="#" title="Paayco Account">Paayco Account</a></li>
                                <li><a href="#" title="International money transfer">International money transfer</a></li>
                                <li><a href="#" title="Receive money">Receive money</a></li>
                                <li><a href="#" title="Send money">Send money</a></li>
                            </ul>
                        </div>

                        <div class="footer--nav-col">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="#" title="Our company">Our company</a></li>
                                <li><a href="#" title="Developers">Developers</a></li>
                                <li><a href="#" title="Security">Security</a></li>
                                <li><a href="#" title="Careers">Careers</a></li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="footer--nav-col">
                            <div class="footer--company">
                                <div class="footer--company-top">
                                    <div class="contact-info">
                                        <div class="contact-info--col">
                                            <h5>Support</h5>
                                            <div><a href="mailto:support@paayco.com" title="support@paayco.com">support@paayco.com</a>
                                            </div>
                                            <div><a href="tel:+4402039761111" title="+44 0203.976.1111">+44 0203.976.1111</a>
                                            </div>
                                        </div>
                                        <div class="contact-info--col">
                                            <h5>Developers</h5>
                                            <div><a href="mailto:integrations@paayco.com" title="integrations@paayco.com">integrations@paayco.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer--nav-col">
                            <h4>Help Centre</h4>
                            <ul>
                                <li><a href="#" title="Sending money">Sending money</a></li>
                                <li><a href="#" title="Holding money">Holding money</a></li>
                                <li><a href="#" title="Receiving money">Receiving money</a></li>
                                <li><a href="#" title="Processing payments">Processing payments</a></li>
                                <li><a href="#" title="Service status">Service status</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer--quick-links">
                <div class="footer--nav-grid">
                    <div>
                        <div class="footer--nav-col">
                            <ul>
                                <li><a href="#" title="Legal">Legal</a></li>
                                <li><a href="#" title="Privacy policy">Privacy policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="footer--nav-col">
                            <ul>
                                <li><a href="#" title="Terms of Use">Terms of Use</a></li>
                                <li><a href="#" title="Cookie Policy">Cookie Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="footer--nav-col">
                            <ul>
                                <li><a href="#" title="Railsbank Terms">Railsbank Terms</a></li>
                                <li><a href="#" title="Modern slavery statement">Modern slavery statement</a></li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="footer--nav-col">
                            <h4>Download the Paayco app</h4>
                            <div class="download-list">
                                <div>
                                    <a href="#" title="Download on App Store">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/app-store.png" alt="Download on App Store">
                                    </a>
                                </div>

                                <div>
                                    <a href="#" title="Download on Google Pay">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/google-pay.png" alt="Download on Google Pay">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer--text">
            <p>Paayco Ltd (registration number 15991797) is a distributor of PayrNet Ltd which is an Electronic Money Institution authorised by the FCA under the Electronic Money Regulations 2011 (EMR’s) with Firm Reference Number 900594</p>

            <p>The Financial Services Compensation Scheme does not cover electronic money products. No other compensation scheme exists to cover losses from your electronic money account. Your funds will be held in one or more segregated bank accounts with a regulated third party credit institution, in accordance with the provisions of the Electronic Money Regulations 2011.</p>
        </div>

        <div class="footer--copyright">
            <p>Copyright &copy; 2025 All Rights Reserved </p>
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