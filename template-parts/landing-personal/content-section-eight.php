<?php
$seventh_content_section = get_field('seventh_content_section');
if ($seventh_content_section) {
    $title = $seventh_content_section["title"];
    $text = $seventh_content_section["text"];
    $button = $seventh_content_section["button"];
    $images = $seventh_content_section["images"];
?>
    <section class="personal-content-section--eight">
        <div class="section-bg section-bg--right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-right-bg.svg" alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-xl-6 mb-5 mb-lg-0">
                                <div class="title-row">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                    </h3>
                                    <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></h3>
                                    </p>
                                    <?php if ($button) { ?>
                                        <div class="btn-grp justify-content-center justify-content-lg-start mt-5">
                                            <a href="<?php echo @$button["url"] ?>"
                                                title="<?php echo $button["title"] ?>"
                                                class="btn btn-bright-green wow fadeInUp"
                                                data-wow-delay="0.4s"><?php echo $button["title"] ?></a>

                                            <a href="#" title="Learn more" class="btn btn-outline-content-link wow fadeInUp" data-wow-delay="0.4s">Learn more</a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="col-lg-5 col-xl-6">
                                <div class="image text-center wow fadeInRight" data-wow-delay="0.2s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/mobile-bg.png"
                                        alt="Image">

                                    <div class="images--slider">
                                        <?php $j = 1;
                                        if ($images) {
                                            foreach ($images as $image) {
                                                $class = "";
                                                if ($j == 1) {
                                                    $class = "active";
                                                }
                                        ?>
                                                <img class="slide-img <?php echo $class ?>"
                                                    src="<?php echo $image["url"] ?>"
                                                    alt="<?php echo @$image["alt"] ?>">
                                        <?php }
                                        } ?>
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