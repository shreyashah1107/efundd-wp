<?php
$hero_section = get_field("hero_section");
if (isset($hero_section)):
    $hero_image = $hero_section["image"];
    ?>
    <section class="hero hero--personal">
        <div class="container">
            <!-- Active Page Text: Show < 576px -->
            <div class="d-sm-none text-center">
                <div class="subtitle"><?php _e("Personal", "fundd") ?></div>
            </div>
            <!-- Active Page Text -->

            <div class="hero--content">
                <div class="row align-items-center justify-content-center justify-content-xl-between">
                    <div class="col-xl-6 col-xxl-5 text-center text-xl-start">
                        <h1><?php echo $hero_section["title"] ?></h1>
                        <p><?php echo $hero_section["subtitle"] ?></p>

                        <div class="btn-grp justify-content-center justify-content-xl-start">
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

                    <div class="col-md-8 col-lg-8 col-xl-6 col-xxl-6">
                        <div class="hero--img text-center mt-5 mt-xl-0 pt-5 pt-xl-0">
                            <?php if (!empty($hero_image["url"])): ?>
                                <img src="<?php echo $hero_image["url"] ?>" alt="<?php echo @$hero_image["alt"] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>