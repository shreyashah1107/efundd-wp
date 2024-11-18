<?php
$mobile_app_section = get_field("mobile_app_section");
if (isset($mobile_app_section)):
    $app_image = $mobile_app_section["image"];
    ?>
    <section class="mobile-app">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xxl-5">
                    <h3 class="section-title"><?php echo $mobile_app_section["title"] ?></h3>

                    <?php echo $mobile_app_section["text"] ?>
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