<?php
$fifth_content_section = get_field("fifth_content_section");
if ($fifth_content_section) {
    $title = $fifth_content_section["title"];
    $text = $fifth_content_section["text"];
    $button = $fifth_content_section["button"];
    $image = $fifth_content_section["image"];
    ?>
    <section class="corporate-content-section--six">
        <div class="bg-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/six-bg.png" alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-end justify-content-center justify-content-xl-between">
                            <div class="col-xl-6 col-xxl-6">
                                <div class="main-content">
                                    <div class="title-row mb-5">
                                        <h3 class="section-title section-title--xl text-anime-style-3 mb-5"><?php echo $title ?></h3>
                                        <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                    </div>

                                    <div class="btn-grp justify-content-center justify-content-xl-start">
                                        <?php if ($button) { ?>
                                            <a href="<?php echo $button["url"] ?>" title="<?php echo $button["title"] ?>" class="btn btn-bright-green wow fadeInUp"
                                               data-wow-delay="0.2s"><?php echo $button["title"] ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-10 col-md-9 col-lg-8 col-xl-6 col-xxl-6">
                                <div class="image wow fadeInUp" data-wow-delay="0.2s">
                                    <?php if ($image) { ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/six.gif"
                                             alt="<?php echo get_the_title() ?>">
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