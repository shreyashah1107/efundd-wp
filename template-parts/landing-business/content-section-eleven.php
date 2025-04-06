<?php
$eleventh_content_section = get_field("eleventh_content_section");
if ($eleventh_content_section) {
    $title = $eleventh_content_section["title"];
    $cards = $eleventh_content_section["cards"];
    ?>
    <section class="business-content-section--eleven">
        <div class="content--img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/shield-lock.svg"
                 alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="content--items">
                            <div class="content--item">
                                <h3 class="text-anime-style-3"><?php echo $title ?></h3>
                            </div>
                            <?php if ($cards) {

                                $delay = "0.1";
                                foreach ($cards as $card) {
                                    $image = $card["icon"];
                                    $title = $card["title"];
                                    $text = $card["text"];
                                    $delay = $delay + 0.1;

                                    ?>
                                    <div class="content--item wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                                        <div class="icon">
                                            <?php if ($image) { ?>
                                                <img src="<?php echo $image["url"] ?>"
                                                     alt="<?php echo @$image["alt"] ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/bank-1.svg"
                                                     alt="<?php echo get_the_title() ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="text">
                                            <h4><?php echo $title ?></h4>
                                            <p><?php echo $text ?></p>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>