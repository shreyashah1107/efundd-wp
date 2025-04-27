<?php
$third_content_section = get_field('third_content_section');
if ($third_content_section) {
    $title = $third_content_section['title'];
    $text = $third_content_section['text'];
    $image = $third_content_section['image'];
    $button = $third_content_section['button'];
    ?>
    <section class="multicurrency-wallet-content-section--three">
        <div class="section-bg section-bg--left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-left-bg.svg" alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-lg-7 col-xl-6 mb-5 mb-lg-0">
                                <div class="title-row mb-5">
                                    <h3 class="section-title section-title--xl mb-5 text-anime-style-3"><?php echo $title ?></h3>

                                    <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $text ?></p>
                                </div>

                                <?php if ($button): ?>
                                    <div class="btn-grp mt-5">
                                        <a href="<?php echo $button["url"] ?>" title="<?php echo $button["title"] ?>"
                                           class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s"><?php echo $button["title"] ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-8 col-lg-5 col-xl-6">
                                <div class="image text-center wow fadeInRight" data-wow-delay="0.1s">
                                    <?php if ($image): ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>