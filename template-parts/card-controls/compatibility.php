<?php
$checkout_section = get_field('checkout_section');
if ($checkout_section):
    ?>
    <section class="worldwide-payments bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-5 mb-5 mb-xl-0 pb-5 pb-lg-0">
                            <div>
                                <?php if ($checkout_section["image"]): ?>
                                    <img src="<?php echo $checkout_section["image"]["url"] ?>"
                                         alt="<?php echo @$checkout_section["image"]["alt"] ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-6 col-xxl-6">
                            <div class="title-row">
                                <div class="subtitle"><?php echo @$checkout_section["highlighted_text"] ?></div>
                                <h3 class="section-title has-bg-gradient"><?php echo @$checkout_section["title"] ?></h3>
                                <p><?php echo @$checkout_section["text"] ?></p>

                                <div class="btn-grp">
                                    <?php if ($checkout_section["button_title"]): ?>
                                        <a href="<?php echo @$checkout_section["button_link"] ?>"
                                           title="<?php echo $checkout_section["button_title"] ?>"
                                           class="btn btn-light-green"><?php echo $checkout_section["button_title"] ?></a>
                                    <?php endif; ?>
                                    <?php if ($checkout_section["secondary_button_title"]): ?>
                                        <a href="<?php echo @$checkout_section["secondary_button_link"] ?>"
                                           title="<?php echo $checkout_section["secondary_button_title"] ?>"
                                           class="btn btn-light-green"><?php echo $checkout_section["secondary_button_title"] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>