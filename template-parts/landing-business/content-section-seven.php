<?php
$eight_content_section = get_field("eight_content_section");
if ($eight_content_section) {
    $title = $eight_content_section["title"];
    $cards = $eight_content_section["cards"];
    ?>
    <section class="business-content-section--seven">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center mb-md-5">
                    <div class="col-xxl-8">
                        <div class="title-row mb-5">
                            <h3 class="section-title section-title--xl text-white text-anime-style-3"><?php echo $title ?></h3>
                        </div>
                    </div>
                </div>
                <?php if ($cards) { ?>
                    <div class="digital-solution--swiper swiper wow fadeInUp" data-wow-delay="0.2s">
                        <div class="swiper-wrapper">
                            <?php
                            $delay = "0.1";
                            foreach ($cards as $card) {
                                $image = $card["image"];
                                $title = $card["title"];
                                $delay = $delay + 0.1;
                                ?>
                                <div class="swiper-slide">
                                    <div>
                                        <p><?php echo $title ?></p>

                                        <div class="image">
                                            <?php if ($image) { ?>
                                                <img src="<?php echo $image["url"] ?>"
                                                     alt="<?php echo @$image["alt"] ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/solution-2.png"
                                                     alt="<?php echo get_the_title() ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
}
?>