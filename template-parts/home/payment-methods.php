<?php
$payment_sections = get_field("payment_sections");
if (isset($payment_sections)):
    ?>
    <section class="payment-methods">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="payment-methods--grid">
                        <?php if (!empty($payment_sections)): foreach ($payment_sections as $payment_section): ?>
                            <div class="payment-methods--col">
                                <div class="payment-methods--col-content">
                                    <div class="title-row">
                                        <?php if (!empty($payment_section["highlighted_text"])): ?>
                                            <div class="subtitle"><?php echo $payment_section["highlighted_text"] ?></div>
                                        <?php endif; ?>
                                        <h3 class="section-title has-bg-gradient"><?php echo $payment_section["title"] ?></h3>
                                        <p><?php echo $payment_section["text"] ?></p>
                                    </div>
                                </div>
                                <div class="payment-methods--col-img">
                                    <?php if (!empty($payment_section["image"])): ?>
                                        <div class="image">
                                            <img src="<?php echo $payment_section["image"]["url"] ?>" alt="<?php echo @$payment_section["image"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>