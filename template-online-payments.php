<?php
/**
 * Template Name:Online Payment Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$hero_section = get_field('hero_section');
$features = get_field('features');
$payment_link_section = get_field('payment_link_section');
$checkout_section = get_field('checkout_section');
$components_section = get_field('components_section');
$ebannc_api_section = get_field('ebannc_api_section');
$payment_processing_fees_section = get_field('payment_processing_fees_section');
get_header(); ?>
<?php if (isset($hero_section)): ?>
    <!-- Start: Hero -->
    <section class="hero hero--online-payment">
        <div class="container">
            <!-- Active Page Text: Show < 576px -->
            <div class="d-sm-none text-center">
                <div class="subtitle"><?php echo $hero_section["highlighted_text"] ?></div>
            </div>
            <!-- Active Page Text -->

            <div class="hero--content">
                <div class="row align-items-center justify-content-center justify-content-xl-between">
                    <div class="col-xl-6 col-xxl-6 text-center text-xl-start">
                        <h1><?php echo $hero_section["title"] ?></h1>
                        <p><?php echo $hero_section["text"] ?></p>

                        <div class="email-wrapper">
                            <input type="email" name="emailID" id="emailID" class="form-control"
                                   placeholder="Whats your email">
                            <a href="#" title="Get started" class="btn btn-light-green">Get started</a>
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
    $card_1 = $payment_link_section["card_1"];
    $card_2 = $payment_link_section["card_2"];
    $card_3 = $payment_link_section["card_3"];
    ?>
    <!-- Start: Payment Link -->
    <section class="payment-link">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row">
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
                        <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-5 offset-xxl-1 mt-5 mt-lg-0 pt-5 pt-lg-0">
                            <?php if (isset($card_1)):
                                $icon = $card_1["icon"];
                                ?>
                                <a href="<?php echo @$card_1["link"] ?>" title="<?php echo $card_1["title"] ?>"
                                   class="share-link">
                                    <?php if (!empty($icon)): ?>
                                        <div class="icon">
                                            <img src="<?php echo $icon["url"] ?>" alt="<?php echo @$icon["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="text"><?php echo $card_1["title"] ?></div>
                                </a>
                            <?php endif; ?>
                            <?php if (isset($card_2)):
                                $icon = $card_2["icon"];
                                ?>
                                <div class="card-info">
                                    <?php if (!empty($icon)): ?>
                                        <div class="card-info--img">
                                            <img src="<?php echo $icon["url"] ?>" alt="<?php echo @$icon["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="card-info--content">
                                        <div class="number"><?php echo $card_2["title"] ?></div>
                                        <div class="type"><?php echo $card_2["subtitle"] ?></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($card_3)):
                                $icon = $card_3["icon"];
                                ?>
                                <a href="<?php echo $card_3["link"] ?>" title="Pay £26.40"
                                   class="btn btn-light-green btn-block has-icon">
                                    <?php if (!empty($icon)): ?>
                                        <div class="icon">
                                            <img src="<?php echo $icon["url"] ?>" alt="<?php echo @$icon["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="text"><?php echo $card_3["title"] ?></div>
                                </a>
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
    <section class="checkout">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between justify-content-xxl-start">
                        <div class="col-lg-6 col-xl-5">
                            <?php if (!empty($checkout_section["image"])): ?>
                                <div class="checkout--img">
                                    <img src="<?php echo $checkout_section["image"]["url"] ?>"
                                         alt="<?php echo @$checkout_section["image"]["alt"] ?>">
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-6 col-xl-6 col-xxl-5 offset-xxl-1">
                            <div class="subtitle"><?php echo $checkout_section["highlighted_text"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo $checkout_section["title"] ?></h3>
                            <p><?php echo $checkout_section["text"] ?></p>

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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Checkout -->
<?php endif; ?>
<?php if (isset($components_section)): ?>
    <!-- Start: Components -->
    <section class="components">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row">
                        <div class="col-xl-9 col-xxl-7">
                            <div class="subtitle"><?php echo $components_section["highlighted_text"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo $components_section["title"] ?></h3>
                            <p><?php echo $components_section["text"] ?></p>
                            <div class="btn-grp">
                                <?php if (!empty($payment_link_section["button_text_1"])): ?>
                                    <a href="<?php echo @$payment_link_section["button_link_1"] ?>"
                                       title="<?php echo $payment_link_section["button_text_1"] ?>"
                                       class="btn btn-light-green"><?php echo $payment_link_section["button_text_1"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php if (!empty($components_section["image"])): ?>
                                <div class="components--img">
                                    <img src="<?php echo $components_section["image"]["url"] ?>"
                                         alt="<?php echo @$components_section["image"]["alt"] ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Components -->
<?php endif; ?>
<?php if ($ebannc_api_section):
    $cards = $ebannc_api_section["cards"];
    $image_card = $ebannc_api_section["image_card"];
    ?>
    <!-- Start: Transaction Overview -->
    <section class="transaction-overview ebannc-api">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6">
                    <div class="transaction-overview--grid">
                        <?php if (!empty($cards)): foreach ($cards as $card): ?>
                            <div class="transaction-overview--col">
                                <div class="card-transaction-overview">
                                    <?php if (!empty($card["icon"])): ?>
                                        <div class="flag">
                                            <img src="<?php echo $card["icon"]["url"] ?>"
                                                 alt="<?php echo @$card["icon"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="amount"><?php echo $card["amount"] ?></div>
                                    <div class="currency"><?php echo $card["currency"] ?></div>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                        <?php if (!empty($image_card["image"])): ?>
                            <div class="transaction-overview--col">
                                <div class="transaction-overview--img">
                                    <img src="<?php echo $image_card["image"]["url"] ?>" alt="<?php echo @$image_card["image"]["alt"] ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-7 col-xl-5">
                    <div class="subtitle"><?php echo $ebannc_api_section["highlighted_text"] ?></div>
                    <h3 class="section-title has-bg-gradient"><?php echo $ebannc_api_section["title"] ?></h3>
                    <p><?php echo $ebannc_api_section["text"] ?></p>

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
            </div>
        </div>
    </section>
    <!-- End: Transaction Overview -->
<?php endif; ?>
<?php if(isset($payment_processing_fees_section)):
    $partners = $payment_processing_fees_section["partners"];
    ?>
<!-- Start: Payment Processing -->
<section class="payment-processing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8 col-xxl-6">
                <div class="text-center">
                    <h3 class="section-title"><?php echo $payment_processing_fees_section["title"] ?></h3>
                </div>
                <?php if(isset($partners)): ?>
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
<!-- End: Payment Processing -->
<?php endif; ?>
<?php get_footer(); ?>
