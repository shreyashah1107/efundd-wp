<?php

/**
 * Template Name: Open Banking Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$hero_section = get_field('hero_section');
$cards = get_field('cards');
$payment_link_section = get_field('payment_link_section');
$checkout_section = get_field('checkout_section');
$payment_link_section_dark = get_field('payment_link_section_dark');
$open_banking_integration = get_field('open_banking_integration');
get_header(); ?>
<?php if (isset($hero_section)): ?>
    <!-- Start: Hero -->
    <section class="hero hero--online-payment">
        <div class="container">
            <!-- Active Page Text: Show < 576px -->
            <!--            <div class="d-sm-none text-center">-->
            <!--                <div class="subtitle">--><?php //echo $hero_section["highlighted_text"] 
            ?><!--</div>-->
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
                                   class="btn btn-outline-light-green"><?php echo $hero_section["secondary_button_title"] ?></a>
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
<?php if (!empty($cards)): ?>
    <!-- Start: Why Choose Us -->
    <section class="why-choose-us">
        <div class="container">
            <div class="why-choose-us--swiper swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($cards as $card): ?>
                    <div class="swiper-slide">
                        <div class="card-why-us">
                            <div class="card-why-us--icon">
                                <img src="<?php echo @$card["icon"]["url"] ?>"
                                     alt="<?php echo @$card["icon"]["alt"] ?>">
                            </div>
                            <div class="card-why-us--title"><?php echo $card["title"] ?></div>
                            <div class="card-why-us--text"><?php echo $card["text"] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Why Choose Us -->
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
                                <?php if (!empty($checkout_section["image"])): ?>
                                    <img src="<?php echo @$checkout_section["image"]["url"] ?>"
                                         alt="<?php echo @$checkout_section["image"]["alt"] ?>">
                                <?php endif; ?>
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
                        <div class="col-xl-4 order-first order-xl-last mb-5 mb-xl-0">
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
<?php
if ($open_banking_integration):
    $links = $open_banking_integration["links"];
    ?>
    <section class="payment-processing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8 col-xxl-6">
                    <div class="text-center">
                        <h3 class="section-title"><?php echo $open_banking_integration["title"] ?></h3>
                    </div>
                    <?php if (!empty($links)): ?>
                        <div class="payment-process--items">
                            <?php foreach ($links as $link): ?>
                                <a href="<?php echo @$link["url"] ?>"
                                   title="<?php echo @$link["text"] ?>" class="payment-process--item">
                                    <div class="icon">
                                        <?php if (!empty($link["icon"])): ?>
                                            <img src="<?php echo @$link["icon"]["url "] ?>"
                                                 alt="<?php echo @$link["icon"]["alt"] ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="text"><?php echo @$link["text"] ?></div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>