<?php
$fifth_content_section = get_field("fifth_content_section");
if ($fifth_content_section):
    $title = $fifth_content_section["title"];
    $text = $fifth_content_section["text"];
    $card_1 = $fifth_content_section["card_1"];
    $card_2 = $fifth_content_section["card_2"];
    $card_3 = $fifth_content_section["card_3"];
    ?>
    <section class="payment-link-content-section--five">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-xxl-11">
                                <div class="title-row text-center">
                                    <h3 class="section-title section-title--xl mb-5 text-anime-style-3"><?php echo $title ?></h3>
                                    <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="payment-cards pt-5 pt-lg-0 pt-xl-5">
                            <?php if ($card_1):
                                $image = $card_1["image"];
                                ?>
                                <div class="payment-card wow fadeInUp" data-wow-delay="0.1s">
                                    <h4 class="payment-card__title"><?php echo $card_1["title"] ?></h4>
                                    <div class="payment-card__img">
                                        <?php if ($image): ?>
                                            <img src="<?php echo $image["url"] ?>"
                                                 alt="<?php echo @$image["alt"] ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($card_2):
                                $image = $card_2["image"];
                                ?>
                                <div class="payment-card wow fadeInUp" data-wow-delay="0.2s">
                                    <h4 class="payment-card__title"><?php echo $card_2["title"] ?></h4>
                                    <div class="payment-card__img">
                                        <?php if ($image): ?>
                                            <img src="<?php echo $image["url"] ?>"
                                                 alt="<?php echo @$image["alt"] ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($card_3):
                                $image = $card_3["image"];
                                ?>
                                <div class="payment-card wow fadeInUp" data-wow-delay="0.3s">
                                    <h4 class="payment-card__title"><?php echo $card_2["title"] ?></h4>
                                    <div class="payment-card__img">
                                        <?php if ($image): ?>
                                            <img src="<?php echo $image["url"] ?>"
                                                 alt="<?php echo @$image["alt"] ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>