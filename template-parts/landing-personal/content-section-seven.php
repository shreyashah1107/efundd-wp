<?php
$sixth_content_section = get_field("sixth_content_section");
if ($sixth_content_section) {
    $title = $sixth_content_section["title"];
    $text = $sixth_content_section["text"];
    $image = $sixth_content_section["image"];
    $button = $sixth_content_section["button"];
    ?>
    <section class="personal-content-section--seven">
        <div class="section-bg section-bg--left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-left-bg.svg" alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-lg-5 col-xl-6 order-last order-lg-first">
                                <div class="image text-center wow fadeInLeft" data-wow-delay="0.1s">
                                    <?php if ($image) { ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-6 mb-5 mb-lg-0">
                                <div class="title-row">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                    <?php echo $text ?>
                                    <?php if ($button) { ?>
                                        <div class="btn-grp justify-content-center justify-content-lg-start mt-5">
                                            <a href="<?php echo @$button["url"] ?>"
                                               title="<?php echo $button["title"] ?>"
                                               class="btn btn-bright-green wow fadeInUp"
                                               data-wow-delay="0.4s"><?php echo $button["title"] ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>