<?php
$third_content_section = get_field("third_content_section");
if ($third_content_section):
    $title = $third_content_section["title"];
    $text = $third_content_section["text"];
    $image = $third_content_section["image"];
    $button = $third_content_section["button"];
    ?>
    <section class="payment-link-content-section--three">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-end justify-content-center justify-content-xl-between">
                            <div class="col-xl-6 col-xxl-7">
                                <div class="main-content">
                                    <div class="title-row mb-5 text-center text-xl-start">
                                        <h3 class="section-title section-title--xl text-anime-style-3 mb-5"><?php echo $title ?></h3>
                                        <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                    </div>
                                    <?php if ($button): ?>
                                        <div class="btn-grp justify-content-center justify-content-xl-start">
                                            <a href="<?php echo $button["url"] ?>"
                                               title="<?php echo $button["title"] ?>"
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
        </div>

        <div class="image wow fadeInUp" data-wow-delay="0.2s">
            <?php if ($image): ?>
                <img src="<?php echo $image["url"] ?>"
                     alt="<?php echo @$image["alt"] ?>">
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>