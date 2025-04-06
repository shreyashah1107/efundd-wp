<?php
$fourth_content_section = get_field("fourth_content_section");
if ($fourth_content_section) {
    $title = $fourth_content_section["title"];
    $text = $fourth_content_section["text"];
    $primary_button = $fourth_content_section["primary_button"];
    $secondary_button = $fourth_content_section["secondary_button"];
    $cards = $fourth_content_section["cards"];
    ?>
    <section class="business-content-section--four">
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
                    </div>
                    <?php if ($cards) { ?>
                        <div class="col-12">
                            <div class="payment-process--items">
                                <?php $delay = "0.1";
                                foreach ($cards as $card) {
                                    $image = $card["image"];
                                    $delay = $delay + 0.1; ?>
                                    <div class="payment-process--item wow fadeInUp" data-wow-delay="<?php echo $delay ?>s">
                                        <div class="image">
                                            <?php if ($image) { ?>
                                                <img src="<?php echo $image["url"] ?>"
                                                     alt="<?php echo @$image["alt"] ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/process-1.png"
                                                     alt="<?php echo get_the_title() ?>">
                                            <?php } ?>
                                        </div>

                                        <div class="content">
                                            <p><?php echo $title ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>