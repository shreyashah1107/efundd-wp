<?php
$third_content_section = get_field("third_content_section");
if ($third_content_section) {
    $title = $third_content_section["title"];
    $text = $third_content_section["text"];
    $cards = $third_content_section["cards"];
    ?>
    <section class="business-account">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-10 col-xxl-9">
                        <div class="title-row">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>

                            <p class="mt-4 wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                    <?php if ($cards) { ?>
                        <div class="col-12">
                            <div class="business-account--items">
                                <?php
                                $delay = "0.1";
                                foreach ($cards as $card) {
                                    $image = $card["image"];
                                    $delay = $delay + 0.1;
                                    ?>
                                    <div class="business-account--item wow fadeInUp" data-wow-delay="<?php echo $delay ?>s">
                                        <div class="content">
                                            <h4><?php echo $card["title"] ?></h4>
                                        </div>

                                        <div class="image">
                                            <?php if ($image) { ?>
                                                <img src="<?php echo $image["url"] ?>"
                                                     alt="<?php echo @$image["alt"] ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/business-acc-1.gif"
                                                     alt="<?php echo get_the_title() ?>">
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