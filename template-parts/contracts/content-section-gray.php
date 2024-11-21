<?php
$payment_link_section = get_field('payment_link_section');
if (isset($payment_link_section)):
    ?>
    <!-- Start: Payment Link -->
    <section class="payment-link">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-5 mb-5 mb-xl-0 pb-5 pb-lg-0">
                            <?php if (!empty($payment_link_section["image"])): ?>
                                <div>
                                    <img src="<?php echo $payment_link_section["image"]["url"] ?>"
                                         alt="<?php echo @$payment_link_section["image"]["alt"] ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-7 col-xl-6 col-xxl-6">
                            <div class="title-row">
                                <div class="subtitle"><?php echo $payment_link_section["highlighted_text"] ?></div>
                                <h3 class="section-title has-bg-gradient"><?php echo $payment_link_section["title"] ?></h3>
                                <p><?php echo $payment_link_section["text"] ?></p>
                            </div>
                            <div class="btn-grp">
                                <?php if (!empty($payment_link_section["button_text_1"])): ?>
                                    <a href="<?php echo @$payment_link_section["button_link_1"] ?>"
                                       title="<?php echo $payment_link_section["button_text_1"] ?>"
                                       class="btn btn-light-green"><?php echo $payment_link_section["button_text_1"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($payment_link_section["button_text_2"])): ?>
                                    <a href="<?php echo $payment_link_section["button_link_2"] ?>"
                                       title="<?php echo $payment_link_section["button_text_2"] ?>"
                                       class="btn btn-light-green"><?php echo $payment_link_section["button_text_2"] ?></a>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Payment Link -->
<?php endif; ?>