<?php
$third_content_section = get_field("third_content_section");
if ($third_content_section) {
    $title = $third_content_section["title"];
    $text = $third_content_section["text"];
    $image = $third_content_section["image"];
    $button = $third_content_section["button"];
    $secondary_button = $third_content_section["secondary_button"];
    ?>
    <section class="personal-content-section--four">
        <div class="section-bg section-bg--left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-left-bg.svg" alt="Image">
        </div>

        <div class="pattern-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/pattern-bg.jpg"
                 alt="Image">
        </div>

        <div class="pattern-shadow">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/pattern-shadow.png"
                 alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-between">
                            <div class="col-md-6 col-lg-5 col-xl-5">
                                <div class="image text-center wow fadeInLeft" data-wow-delay="0.2s">
                                    <?php if ($image) { ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-5 mt-5 mt-lg-0">
                                <div class="title-row mb-0">
                                    <h3 class="section-title section-title--xl text-white text-anime-style-3"><?php echo $title ?></h3>
                                    <p class="text-white wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>

                                    <div class="btn-grp justify-content-center justify-content-lg-start mt-5">
                                        <?php if ($button) { ?>
                                            <a href="<?php echo $button["url"] ?>"
                                               title="<?php echo $button["title"] ?>"
                                               class="btn btn-bright-green wow fadeInUp"
                                               data-wow-delay="0.2s"><?php echo $button["title"] ?></a>
                                        <?php } ?>
                                        <?php if ($secondary_button) { ?>
                                            <a href="<?php echo $secondary_button["url"] ?>"
                                               title="<?php echo $secondary_button["title"] ?>"
                                               class="btn btn-outline-white wow fadeInUp"
                                               data-wow-delay="0.4s"><?php echo $secondary_button["title"] ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>