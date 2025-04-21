<?php
$eight_content_section = get_field('eight_content_section');
if (!empty($eight_content_section)) {
    $title = $eight_content_section["title"];
    $text = $eight_content_section["text"];
    $currencies = $eight_content_section["currencies"];
    $payment_methods = $eight_content_section["payment_methods"];
    $supported_countries = $eight_content_section["supported_countries"];
?>
    <section class="corporate-content-section--ten">
        <div class="section-bg section-bg--center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/section-center-bg.png"
                alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-xxl-6">
                    <div class="title-row">
                        <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>

                        <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                    </div>
                </div>
            </div>

            <div class="mt-5 mt-lg-0">
                <?php if (!empty($currencies)) { ?>
                    <div class="flags-row flags-row--one">
                        <?php foreach ($currencies as $currency) { ?>
                            <div class="image">
                                <img src="<?php echo wp_get_attachment_image_url($currency) ?>"
                                    alt="<?php echo @$currency["alt"] ?>">
                            </div>
                        <?php } ?>

                        <div>
                            <img class="title-text"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/40+Currencies.svg"
                                alt="Image">
                        </div>
                    </div>
                <?php } ?>
                <?php if (!empty($payment_methods)) { ?>
                    <div class="flags-row flags-row--two my-lg-5 py-5">
                        <div>
                            <img class="title-text"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/28+PaymentMethods.svg"
                                alt="Image">
                        </div>
                        <?php foreach ($payment_methods as $payment_method) { ?>
                            <div class="image">
                                <img src="<?php echo wp_get_attachment_image_url($payment_method) ?>"
                                    alt="<?php echo @$payment_method["alt"] ?>">
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if (!empty($supported_countries)) { ?>
                    <div class="flags-row flags-row--three">
                        <?php foreach ($supported_countries as $supported_country) { ?>
                            <div class="image">
                                <img src="<?php echo wp_get_attachment_image_url($supported_country) ?>"
                                    alt="<?php echo @$supported_country["alt"] ?>">
                            </div>
                        <?php } ?>
                        <div>
                            <img class="title-text"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/140+SupportedCountries.svg"
                                alt="Image">
                        </div>
                    </div>
                <?php } ?>
            </div>
    </section>
<?php } ?>