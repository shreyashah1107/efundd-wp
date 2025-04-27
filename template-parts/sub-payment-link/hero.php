<?php
$hero_section = get_field("hero_section");
if ($hero_section) {
    $title = $hero_section["title"];
    $text = $hero_section["text"];
    $primary_button = $hero_section["primary_button"];
    $secondary_button = $hero_section["secondary_button"];
    $image = $hero_section["image"];
    ?>
    <section class="hero hero--payment-link">
        <div class="section-bg section-bg--hero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/section-bg.png"
                 alt="Image">
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="hero--content text-start">
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <div class="row">
                                <div class="col-xl-7 col-xxl-8">
                                    <h1 class="text-anime-style-3"><?php echo $title ?></h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                    <div class="btn-grp">
                                        <?php if ($primary_button): ?>
                                            <a href="<?php echo $primary_button["link"] ?>"
                                               title="<?php echo $primary_button["title"] ?>"
                                               class="btn btn-bright-green wow fadeInUp"
                                               data-wow-delay="0.2s"><?php echo $primary_button["title"] ?></a>
                                        <?php endif; ?>
                                        <?php if ($secondary_button): ?>
                                            <a href="<?php echo $secondary_button["link"] ?>"
                                               title="<?php echo $secondary_button["title"] ?>"
                                               class="btn btn-outline-white wow fadeInUp"
                                               data-wow-delay="0.4s"><?php echo $secondary_button["title"] ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero--content-images">
                <?php if ($image): ?>
                    <img src="<?php echo $image["url"] ?>"
                         alt="<?php echo @$image["alt"] ?>">
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php } ?>