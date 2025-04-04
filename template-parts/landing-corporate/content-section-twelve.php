<?php
$tenth_content_section = get_field('tenth_content_section');
if ($tenth_content_section) {
    $title = $tenth_content_section['title'];
    $text = $tenth_content_section['text'];
    $button = $tenth_content_section['button'];
    $image = $tenth_content_section['image'];
    ?>
    <section class="corporate-content-section--twelve">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-lg-6 col-xl-6 mb-5 mb-lg-0 p-lg-0 pe-lg-4">
                                <div class="title-row mb-4">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                </div>

                                <div class="option-list--items">
                                    <?php echo $text ?>
                                </div>
                                <?php if (!empty($button)) { ?>
                                    <div class="btn-grp">
                                        <a href="<?php echo $button["url"] ?>" title="<?php echo $button["title"] ?>"
                                           class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s"><?php echo $button["title"] ?></a>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="col-md-8 col-lg-6 col-xl-6">
                                <div class="image text-center wow fadeInRight" data-wow-delay="0.1s">
                                    <?php if ($image) { ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
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