<?php
$sixth_content_section = get_field("sixth_content_section");
if ($sixth_content_section) {
    $title = $sixth_content_section["title"];
    $text = $sixth_content_section["text"];
    $images = $sixth_content_section["images"];
?>
    <section class="corporate-content-section--seven">
        <div class="section-bg section-bg--center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/section-center-bg.png"
                alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-xxl-7 text-center">
                        <div class="title-row mb-5">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>

                        <div class="btn-grp justify-content-center">
                            <a href="#" title="Order card machine" class="btn btn-bright-green wow fadeInUp" data-wow-delay="0.2s">Order card machine</a>
                            <a href="#" title="View options" class="btn btn-outline-content-link wow fadeInUp" data-wow-delay="0.4s">View options</a>
                        </div>
                    </div>
                </div>

                <div class="content-img wow fadeInTop" data-wow-delay="0.1s">
                    <img src="<?php echo $image["url"]; ?>" alt="<?php echo @$image["alt"] ?>">
                </div>

                <!-- <?php $s = 1;
                        if ($images) { ?>
                    <div class="content-img--items">
                        <?php foreach ($images as $image) { ?>
                            <?php if ($s == 1) { ?>
                                <div class="content-img--item wow fadeInLeft" data-wow-delay="0.1s">
                                    <img src="<?php echo $image["url"]; ?>" alt="<?php echo @$image["alt"] ?>">
                                </div>
                            <?php } elseif ($s == 2) { ?>
                                <div class="content-img--item wow fadeInUp" data-wow-delay="0.2s">
                                    <img src="<?php echo $image["url"]; ?>" alt="<?php echo @$image["alt"] ?>">
                                </div>
                            <?php } else { ?>
                                <div class="content-img--item wow fadeInRight" data-wow-delay="0.3s">
                                    <img src="<?php echo $image["url"]; ?>" alt="<?php echo @$image["alt"] ?>">
                                </div>
                            <?php } ?>
                        <?php $s++;
                            } ?>
                    </div>
                <?php } ?> -->
            </div>
        </div>
    </section>
<?php } ?>