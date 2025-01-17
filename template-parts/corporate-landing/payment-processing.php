<?php
$saving_on_payment_processing_fees_section = get_field('saving_on_payment_processing_fees_section');
if ($saving_on_payment_processing_fees_section):
?>
<section class="payment-processing pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xxl-8">
                <div class="title-row text-center">
                    <h3 class="section-title section-title--xl"><?php echo $saving_on_payment_processing_fees_section["title"] ?></h3>
                    <p><?php echo $saving_on_payment_processing_fees_section["text"] ?></p>
                </div>

                <div class="payment-process--items d-block">
                    <div class="btn-grp justify-content-center">
                        <?php if (!empty($in_person_payment_section["button_text_1"])): ?>
                            <a href="<?php echo @$in_person_payment_section["button_link_1"] ?>"
                               title="<?php echo $in_person_payment_section["button_text_1"] ?>"
                               class="btn btn-light-green"><?php echo $in_person_payment_section["button_text_1"] ?></a>
                        <?php endif; ?>
                        <?php if (!empty($in_person_payment_section["button_text_2"])): ?>
                            <a href="<?php echo $in_person_payment_section["button_link_2"] ?>"
                               title="<?php echo $in_person_payment_section["button_text_2"] ?>"
                               class="btn btn-outline-light-green text-dark"><?php echo $in_person_payment_section["button_text_2"] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>