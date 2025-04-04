<?php
$seventh_content_section = get_field('seventh_content_section');
if ($seventh_content_section) {
    $title = $seventh_content_section['title'];
    $text = $seventh_content_section['text'];
    $image = $seventh_content_section['image'];
    $button = $seventh_content_section['button'];
    ?>
    <section class="corporate-content-section--nine">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6">
                                <div class="image wow fadeInLeft" data-wow-delay="0.1s">
                                    <?php if ($image) { ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/eight.png"
                                             alt="<?php echo get_the_title() ?>">
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6 mt-5 mt-lg-0 p-lg-0 ps-lg-4">
                                <div class="title-row mb-5">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                </div>

                                <div class="payment-list--items">
                                    <?php echo $text ?>
                                </div>
                                <?php if (!empty($button)) { ?>
                                    <div class="btn-grp mt-5">
                                        <a href="<?php echo $button["url"] ?>" title="<?php echo $button["title"] ?>" class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s"><?php echo $button["title"] ?></a>
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