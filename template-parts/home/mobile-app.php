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
                        <div class="subtitle"><?php echo $mobile_app_section["highlighted_text"] ?></div>
                        <h3 class="section-title section-title--xl has-bg-gradient"><?php echo $mobile_app_section["title"] ?></h3>

                        <p><?php echo $mobile_app_section["text"] ?></p>
                    </div>

                    <div class="btn-grp">
                        <?php if (!empty($mobile_app_section["button_text_1"])): ?>
                            <a href="<?php echo @$mobile_app_section["button_link_1"] ?>"
                               title="<?php echo $mobile_app_section["button_text_1"] ?>"
                               class="btn btn-light-green"><?php echo $mobile_app_section["button_text_1"] ?></a>
                        <?php endif; ?>
                        <?php if (!empty($mobile_app_section["button_text_2"])): ?>
                            <a href="<?php echo $mobile_app_section["button_link_2"] ?>"
                               title="<?php echo $mobile_app_section["button_text_2"] ?>"
                               class="btn btn-outline-light-green text-dark"><?php echo $mobile_app_section["button_text_2"] ?></a>
                        <?php endif; ?>
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