<?php
$hero_section = get_field("hero_section");
if (isset($hero_section)):
    $hero_image = $hero_section["image"];
?>
    <section class="hero hero--personal-updated">
        <div class="container">
            <!-- Active Page Text: Show < 576px -->
            <div class="d-sm-none text-center">
                <div class="subtitle"><?php _e("Personal", "fundd") ?></div>
            </div>
            <!-- Active Page Text -->

            <div class="hero--content">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10 text-center">
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
                                    class="btn btn-outline-gray"><?php echo $hero_section["button_text_2"] ?></a>
                            <?php endif; ?>
                        </div>

                        <div class="hero--content-images">
                            <div class="images">
                                <div class="images--center">
                                    <div class="center-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animated/1.png" alt="Image">
                                    </div>
                                    <div class="center-right">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animated/2.png" alt="Image">
                                    </div>
                                </div>

                                <div class="images--left">
                                    <div class="left-top">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animated/left-top.png" alt="Image">
                                    </div>

                                    <div class="left-bottom">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animated/left-bottom.png" alt="Image">
                                    </div>
                                </div>

                                <div class="images--right">
                                    <div class="right-top">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animated/right-top.png" alt="Image">
                                    </div>
                                    <div class="right-bottom">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animated/right-bottom.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>