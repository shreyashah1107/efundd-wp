<?php
$cta_section = get_field("cta_section");
if (isset($cta_section)): ?>
    <!-- Start: Checkout -->
    <section class="checkout">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between justify-content-xxl-start">
                        <div class="col-lg-6 col-xl-5">
                            <div class="subtitle"><?php echo $cta_section["subtitle"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo $cta_section["title"] ?></h3>
                            <p><?php echo $cta_section["text"] ?></p>

                            <div class="btn-grp">
                                <?php if (!empty($cta_section["button_text_1"])): ?>
                                    <a href="<?php echo @$cta_section["button_link_1"] ?>"
                                       title="<?php echo $cta_section["button_text_1"] ?>"
                                       class="btn btn-light-green btn-rd-15"><?php echo $cta_section["button_text_1"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($cta_section["button_text_2"])): ?>
                                    <a href="<?php echo $cta_section["button_link_2"] ?>"
                                       title="<?php echo $cta_section["button_text_2"] ?>"
                                       class="btn btn-light-green btn-rd-15"><?php echo $cta_section["button_text_2"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6 col-xxl-5 offset-xxl-1">
                            <?php if (!empty($cta_section["image"])): ?>
                                <div class="checkout--img">
                                    <img src="<?php echo $cta_section["image"]["url"] ?>"
                                         alt="<?php echo @$cta_section["image"]["alt"] ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Checkout -->
<?php endif; ?>