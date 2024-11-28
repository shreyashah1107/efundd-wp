<?php
$hero_section = get_field('hero_section');
if ($hero_section):
?>
    <section class="hero">
        <div class="container">
            <div class="hero--content">
                <div class="row align-items-center justify-content-center justify-content-xl-between">
                    <div class="col-xl-6 col-xxl-6 text-center text-xl-start">
                        <h1><?php echo $hero_section["title"] ?></h1>
                        <p><?php echo $hero_section["text"] ?></p>

                        <div class="btn-grp justify-content-center justify-content-xl-start">
                            <?php if (!empty($hero_section["button_title"])): ?>
                                <a href="<?php echo @$hero_section["button_link"] ?>"
                                    title="<?php echo $hero_section["button_title"] ?>"
                                    class="btn btn-light-green"><?php echo $hero_section["button_title"] ?></a>
                            <?php endif; ?>
                            <?php if (!empty($hero_section["secondary_button_title"])): ?>
                                <a href="<?php echo $hero_section["secondary_button_link"] ?>"
                                    title="<?php echo $hero_section["secondary_button_title"] ?>"
                                    class="btn btn-outline-light-green"><?php echo $hero_section["secondary_button_title"] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-xl-6 col-xxl-5">
                        <div class="hero--img text-center mt-5 mt-xl-0 pt-5 pt-xl-0">
                            <?php if (!empty($hero_section["image"])): ?>
                                <img src="<?php echo $hero_section["image"]["url"] ?>"
                                    alt="<?php echo @$hero_section["image"]["alt"] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>