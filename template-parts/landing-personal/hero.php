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
    <section class="hero hero--personal">
        <div class="section-bg section-bg--hero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/section-bg.png"
                 alt="Image">
        </div>

        <div class="pattern-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/hero-pattern.png"
                 alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="hero--content text-start">
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <div class="row">
                                <div class="col-xl-7">
                                    <h1 class="text-anime-style-3"><?php echo $title ?></h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>

                                    <div class="btn-grp">
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
                </div>
            </div>

            <div class="hero--content-images">
                <?php if ($banner_image) { ?>
                    <img src="<?php echo $banner_image["url"] ?>"
                         alt="<?php echo @$banner_image["alt"] ?>">
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/hero.png"
                         alt="<?php echo get_the_title() ?>">
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>