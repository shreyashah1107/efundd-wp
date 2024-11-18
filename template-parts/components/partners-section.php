<?php
$payment_processing_fees_section = get_field('payment_processing_fees_section');
?>
<?php if (isset($payment_processing_fees_section)):
    $partners = $payment_processing_fees_section["partners"];
?>
    <section class="payment-processing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8 col-xxl-6">
                    <div class="text-center">
                        <h3 class="section-title"><?php echo $payment_processing_fees_section["title"] ?></h3>
                        <p><?php echo $payment_processing_fees_section["text"] ?></p>
                    </div>
                    <?php if (isset($partners)): ?>
                        <div class="payment-process--items">
                            <?php foreach ($partners as $partner): ?>
                                <a href="<?php echo $partner["link"] ?>" title="<?php echo $partner["text"] ?>" class="payment-process--item">
                                    <?php if (!empty($partner["image"])): ?>
                                        <div class="icon">
                                            <img src="<?php echo $partner["image"]["url"] ?>" alt="<?php echo @$partner["image"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="text"><?php echo $partner["text"] ?></div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>