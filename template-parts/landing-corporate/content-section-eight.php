<?php
$partners_section = get_field("partners_section");
if ($partners_section) {
    $title = $partners_section["title"];
    $text = $partners_section["text"];
    $partners = $partners_section["partners"];
    ?>
    <section class="corporate-content-section--eight">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-10 col-xxl-9">
                        <div class="title-row">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>

                            <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                </div>
                <?php if ($partners) { ?>
                    <div class="row mt-5 mt-lg-0">
                        <div class="col-12">
                            <div class="partner--swiper swiper">
                                <div class="swiper-wrapper wow fadeIn" data-wow-delay="0.1s">
                                    <?php foreach ($partners as $partner) {
                                        $partner_img = $partner["image"];
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="<?php echo $partner_img["url"] ?>"
                                                     alt="<?php echo @$partner_img["alt"] ?>">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>