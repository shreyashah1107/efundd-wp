<?php
$saving_on_payment_processing_fees_section = get_field('saving_on_payment_processing_fees_section');
if ($saving_on_payment_processing_fees_section):
?>
<section class="payment-processing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8 col-xxl-6">
                <div class="text-center">
                    <h3 class="section-title"><?php echo $saving_on_payment_processing_fees_section["title"] ?></h3>
                </div>

                <div class="payment-process--items">
                    <a href="<?php echo @$saving_on_payment_processing_fees_section["efundd_fees_url"] ?>" title="EFUNDD Fees" class="payment-process--item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/platform-alt.svg" alt="Icon">
                        </div>
                        <div class="text">EFUNDD Fees</div>
                    </a>
                    <a href="<?php echo @$saving_on_payment_processing_fees_section["api_documents"] ?>" title="API Documents" class="payment-process--item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/platform-alt.svg" alt="Icon">
                        </div>
                        <div class="text">API Documents</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>