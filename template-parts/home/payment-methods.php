<?php
$payment_sections = get_field("payment_sections");
if (isset($payment_sections)):
    ?>
    <section class="payment-methods">
        <div class="container">
            <div class="payment-methods--grid">
                <?php if (!empty($payment_sections)): foreach ($payment_sections as $payment_section): ?>
                <div class="row align-items-center justify-content-between">
                    <div class="col-xxl-7">
                        <div class="title-row">
                            <?php if (!empty($payment_section["highlighted_text"])): ?>
                                <div class="subtitle"><?php echo $payment_section["highlighted_text"] ?></div>
                            <?php endif; ?>
                            <h3 class="section-title section-title--xl text-uppercase"><?php echo $payment_section["title"] ?></h3>
                            <p><?php echo $payment_section["text"] ?></p>
                        </div>
                        <div class="btn-grp mt-4">
                            <a href="#" title="Explore Cards" class="btn btn-light-green px-5">Explore Cards</a>
                        </div>
                    </div>
                    <div class="col-xxl-5 order-first order-xxl-last">
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
    </section>
<?php endif; ?>