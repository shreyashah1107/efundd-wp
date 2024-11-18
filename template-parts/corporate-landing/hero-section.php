<?php
$hero_section = get_field('hero_section');
if (isset($hero_section)):
    $hero_icon = $hero_section["icon"];
    $hero_image = $hero_section["banner_image"];
    ?>
    <section class="hero hero--corporate">
        <div class="container">
            <!-- Active Page Text: Show < 576px -->
            <div class="d-sm-none text-center">
                <div class="subtitle"><?php _e("Corporate", "fundd") ?></div>
            </div>
            <!-- Active Page Text -->

            <div class="hero--content">
                <div class="row align-items-center justify-content-center justify-content-xl-between">
                    <div class="col-xl-6 col-xxl-5 text-center text-xl-start">
                        <h1><?php echo $hero_section["title"] ?></h1>
                        <p><?php echo $hero_section["subtitle"] ?></p>

                        <div class="btn-grp justify-content-center justify-content-xl-start">
                            <a href="<?php echo $hero_section["button_link_1"] ?>"
                               title="<?php echo $hero_section["button_text_1"] ?>"
                               class="btn btn-light-green"><?php echo $hero_section["button_text_1"] ?></a>
                            <a href="<?php echo $hero_section["button_link_2"] ?>"
                               title="<?php echo $hero_section["button_text_2"] ?>"
                               class="btn btn-light-green"><?php echo $hero_section["button_text_2"] ?></a>
                        </div>

                        <div class="text-certified">
                            <?php if (!empty($hero_icon)): ?>
                                <div class="icon"><img src="<?php echo $hero_icon["url"] ?>"
                                                       alt="<?php echo @$hero_icon["alt"] ?>"></div>
                            <?php endif; ?>
                            <div class="text"><?php echo $hero_section["icon_text"] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero--img mt-5 mt-xl-0 pt-5 pt-xl-0">
            <?php if (!empty($hero_image)): ?>
                <img src="<?php echo $hero_image["url"] ?>" alt="<?php echo @$hero_image["alt"] ?>">
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>