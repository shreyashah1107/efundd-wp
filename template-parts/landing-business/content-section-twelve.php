<?php
$currencies_section = get_field("currencies_section");
if ($currencies_section) {
    $title = $currencies_section["title"];
    $text = $currencies_section["text"];
    $currencies_section_1 = $currencies_section["currencies_section_1"];
    $currencies_section_2 = $currencies_section["currencies_section_2"];
    $currencies_section_3 = $currencies_section["currencies_section_3"];
    ?>
    <section class="business-content-section--twelve">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-11 col-xxl-9">
                        <div class="title-row">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                            <p class="mt-4 wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($currencies_section_1) { ?>
                <div class="country-swiper country-swiper--one swiper wow fadeInUp" data-wow-delay="0.1s">
                    <div class="swiper-wrapper">
                        <?php foreach ($currencies_section_1 as $item) {
                            $image = $item["image"];
                            $text = $item["text"];
                            ?>
                            <div class="swiper-slide">
                                <div class="country-slide">
                                    <div class="image">
                                        <?php if ($image) { ?>
                                            <img src="<?php echo $image["url"] ?>"
                                                 alt="<?php echo @$image["alt"] ?>">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/country-slide-1.svg"
                                                 alt="<?php echo get_the_title() ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="name"><?php echo $text ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if ($currencies_section_2) { ?>
                <div class="country-swiper country-swiper--two swiper wow fadeInUp" data-wow-delay="0.2s">
                    <div class="swiper-wrapper">
                        <?php foreach ($currencies_section_2 as $item) {
                            $image = $item["image"];
                            $text = $item["text"];
                            ?>

                            <div class="swiper-slide">
                                <div class="country-slide">
                                    <div class="image">
                                        <?php if ($image) { ?>
                                            <img src="<?php echo $image["url"] ?>"
                                                 alt="<?php echo @$image["alt"] ?>">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/country-slide-1.svg"
                                                 alt="<?php echo get_the_title() ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="name"><?php echo $text ?></div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            <?php } ?>
            <?php if ($currencies_section_3) { ?>
                <div class="country-swiper country-swiper--three swiper wow fadeInUp" data-wow-delay="0.3s">
                    <div class="swiper-wrapper">
                        <?php foreach ($currencies_section_3 as $item) {
                            $image = $item["image"];
                            $text = $item["text"];
                            ?>
                            <div class="swiper-slide">
                                <div class="country-slide">
                                    <div class="image">
                                        <?php if ($image) { ?>
                                            <img src="<?php echo $image["url"] ?>"
                                                 alt="<?php echo @$image["alt"] ?>">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/country-slide-1.svg"
                                                 alt="<?php echo get_the_title() ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="name"><?php echo $text ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>