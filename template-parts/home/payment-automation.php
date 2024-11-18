<?php
$payment_automation_section = get_field("payment_automation_section");
if (isset($payment_automation_section)):
    $features = $payment_automation_section["features"];
    ?>
    <section class="payment-automation">
        <div class="container">
            <div class="title-row text-center">
                <?php if (!empty($payment_automation_section["highlighted_text"])): ?>
                    <div class="subtitle"><?php echo $payment_automation_section["highlighted_text"] ?></div>
                <?php endif; ?>
                <h3 class="section-title has-bg-gradient"><?php echo $payment_automation_section["title"] ?></h3>
                <p><?php echo $payment_automation_section["text"] ?></p>
            </div>
            <?php if (!empty($features)): ?>
                <div class="payment-automation--grid">
                    <?php foreach ($features as $feature):
                        $feature_image = $feature["image"];
                        ?>
                        <div class="payment-automation--col">
                            <?php if (!empty($feature_image)): ?>
                                <div class="payment-automation--col-image">
                                    <img src="<?php echo $feature_image["url"] ?>"
                                         alt="<?php echo @$feature_image["alt"] ?>">
                                </div>
                            <?php endif; ?>
                            <div class="payment-automation--col-content">
                                <h4><?php echo $feature["title"] ?></h4>
                                <p><?php echo $feature["text"] ?></p>
                                <?php if (!empty($feature["button_link"])): ?>
                                    <a href="<?php echo $feature["button_link"] ?>" title="Learn more"
                                       class="btn btn-link">
                                        <span class="text">Learn more</span>
                                        <span class="icon"></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>