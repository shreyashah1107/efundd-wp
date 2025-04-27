<?php
$seventh_content_section = get_field("seventh_content_section");
if ($seventh_content_section):
    $title = $seventh_content_section["title"];
    $text = $seventh_content_section["text"];
    $image = $seventh_content_section["image"];
    $button = $seventh_content_section["button"];
    ?>
    <section class="payment-link-content-section--seven">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-6 order-last order-lg-first">
                                <div class="image text-center wow fadeInLeft" data-wow-delay="0.2s">
                                    <?php if ($image): ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-6 mb-5 mb-lg-0">
                                <div class="title-row mb-4 mb-lg-5">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                </div>
                                <p class="text-lg wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                <?php if ($button): ?>
                                    <div class="btn-grp mt-5">
                                        <a href="<?php echo $button["url"] ?>" title="<?php echo $button["title"] ?>"
                                           class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s"><?php echo $button["title"] ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>