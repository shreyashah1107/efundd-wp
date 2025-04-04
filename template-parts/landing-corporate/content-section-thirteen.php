<?php
$payment_methods_section = get_field('payment_methods_section');
if ($payment_methods_section) {
    $title = $payment_methods_section['title'];
    $text = $payment_methods_section['text'];
    $payment_methods = $payment_methods_section['payment_methods'];
    ?>
    <section class="corporate-content-section--thirteen">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9 col-xxl-8">
                        <div class="title-row">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>

                            <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                </div>
                <?php if ($payment_methods) { ?>
                    <div class="row mt-5 mt-lg-0">
                        <div class="col-12">
                            <div class="partner--swiper swiper">
                                <div class="swiper-wrapper wow fadeIn" data-wow-delay="0.1s">
                                    <?php foreach ($payment_methods as $payment_method) { ?>
                                        <div class=" swiper-slide">
                                            <div class="image">
                                                <img src="<?php echo $payment_method["image"]["url"] ?>"
                                                     alt="<?php echo @$payment_method["image"]["alt"] ?>">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>