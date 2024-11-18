<?php
/**
 * Template Name: in-person Payments Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header('light-in-person');
$defaultImage = get_stylesheet_directory_uri() . "/assets/default-thumbnail.jpg";
$hero_section = get_field("hero_section");
$qualities_section = get_field("qualities_section");
$charges_section = get_field("charges_section");
$pricing_plans_section = get_field("pricing_plans_section");
$payments_section = get_field("payments_section");
$cta_section = get_field("cta_section");
?>
<?php if (isset($hero_section)):

    ?>
    <!-- Start: Hero -->
    <section class="hero hero--in-person-payment">
        <div class="container">
            <!-- Active Page Text: Show < 576px -->
            <div class="d-sm-none text-center">
                <div class="subtitle"><?php echo $hero_section["subtitle"] ?></div>
            </div>
            <!-- Active Page Text -->

            <div class="hero--content">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-10 col-xxl-7">
                        <h1><?php echo $hero_section["title"] ?></h1>
                        <?php if (!empty($hero_section['image'])): ?>
                            <div class="hero--img">
                                <img src="<?php echo $hero_section["image"]["url"] ?>"
                                     alt="<?php echo @$hero_section["image"]["alt"] ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Hero -->
<?php endif; ?>
<?php if (isset($qualities_section)):
    $qualities = $qualities_section["qualities"];
    ?>
    <!-- Start: Card reader qualities -->
    <section class="card-reader-qualities">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-10 col-xxl-7">
                    <h4><?php echo $qualities_section["text"] ?></h4>
                </div>
            </div>

            <div class="qualities--content">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6">
                        <?php if (!empty($qualities_section["image"])): ?>
                            <div class="image">
                                <img src="<?php echo $qualities_section["image"]["url"] ?>"
                                     alt="<?php echo @$qualities_section["image"]["alt"] ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-5 offset-xl-1 mt-5 mt-xl-0">
                        <?php if (isset($qualities)): ?>
                            <div class="qualities--content-list">
                                <?php foreach ($qualities as $quality): ?>
                                    <div class="item">
                                        <div class="title"><?php echo $quality["title"] ?></div>
                                        <div class="text"><?php echo $quality["text"] ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Card reader qualities -->
<?php endif; ?>
<?php if (isset($charges_section)):
    $charges = $charges_section["charges"];
    ?>
    <!-- Start: Charges -->
    <section class="charges">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-6">
                    <h3 class="section-title has-bg-gradient"><?php echo $charges_section["title"] ?></h3>
                    <p><?php echo $charges_section["text"] ?></p>
                </div>
            </div>
            <?php if (isset($charges)): ?>
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="charges--grid">
                            <?php foreach ($charges as $charge): ?>
                                <div class="charges--col">
                                    <?php if (!empty($charge["image"])): ?>
                                        <div class="icon">
                                            <img src="<?php echo $charge["image"]["url"] ?>"
                                                 alt="<?php echo @$charge["image"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="title"><?php echo $charge["title"] ?></div>
                                    <div class="text"><?php echo $charge["text"] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End: Charges -->
<?php endif; ?>
<?php if (isset($pricing_plans_section)):
    $plans = $pricing_plans_section["plans"];
    ?>
    <!-- Start: Choose card reader -->
    <section class="choose-card-reader">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="section-title has-bg-gradient"><?php echo $pricing_plans_section["title"] ?></h3>
                    </div>
                    <?php if (isset($plans)): ?>
                        <div class="choose-card-reader-grid">
                            <?php foreach ($plans as $plan): ?>
                                <div class="choose-card-reader--col">
                                    <div class="card card-choose-card-reader">
                                        <div>
                                            <?php if (!empty($plan["image"])): ?>
                                                <div class="card-img">
                                                    <img class="card-img-top" src="<?php echo $plan["image"]["url"] ?>"
                                                         alt="<?php echo @$plan["image"]["alt"] ?>">
                                                </div>
                                            <?php endif; ?>

                                            <div class="card-header">
                                                <div class="card-title"><?php echo $plan["title"] ?></div>
                                                <div class="price"><?php echo $plan["amount"] ?></div>
                                                <a href="<?php echo @$plan["button_link"] ?>" title="Order now"
                                                   class="btn btn-block btn-light-green">Order
                                                    now</a>
                                            </div>
                                            <div class="card-body">
                                                <?php echo $plan["text"] ?>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <a href="<?php echo @$plan["button_link"] ?>" title="Learn more"
                                               class="btn btn-link">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Choose card reader -->
<?php endif; ?>
<?php if (isset($cta_section)): ?>
    <!-- Start: Find Product -->
    <section class="find-product">
        <div class="container">
            <div class="text-center">
                <h3 class="section-title has-bg-gradient"><?php echo $cta_section["title"] ?></h3>
                <p><?php echo $cta_section["text"] ?></p>
                <?php if (!empty($cta_section["button_text"])): ?>
                    <div class="btn-grp justify-content-center mt-5">
                        <a href="<?php echo @$cta_section["button_link"] ?>"
                           title="<?php echo $cta_section["button_text"] ?>"
                           class="btn btn-light-green"><?php echo $cta_section["button_text"] ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- End: Find Product -->
<?php endif; ?>
<?php if (isset($payments_section)):
    $cards = $payments_section["cards"];
    ?>
    <!-- Start: Transaction Overview Wrapper -->
    <section class="transaction-overview--wrapper">
        <div class="container">
            <div class="transaction-overview">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-7 col-xl-5">
                                <h3 class="section-title"><?php echo $payments_section["title"] ?></h3>
                                <p><?php echo $payments_section["text"] ?></p>
                                <?php if (!empty($payments_section["button_text"])): ?>
                                    <div class="btn-grp">
                                        <a href="<?php echo $payments_section["button_link"] ?>"
                                           title="<?php echo $payments_section["button_text"] ?>"
                                           class="btn btn-light-green"><?php echo $payments_section["button_text"] ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-xl-6">
                                <?php if (isset($cards)): ?>
                                    <div class="transaction-overview--grid">
                                        <?php foreach ($cards as $card): ?>
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
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Transaction Overview Wrapper -->
<?php endif; ?>


<?php
get_footer();
?>