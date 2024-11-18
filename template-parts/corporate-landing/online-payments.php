<?php
$online_payments_section = get_field('online_payments_section');
if (isset($online_payments_section)):
    $card_section = $online_payments_section["card_section"];
    $flag = $card_section["flag"];
    ?>
    <section class="online-payments">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-5 mb-5 mb-lg-0 pb-5 pb-lg-0">
                    <?php if (isset($card_section)): ?>
                        <div class="payment-conversion">
                            <div class="payment-conversion--top">
                                <div class="payment-conversion--top-card">
                                    <div class="payment-conversion--top-card-header">
                                        <div class="subtext"><?php echo $card_section["subtext"] ?></div>
                                        <div class="amount"><?php echo $card_section["amount"] ?></div>
                                    </div>
                                    <div class="payment-conversion--top-card-footer">
                                        <div class="payment-conversion--top-card-footer-left">
                                            <?php if (!empty($flag)): ?>
                                                <div class="flag">
                                                    <img src="<?php echo $flag["url"] ?>"
                                                         alt="<?php echo @$flag["alt"] ?>">
                                                </div>
                                            <?php endif; ?>
                                            <div class="currency"><?php echo $card_section["currency"] ?></div>
                                        </div>
                                        <div class="payment-conversion--top-card-footer-right">
                                            <div class="date"><?php echo $card_section["date"] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-conversion--bottom">
                                <div class="currency-conversion">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/other/currency-conversion.png"
                                         alt="Conversion">
                                </div>
                                <p><?php echo $card_section["currency_conversion_text"] ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-7 col-xl-6 col-xxl-5 offset-xxl-1">
                    <div class="title-row">
                        <div class="subtitle"><?php echo $online_payments_section["highlighted_text"] ?></div>
                        <h3 class="section-title"><?php echo $online_payments_section["title"] ?></h3>
                        <p><?php echo $online_payments_section["text"] ?></p>
                    </div>
                    <div class="btn-grp">
                        <a href="<?php echo $online_payments_section["button_link_1"] ?>"
                           title="<?php echo $online_payments_section["button_text_1"] ?>"
                           class="btn btn-light-green"><?php echo $online_payments_section["button_text_1"] ?></a>
                        <a href="<?php echo $online_payments_section["button_link_2"] ?>"
                           title="<?php echo $online_payments_section["button_text_2"] ?>"
                           class="btn btn-light-green"><?php echo $online_payments_section["button_text_2"] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>