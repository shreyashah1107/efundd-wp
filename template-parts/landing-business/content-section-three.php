<?php
$fifth_content_section = get_field("fifth_content_section");
if ($fifth_content_section) {
    $title = $fifth_content_section["title"];
    $text = $fifth_content_section["text"];
    $primary_button = $fifth_content_section["primary_button"];
    $secondary_button = $fifth_content_section["secondary_button"];
    $image = $fifth_content_section["image"];
    ?>
    <section class="business-content-section--three">
        <div class="section-bg section-bg--left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/section-bg-three.png"
                 alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-10 col-xxl-8">
                        <div class="title-row mb-5">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>

                            <p class="mt-4 wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                        <div class="btn-grp justify-content-center">
                            <?php if ($primary_button) { ?>
                                <a href="<?php echo $primary_button["url"] ?>"
                                   title="<?php echo $primary_button["title"] ?>"
                                   class="btn btn-bright-green wow fadeInUp"
                                   data-wow-delay="0.2s">
                                    <?php echo $primary_button["title"] ?>
                                </a>
                            <?php } ?>
                            <?php if ($secondary_button) { ?>
                                <a href="<?php echo $secondary_button["url"] ?>"
                                   title="<?php echo $secondary_button["title"] ?>"
                                   class="btn btn-white wow fadeInUp"
                                   data-wow-delay="0.4s"><?php echo $secondary_button["title"] ?></a>
                            <?php } ?>
                        </div>

                        <div class="image text-center mt-5 wow fadeInUp" data-wow-delay="0.4s">
                            <?php if ($image) { ?>
                                <img src="<?php echo $image["url"] ?>"
                                     alt="<?php echo @$image["alt"] ?>">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/content-three-cards.png"
                                     alt="<?php echo get_the_title() ?>">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>