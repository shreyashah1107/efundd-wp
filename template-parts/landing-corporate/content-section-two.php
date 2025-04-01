<?php
$second_content_section = get_field('second_content_section');
if ($second_content_section) {
    $title = $second_content_section['title'];
    $text = $second_content_section['text'];
    $primary_button = $second_content_section['primary_button'];
    $secondary_button = $second_content_section['secondary_button'];
    $image = $second_content_section['image'];
    ?>
    <section class="corporate-content-section--two">
        <div class="section-bg section-bg--right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-right-bg.svg" alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-md-8 col-lg-5 col-xl-6 order-last order-lg-first">
                                <div class="image text-center wow fadeInLeft" data-wow-delay="0.2s">
                                    <?php if ($image) { ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/two.png"
                                             alt="<?php echo get_the_title() ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-6 mb-5 mb-lg-0">
                                <div class="title-row mb-4">
                                    <h3 class="section-title section-title--xl text-anime-style-3"
                                    ><?php echo $title ?></h3>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>

                                <div class="btn-grp mt-5">
                                    <?php if ($primary_button) { ?>
                                        <a href="<?php echo $primary_button["url"] ?>"
                                           title="<?php echo $primary_button["title"] ?>"
                                           class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s">
                                            <?php echo $primary_button["title"] ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($secondary_button) { ?>
                                        <a href="<?php echo $secondary_button["url"] ?>"
                                           title="<?php echo $secondary_button["title"] ?>"
                                           class="btn btn-white wow fadeInUp"
                                           data-wow-delay="0.4s"><?php echo $secondary_button["title"] ?></a>
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