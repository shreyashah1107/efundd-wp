<?php
$mobile_app_section = get_field("mobile_app_section");
if (isset($mobile_app_section)):
    $app_image = $mobile_app_section["image"];
    ?>
    <section class="mobile-app">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xxl-5">
                    <div class="title-row">
                        <div class="subtitle">INTERNATIONAL PAYMENTS</div>
                        <h3 class="section-title section-title--xl has-bg-gradient"><?php echo $mobile_app_section["title"] ?></h3>

                        <p><?php echo $mobile_app_section["text"] ?></p>
                    </div>

                    <div class="btn-grp">
                        <a href="#" title="Send Global payments" class="btn btn-light-green">Send Global payments</a>
                        <a href="#" title="Open an account" class="btn btn-outline-light-green text-dark">Open an account</a>
                    </div>
                </div>
                <div class="col-xxl-6 order-first order-xxl-last">
                    <?php if (!empty($app_image)): ?>
                        <div class="mobile-app--img">
                            <img src="<?php echo $app_image["url"] ?>"
                                 alt="<?php echo @$app_image["alt"] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>