<?php
$fourth_content_section = get_field("fourth_content_section");
if ($fourth_content_section) {
    $title = $fourth_content_section["title"];
    $text = $fourth_content_section["text"];
    $primary_button = $fourth_content_section["primary_button"];
    $secondary_button = $fourth_content_section["secondary_button"];
    $currencies = $fourth_content_section["currencies"];
    $countries_1 = $fourth_content_section["countries_1"];
    $countries_2 = $fourth_content_section["countries_2"];
    ?>
    <section class="personal-content-section--five">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-10 col-xxl-8">
                        <div class="title-row position-relative z-1">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>

                            <div class="btn-grp justify-content-center mt-5">
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
                    </div>
                </div>
            </div>

            <div class="globe-img text-center">
                <?php if ($currencies) { ?>
                    <div class="country--list-items">
                        <?php
                        $delay = 0.1;
                        foreach ($currencies as $currency) {
                            $delay = $delay * 0.1;
                            ?>
                            <div class="country--list--item  wow fadeInUp" data-wow-delay="<?php echo $delay ?>s">
                                <img src="<?php echo @$currency["url"] ?>"
                                     alt="<?php echo @$currency["alt"] ?>">
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/globe-content.png"
                     alt="Image">

                <div class="country-images">
                    <?php if ($countries_1) { ?>
                        <div class="flags-row flags-row--one">
                            <?php foreach ($countries_1 as $country) { ?>
                                <div class="image">
                                    <img src="<?php echo $country["url"] ?>"
                                         alt="<?php echo $country["alt"] ?>">
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($countries_2) { ?>
                        <div class="flags-row flags-row--two">
                            <?php foreach ($countries_2 as $country) { ?>
                                <div class="image">
                                    <img src="<?php echo $country["url"] ?>"
                                         alt="<?php echo $country["alt"] ?>">
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>