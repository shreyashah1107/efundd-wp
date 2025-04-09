<?php
$hero_section = get_field('hero_section');
if ($hero_section) {
    $title = $hero_section['title'];
    $subtitle = $hero_section['subtitle'];
    $primary_button = $hero_section['primary_button'];
    $secondary_button = $hero_section['secondary_button'];
    $banner_image = $hero_section['banner_image'];
    $certification_text = $hero_section['certification_text'];
    $certificates = $hero_section['certificates'];
?>
    <section class="hero hero--corporate">
        <div class="hero--img">
            <?php if ($banner_image) { ?>
                <img src="<?php echo $banner_image["url"] ?>"
                    alt="<?php echo @$banner_image["alt"] ?>">
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/corporate/hero.jpg"
                    alt="<?php echo get_the_title() ?>">
            <?php } ?>

        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="hero--content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-10 col-xxl-9 text-center">
                            <h1 class="text-anime-style-3"><?php echo $title ?></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $subtitle ?></p>

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

            <div class="certificates-row--content" style="display: none;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <div class="certificates-row">
                                <div class="text text-anime-style-3">
                                    <?php echo $certification_text ?>
                                </div>
                                <?php if ($certificates) { ?>
                                    <div class="certificates--swiper swiper">
                                        <div class="swiper-wrapper">
                                            <?php
                                            $delay = 0.2;
                                            $i = 0;
                                            foreach ($certificates as $certificate) {
                                                if ($i == 0) { ?>
                                                    <div class="swiper-slide wow fadeInUp">
                                                        <img src="<?php echo $certificate["url"] ?>"
                                                            alt="<?php echo @$certificate["alt"] ?>">
                                                    </div>
                                                <?php } else {

                                                    $delay = $delay + 0.2;
                                                ?>
                                                    <div class="swiper-slide wow fadeInUp"
                                                        data-wow-delay="<?php echo $delay ?>s">
                                                        <img src="<?php echo $certificate["url"] ?>"
                                                            alt="<?php echo @$certificate["alt"] ?>">
                                                    </div>
                                                <?php } ?>

                                            <?php $i++;
                                            } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>