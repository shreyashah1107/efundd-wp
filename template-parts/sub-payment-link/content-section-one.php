<?php
$first_content_section = get_field("first_content_section");
if ($first_content_section):
    $title = $first_content_section["title"];
    $card_1 = $first_content_section["card_1"];
    $card_2 = $first_content_section["card_2"];
    $card_3 = $first_content_section["card_3"];
    ?>
    <section class="payment-link-content-section--one">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="title-row text-center">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                        </div>

                        <div class="feature-cards pt-5 pt-lg-0 pt-xl-5">
                            <?php if ($card_1): ?>
                                <div class="feature-card wow fadeInUp" data-wow-delay="0.1s">
                                    <?php if ($card_1["icon"]): ?>
                                    <div class="feature-card__icon">
                                        <img src="<?php echo $card_1["icon"]["url"] ?>"
                                             alt="<?php echo @$card_1["icon"]["alt"] ?>">
                                    </div>
                                    <?php endif; ?>
                                    <h4 class="feature-card__title"><?php echo $card_1["title"] ?></h4>
                                    <p class="feature-card__text"><?php echo $card_1["text"] ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($card_2): ?>
                                <div class="feature-card wow fadeInUp" data-wow-delay="0.2s">
                                    <?php if ($card_2["icon"]): ?>
                                        <div class="feature-card__icon">
                                            <img src="<?php echo $card_2["icon"]["url"] ?>"
                                                 alt="<?php echo @$card_2["icon"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <h4 class="feature-card__title"><?php echo $card_2["title"] ?></h4>
                                    <p class="feature-card__text"><?php echo $card_2["text"] ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($card_3): ?>
                                <div class="feature-card wow fadeInUp" data-wow-delay="0.3s">
                                    <?php if ($card_3["icon"]): ?>
                                        <div class="feature-card__icon">
                                            <img src="<?php echo $card_3["icon"]["url"] ?>"
                                                 alt="<?php echo @$card_3["icon"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <h4 class="feature-card__title"><?php echo $card_3["title"] ?></h4>
                                    <p class="feature-card__text"><?php echo $card_3["text"] ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>