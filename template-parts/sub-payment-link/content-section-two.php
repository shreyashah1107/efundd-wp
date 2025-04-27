<?php
$second_content_section = get_field('second_content_section');
if ($second_content_section) {
    $title = $second_content_section['title'];
    $text = $second_content_section['text'];
    $image = $second_content_section['image'];
    $button = $second_content_section['button'];
    ?>
    <section class="payment-link-content-section--two">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-6 order-last order-lg-first">
                                <div class="image text-center wow fadeInLeft" data-wow-delay="0.2s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/payment-link/two.png"
                                         alt="Image">
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
<?php } ?>