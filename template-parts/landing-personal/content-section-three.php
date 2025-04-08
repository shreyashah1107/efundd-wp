<?php
$second_content_section = get_field('second_content_section');
if ($second_content_section) {
    $title = $second_content_section['title'];
    $text = $second_content_section['text'];
    $primary_button = $second_content_section['primary_button'];
    $secondary_button = $second_content_section['secondary_button'];
    $image = $second_content_section['image'];
    $currencies = $second_content_section['currencies'];
    $list = $second_content_section['list'];
    ?>
    <section class="personal-content-section--three">
        <div class="section-bg section-bg--center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-center-bg.svg"
                 alt="Image">
        </div>

        <div class="section-bg section-bg--right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-right-bg.svg" alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-10 col-xxl-9">
                        <div class="title-row">
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

                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-6">
                                <div class="images wow fadeInLeft" data-wow-delay="0.4s">
                                    <?php if ($image) { ?>
                                        <img src="<?php echo $image["url"] ?>"
                                             alt="<?php echo @$image["alt"] ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/3-card.png"
                                             alt="Image">
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <?php if ($currencies) { ?>
                                    <div class="list-country--items">
                                        <?php
                                        $delay = 0.1;
                                        foreach ($currencies as $currency) {
                                            $delay = $delay + 0.1;
                                            $icon = $currency['icon'];
                                            $title = $currency['title'];
                                            $subtitle = $currency['subtitle'];
                                            $text = $currency['text'];
                                            ?>
                                            <div class="list-country--item wow fadeInRight"
                                                 data-wow-delay="<?php echo $delay ?>s">
                                                <div class="country-info">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flag-img-round">
                                                            <?php if ($icon) { ?>
                                                                <img src="<?php echo $icon["url"] ?>"
                                                                     alt="<?php echo @$icon["alt"] ?>">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="name">
                                                            <h5><?php echo $title ?></h5>
                                                            <p><?php echo $subtitle ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="currency">
                                                    <?php echo $text ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="benefit--items">
                            <?php if ($list) {
                                $delay = 0.1;
                                foreach ($list as $item) {
                                    $delay = $delay + 0.1;
                                ?>
                                <div class="benefit--item wow fadeInUp" data-wow-delay="<?php echo $delay ?>s">
                                    <p><?php echo $item["text"] ?></p>
                                </div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>