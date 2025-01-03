<?php
/**
 * Template Name: Payment Links Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$hero_section = get_field('hero_section');
$features = get_field('features');
$payment_link_section = get_field('payment_link_section');
$checkout_section = get_field('checkout_section');
$payment_link_section_dark = get_field('payment_link_section_dark');
$instant_payment_link_section = get_field('instant_payment_link_section');
get_header(); ?>
<?php if (isset($hero_section)): ?>
    <!-- Start: Hero -->
    <section class="hero hero--online-payment">
        <div class="container">
            <!-- Active Page Text: Show < 576px -->
            <!--            <div class="d-sm-none text-center">-->
            <!--                <div class="subtitle">--><?php //echo $hero_section["highlighted_text"] ?><!--</div>-->
            <!--            </div>-->
            <!-- Active Page Text -->

            <div class="hero--content">
                <div class="row align-items-center justify-content-center justify-content-xl-between">
                    <div class="col-xl-6 col-xxl-6 text-center text-xl-start">
                        <h1><?php echo $hero_section["title"] ?></h1>
                        <p><?php echo $hero_section["text"] ?></p>
                        <div class="btn-grp justify-content-center justify-content-xl-start">
                            <?php if (!empty($hero_section["button_title"])): ?>
                                <a href="<?php echo @$hero_section["button_link"] ?>"
                                   title="<?php echo $hero_section["button_title"] ?>"
                                   class="btn btn-light-green"><?php echo $hero_section["button_title"] ?></a>
                            <?php endif; ?>
                            <?php if (!empty($hero_section["secondary_button_title"])): ?>
                                <a href="<?php echo $hero_section["secondary_button_link"] ?>"
                                   title="<?php echo $hero_section["secondary_button_title"] ?>"
                                   class="btn btn-light-green"><?php echo $hero_section["secondary_button_title"] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-xl-6 col-xxl-5">
                        <div class="hero--img mt-5 mt-xl-0 pt-5 pt-xl-0">
                            <?php if (!empty($hero_section["image"])): ?>
                                <img src="<?php echo $hero_section["image"]["url"] ?>"
                                     alt="<?php echo @$hero_section["image"]["alt"] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Hero -->
<?php endif; ?>
<?php if (isset($features)):

    ?>
    <!-- Start: Features -->
    <section class="features">
        <div class="container">
            <div class="security-text--grid">
                <?php foreach ($features as $feature): ?>
                    <div class="security-text--col">
                        <?php if (!empty($feature["icon"])): ?>
                            <div class="security-icon">
                                <img src="<?php echo $feature["icon"]["url"] ?>"
                                     alt="<?php echo @$feature["icon"]["alt"] ?>">
                            </div>
                        <?php endif; ?>
                        <div class="security-content">
                            <h4><?php echo $feature["title"] ?></h4>
                            <p><?php echo $feature["text"] ?>.</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End: Features -->
<?php endif; ?>
<?php if (isset($payment_link_section)):
    ?>
    <!-- Start: Payment Link -->
    <section class="payment-link">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center">
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
                        <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-5 offset-xxl-1 mb-5 mb-xl-0 pb-5 pb-lg-0 order-first order-xl-last">
                            <?php if (!empty($payment_link_section["image"])): ?>
                                <div>
                                    <img src="<?php echo $payment_link_section["image"]["url"] ?>"
                                         alt="<?php echo @$payment_link_section["image"]["alt"] ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Payment Link -->
<?php endif; ?>

<?php if (isset($checkout_section)): ?>
    <!-- Start: Checkout -->
    <section class="worldwide-payments bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-xxl-5 mb-5 mb-xl-0">
                            <div class="modular-solutions--img text-lg-center">
                                <img src="<?php echo @$checkout_section["image"]["url"] ?>"
                                     alt="<?php echo @$checkout_section["image"]["alt"] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="subtitle"><?php echo $checkout_section["highlighted_text"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo $checkout_section["title"] ?></h3>
                            <p><?php echo $checkout_section["text"] ?></p>
                            <div class="btn-grp">
                                <?php if (!empty($checkout_section["button_title"])): ?>
                                    <a href="<?php echo @$checkout_section["button_link"] ?>"
                                       title="<?php echo $checkout_section["button_title"] ?>"
                                       class="btn btn-light-green"><?php echo $checkout_section["button_title"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($checkout_section["secondary_button_title"])): ?>
                                    <a href="<?php echo $checkout_section["secondary_button_link"] ?>"
                                       title="<?php echo $checkout_section["secondary_button_title"] ?>"
                                       class="btn btn-light-green"><?php echo $checkout_section["secondary_button_title"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Checkout -->
<?php endif; ?>
<?php if (isset($payment_link_section_dark)): ?>
    <!-- Start: Instant Payment Link -->
    <section class="worldwide-payments instant-payment-link">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8">
                            <div class="subtitle"><?php echo @$payment_link_section_dark["highlighted_text"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo @$payment_link_section_dark["title"] ?></h3>
                            <p><?php echo @$payment_link_section_dark["text"] ?></p>
                            <?php if ($payment_link_section_dark["button_text_1"]): ?>
                                <div class="btn-grp">
                                    <a href="<?php echo @$payment_link_section_dark["button_link_1"] ?>"
                                       title="<?php echo $payment_link_section_dark["button_text_1"] ?>"
                                       class="btn btn-light-green"><?php echo $payment_link_section_dark["button_text_1"] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-xl-12 col-xxl-12 order-first order-xl-last mb-5 pb-5 mb-xl-0 pb-xl-0 mt-xl-5 pt-xl-5">
                            <div class="text-lg-center">
                                <?php if ($payment_link_section_dark["image"]): ?>
                                    <img src="<?php echo $payment_link_section_dark["image"]["url"] ?>"
                                         alt="<?php echo @$payment_link_section_dark["image"]["alt"] ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start: Instant Payment Link -->
<?php endif; ?>
<?php if (isset($instant_payment_link_section)): ?>
    <!-- Start: Checkout -->
    <section class="worldwide-payments bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-xxl-5 mb-5 mb-xl-0">
                            <div class="modular-solutions--img text-lg-center">
                                <img src="<?php echo @$instant_payment_link_section["image"]["url"] ?>"
                                     alt="<?php echo @$instant_payment_link_section["image"]["alt"] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="subtitle"><?php echo $instant_payment_link_section["highlighted_text"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo $instant_payment_link_section["title"] ?></h3>
                            <p><?php echo $instant_payment_link_section["text"] ?></p>
                            <div class="btn-grp">
                                <?php if (!empty($instant_payment_link_section["button_title"])): ?>
                                    <a href="<?php echo @$instant_payment_link_section["button_link"] ?>"
                                       title="<?php echo $instant_payment_link_section["button_title"] ?>"
                                       class="btn btn-light-green"><?php echo $instant_payment_link_section["button_title"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($instant_payment_link_section["secondary_button_title"])): ?>
                                    <a href="<?php echo $instant_payment_link_section["secondary_button_link"] ?>"
                                       title="<?php echo $instant_payment_link_section["secondary_button_title"] ?>"
                                       class="btn btn-light-green"><?php echo $instant_payment_link_section["secondary_button_title"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Checkout -->
<?php endif; ?>
<?php get_footer(); ?>
