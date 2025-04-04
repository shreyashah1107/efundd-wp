<?php
$cta_section = get_field('cta_section');
if ($cta_section) {
    $title = $cta_section['title'];
    $text = $cta_section['text'];
    $primary_button = $cta_section['primary_button'];
    $secondary_button = $cta_section['secondary_button'];
    $image = $cta_section['image'];
    ?>
    <section class="corporate-content-section--fourteen">
        <div class="content-wrapper">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-lg-7 col-xl-6 text-center text-lg-start mb-5 mb-lg-0">
                                <div class="title-row mb-4">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>

                                    <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                </div>

                                <div class="btn-grp justify-content-center justify-content-lg-start mt-5">
                                    <?php if (!empty($primary_button)) { ?>
                                        <a href="<?php echo $primary_button["url"] ?>" title="<?php echo $primary_button["title"] ?>" class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s"><?php echo $primary_button["title"] ?></a>
                                    <?php } ?>
                                    <?php if (!empty($secondary_button)) { ?>
                                        <a href="<?php echo $secondary_button["url"] ?>" title="<?php echo $secondary_button["title"] ?>" class="btn btn-white wow fadeInUp"
                                           data-wow-delay="0.4s"><?php echo $secondary_button["title"] ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image text-center wow fadeInRight" data-wow-delay="0.2s">
                    <?php if ($image) { ?>
                        <img src="<?php echo $image["url"] ?>"
                             alt="<?php echo @$image["alt"] ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>