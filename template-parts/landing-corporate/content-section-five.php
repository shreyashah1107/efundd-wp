<?php
$fourth_content_section = get_field("fourth_content_section");
if ($fourth_content_section) {
    $title = $fourth_content_section["title"];
    $primary_button = $fourth_content_section["primary_button"];
    $secondary_button = $fourth_content_section["secondary_button"];
    $cards = $fourth_content_section["cards"];
?>
    <section class="corporate-content-section--five">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="title-row d-flex align-items-md-center justify-content-between flex-column flex-md-row">
                            <h3 class="section-title section-title--xl text-anime-style-3 mb-md-0 w-50"><?php echo $title ?></h3>

                            <div class="btn-grp justify-content-md-start flex-shrink-0">
                                <?php if ($primary_button) { ?>
                                    <a href="<?php echo $primary_button["url"] ?>"
                                        title="<?php echo $primary_button["title"] ?>"
                                        class="btn btn-bright-green wow fadeInUp"
                                        data-wow-delay="0.2s">
                                        <?php echo $primary_button["title"] ?>
                                    </a>
                                <?php } ?>
                                <?php if ($secondary_button) { ?>
                                    <a href="<?php echo $secondary_button["url"] ?>"
                                        title="<?php echo $secondary_button["title"] ?>"
                                        class="btn btn-white wow fadeInUp"
                                        data-wow-delay="0.4s"><?php echo $secondary_button["title"] ?></a>
                                <?php } ?>
                            </div>
                        </div>

                        <?php if ($cards) { ?>
                            <div class="sell--swiper swiper mt-5 pt-5 mt-md-0">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($cards as $card) {
                                        $title = $card["title"];
                                        $text = $card["text"];
                                        $button = $card["button"];
                                        $image = $card["image"];
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="card-sell wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="card-sell--img">
                                                    <?php if ($image) { ?>
                                                        <img src="<?php echo $image["url"] ?>"
                                                            alt="<?php echo @$image["alt"] ?>">
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/sell1.png"
                                                            alt="<?php echo get_the_title() ?>">
                                                    <?php } ?>
                                                </div>
                                                <div class="card-sell--content">
                                                    <h4 class="title"><?php echo $title ?></h4>
                                                    <div class="text"><?php echo $text ?>
                                                    </div>
                                                    <?php if (!empty($button)) { ?>
                                                        <div class="card-sell--cta">
                                                            <a href="<?php echo $button["url"] ?>"
                                                                title="<?php echo $button["title"] ?>"
                                                                class="btn btn-outline-content-link"><?php echo $button["title"] ?></a>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        <?php } ?>

                        <!-- <?php if ($cards) { ?>
                            <div class="row align-items-end mt-5 pt-5 mt-md-0">
                                <?php $l = 1;
                                    foreach ($cards as $card) {
                                        $title = $card["title"];
                                        $text = $card["text"];
                                        $button = $card["button"];
                                        $image = $card["image"];
                                        if ($l == 1) {
                                            $class = "col-lg-4";
                                        } else {
                                            $class = "col-lg-4 mt-5 mt-lg-0";
                                        }
                                ?>
                                    <div class="<?php echo $class ?>">
                                        <div class="card-sell wow fadeInUp" data-wow-delay="0.2s">
                                            <?php if ($l == 2) { ?>
                                                <div class="card-sell--content">
                                                    <h4 class="title"><?php echo $title ?></h4>
                                                    <div class="text"><?php echo $text ?>
                                                    </div>
                                                    <?php if (!empty($button)) { ?>
                                                        <div class="card-sell--cta">
                                                            <a href="<?php echo $button["url"] ?>"
                                                                title="<?php echo $button["title"] ?>"
                                                                class="btn btn-outline-white"><?php echo $button["title"] ?></a>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="card-sell--img">
                                                    <?php if ($image) { ?>
                                                        <img src="<?php echo $image["url"] ?>"
                                                            alt="<?php echo @$image["alt"] ?>">
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/sell1.png"
                                                            alt="<?php echo get_the_title() ?>">
                                                    <?php } ?>
                                                </div>
                                            <?php } else { ?>
                                                <div class="card-sell--img">
                                                    <?php if ($image) { ?>
                                                        <img src="<?php echo $image["url"] ?>"
                                                            alt="<?php echo @$image["alt"] ?>">
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/sell1.png"
                                                            alt="<?php echo get_the_title() ?>">
                                                    <?php } ?>
                                                </div>
                                                <div class="card-sell--content">
                                                    <h4 class="title"><?php echo $title ?></h4>
                                                    <div class="text"><?php echo $text ?>
                                                    </div>
                                                    <?php if (!empty($button)) { ?>
                                                        <div class="card-sell--cta">
                                                            <a href="<?php echo $button["url"] ?>"
                                                                title="<?php echo $button["title"] ?>"
                                                                class="btn btn-outline-white"><?php echo $button["title"] ?></a>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                <?php $l++;
                                    } ?>
                            </div>
                        <?php } ?> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>