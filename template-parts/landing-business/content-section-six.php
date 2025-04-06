<?php
$seventh_content_section = get_field("seventh_content_section");
if ($seventh_content_section) {
    $title = $seventh_content_section["title"];
    $text = $seventh_content_section["text"];
    $cards = $seventh_content_section["cards"];
    ?>
    <section class="business-content-section--six">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-10 col-xxl-8">
                        <div class="title-row mb-5">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                            <p class=" wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                    <?php if ($cards) { ?>
                        <div class="col-12">
                            <div class="payment-options--items">
                                <?php
                                $delay = "0.1";
                                foreach ($cards as $card) {
                                    $image = $card["image"];
                                    $title = $card["title"];
                                    $text = $card["text"];
                                    $button = $card["button"];
                                    $delay = $delay + 0.1;
                                    ?>
                                    <div class="payment-options--item wow fadeInUp"
                                         data-wow-delay="<?php echo $delay ?>s">
                                        <div class="image">
                                            <?php if ($image) { ?>
                                                <img src="<?php echo $image["url"] ?>"
                                                     alt="<?php echo @$image["alt"] ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/payment-1.png"
                                                     alt="<?php echo get_the_title() ?>">
                                            <?php } ?>
                                        </div>

                                        <div class="content">
                                            <h4><?php echo $title ?></h4>
                                            <p><?php echo $text ?></p>
                                            <?php if ($button) { ?>
                                                <div>
                                                    <a href="<?php echo $button["url"] ?>"
                                                       title="<?php echo $button["title"] ?>"
                                                       class="btn btn-white btn-block"><?php echo $button["title"] ?></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>