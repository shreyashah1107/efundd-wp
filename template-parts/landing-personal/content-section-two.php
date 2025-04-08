<?php
$first_content_section = get_field('first_content_section');
if ($first_content_section) {
    $title = $first_content_section['title'];
    $text = $first_content_section['text'];
    $button = $first_content_section['button'];
    $image = $first_content_section['image'];
    ?>
    <section class="personal-content-section--two">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-lg-7 col-xl-7 mb-5 mb-lg-0">
                                <div class="title-row mb-4">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                </div>

                                <div class="option-list--items">
                                    <?php echo $text ?>
                                </div>

                                <div class="btn-grp">
                                    <?php if ($button) { ?>
                                        <a href="<?php echo @$button["url"] ?>" title="<?php echo $button["title"] ?>" class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s"><?php echo $button["title"] ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-5 col-xl-5">
                                <div class="image text-center wow fadeInRight" data-wow-delay="0.5s">
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