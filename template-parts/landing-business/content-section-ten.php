<?php
$tenth_content_section = get_field("tenth_content_section");
if ($tenth_content_section) {
    $title = $tenth_content_section["title"];
    $text = $tenth_content_section["text"];
    $image = $tenth_content_section["image"];
    $button = $tenth_content_section["button"];
    ?>
    <section class="business-content-section--ten">
        <div class="section-bg section-bg--left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/section-bg-five.png"
                 alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-lg-5 col-xl-6">
                                <div class="image text-center wow fadeInLeft" data-wow-delay="0.2s">
                                    <?php if ($image) { ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/ten.gif"
                                             alt="<?php echo get_the_title() ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-6 text-lg-start mt-5 mt-lg-0">
                                <div class="title-row mb-4">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                </div>

                                <div class="content-list--items">
                                    <?php echo $text; ?>
                                </div>
                                <?php if ($button) { ?>
                                    <div class="btn-grp mt-5">
                                        <a href="<?php echo @$button["url"] ?>"
                                           title="<?php echo $button["title"] ?>"
                                           class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.5s"><?php echo $button["title"] ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>