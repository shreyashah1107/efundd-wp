<?php
$sixth_content_section = get_field("sixth_content_section");
if ($sixth_content_section) {
    $title = $sixth_content_section["title"];
    $text = $sixth_content_section["text"];
    $images = $sixth_content_section["images"];
    ?>
    <section class="business-content-section--five">
        <div class="section-bg section-bg--left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/section-bg-five.png"
                 alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-md-10 col-lg-7 col-xl-6 mb-5 mb-lg-0">
                                <div class="title-row mb-4">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                            </div>
                            <?php if ($images) { ?>
                                <div class="col-sm-8 col-md-6 col-lg-5 col-xl-6 text-center">
                                    <div class="content-img--swiper swiper wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($images as $image) { ?>
                                                <div class="swiper-slide">
                                                    <img src="<?php echo $image["url"] ?>"
                                                         alt="<?php echo @$image["alt"] ?>>">
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>