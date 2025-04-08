<?php
$hero_section = get_field('hero_section');
if ($hero_section) {
    $title = $hero_section['title'];
    $subtitle = $hero_section['subtitle'];
    $text = $hero_section['text'];
    $primary_button = $hero_section['primary_button'];
    $secondary_button = $hero_section['secondary_button'];
    $banner_image = $hero_section['banner_image'];
    ?>
    <section class="hero hero--business">
        <div class="content-wrapper">
            <div class="container">
                <div class="hero--content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xxl-10 text-center">
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
                            <?php if ($text){ ?>
                            <div class="certification-text wow fadeInUp" data-wow-delay="0.6s">
              <span class="icon-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/lock-white.svg"
                     alt="Image">
              </span>
                                <span class="text"><?php echo $text ?></span>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="col-xl-10 col-xxl-8">
                            <div class="image mt-5 pt-5 wow fadeInUp" data-wow-delay="0.7s">
                                <?php if ($banner_image) { ?>
                                    <img src="<?php echo $banner_image["url"] ?>"
                                         alt="<?php echo @$banner_image["alt"] ?>">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/business/hero.jpg"
                                         alt="<?php echo get_the_title() ?>">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>