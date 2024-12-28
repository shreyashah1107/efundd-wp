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
                    <p>Accept online, payments in person, or over the phone payments and let your clients pay anytime, anyway. Work with single Payment Solutions provider to accept, process, settle and payout your card payments.</p>
                </div>

                <div class="payment-process--items d-block">
                    <div class="btn-grp justify-content-center">
                        <a href="#" title="Get a quote" class="btn btn-light-green">Get a quote</a>
                        <a href="#" title="Learn more" class="btn btn-outline-light-green text-dark">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>