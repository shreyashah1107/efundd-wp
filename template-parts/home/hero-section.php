<?php
$hero_section = get_field("hero_section");
if (isset($hero_section)):
    $slides = $hero_section["slides"];
    ?>
    <!-- Start: Hero -->
    <section class="hero">
        <div class="container">
            <div class="hero--content">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-xxl-8">
                        <h1><?php echo $hero_section["title"] ?></h1>
                        <p><?php echo $hero_section["subtitle"] ?></p>

                        <div class="btn-grp justify-content-center">
                            <?php if (!empty($hero_section["button_text_1"])): ?>
                                <a href="<?php echo @$hero_section["button_link_1"] ?>"
                                   title="<?php echo $hero_section["button_text_1"] ?>"
                                   class="btn btn-light-green"><?php echo $hero_section["button_text_1"] ?></a>
                            <?php endif; ?>
                            <?php if (!empty($hero_section["button_text_2"])): ?>
                                <a href="<?php echo $hero_section["button_link_2"] ?>"
                                   title="<?php echo $hero_section["button_text_2"] ?>"
                                   class="btn btn-light-green"><?php echo $hero_section["button_text_2"] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero--swiper swiper">
                <div class="swiper-wrapper">
                    <?php if ($slides):
                        foreach ($slides as $slide): ?>
                            <div class="swiper-slide">
                                <div class="card-hero">
                                    <div class="card-hero--title"><?php echo $slide["title"] ?></div>
                                    <?php if (!empty($slide["image"])): ?>
                                        <div class="card-hero--img">
                                            <img src="<?php echo $slide["image"]["url"] ?>" alt="<?php echo @$slide["image"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Hero -->
<?php endif; ?>