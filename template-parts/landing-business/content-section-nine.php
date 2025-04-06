<?php
$ninth_content_section = get_field("ninth_content_section");
if ($ninth_content_section) {
    $title = $ninth_content_section["title"];
    $text = $ninth_content_section["text"];
    $cards = $ninth_content_section["cards"];
    ?>
    <section class="business-content-section--nine">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-xxl-9">
                        <div class="title-row text-center mb-5">
                            <h3 class="section-title section-title--xl text-white text-anime-style-3"><?php echo $title ?></h3>
                            <p class="mt-4 wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                    <?php if ($cards) { ?>
                        <div class="col-12">
                            <div class="financial-management--items">
                                <?php
                                $delay = "0.1";
                                foreach ($cards as $card) {
                                    $image = $card["icon"];
                                    $title = $card["title"];
                                    $text = $card["text"];
                                    $button = $card["button"];
                                    $delay = $delay + 0.1;
                                    ?>
                                    <div class="financial-management--item wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                                        <div class="icon">
                                            <?php if ($image) { ?>
                                                <img src="<?php echo $image["url"] ?>"
                                                     alt="<?php echo @$image["alt"] ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/finance-1.svg"
                                                     alt="<?php echo get_the_title() ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="content">
                                            <div class="content-text">
                                                <h4><?php echo $title ?></h4>
                                                <p><?php echo $text ?></p>
                                            </div>
                                            <?php if ($button) { ?>
                                                <div class="content-cta">
                                                    <a href="<?php echo @$button["url"] ?>"
                                                       title="<?php echo $button["title"] ?>"
                                                       class="btn btn-outline-bright-green"><?php echo $button["title"] ?></a>
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