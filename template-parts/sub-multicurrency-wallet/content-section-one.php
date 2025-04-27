<?php
$first_content_section = get_field("first_content_section");
if ($first_content_section):
    $title = $first_content_section["title"];
    $text = $first_content_section["text"];
    $card_1 = $first_content_section["card_1"];
    $card_2 = $first_content_section["card_2"];
    $card_3 = $first_content_section["card_3"];
    $card_4 = $first_content_section["card_4"];
    ?>
    <section class="multicurrency-wallet-content-section--one">
        <div class="section-bg section-bg--center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/section-center-bg.png"
                 alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8">
                        <div class="title-row text-center">
                            <h4 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h4>
                            <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-2 mt-md-5 mt-lg-0">
                    <div class="col-xxl-9">
                        <div class="currency--items">
                            <?php if ($card_1): ?>
                                <div class="currency--item wow fadeInUp" data-wow-delay="0.1s">
                                    <h4><?php echo $card_1["title"] ?></h4>
                                    <p><?php echo $card_1["title"] ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($card_2): ?>
                                <div class="currency--item wow fadeInUp" data-wow-delay="0.1s">
                                    <h4><?php echo $card_2["title"] ?></h4>
                                    <p><?php echo $card_2["title"] ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($card_3): ?>
                                <div class="currency--item wow fadeInUp" data-wow-delay="0.1s">
                                    <h4><?php echo $card_3["title"] ?></h4>
                                    <p><?php echo $card_3["title"] ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($card_4): ?>
                                <div class="currency--item wow fadeInUp" data-wow-delay="0.1s">
                                    <h4><?php echo $card_4["title"] ?></h4>
                                    <p><?php echo $card_4["title"] ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>