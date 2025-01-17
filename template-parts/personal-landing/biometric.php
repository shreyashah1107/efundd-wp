<?php
$biometric_section = get_field('biometric_section');
if ($biometric_section):
    $image = $biometric_section['image'];
    ?>
    <section class="fingerpay-solution fingerpay-solution--biometric">
        <div class="container">
            <div class="row align-items-center justify-content-between justify-content-xxl-start">
                <div class="col-lg-6 col-xl-5">
                    <div class="fingerpay-solution--img">
                        <?php if (!empty($image)): ?>
                            <img src="<?php echo $image["url"] ?>" alt="<?php echo @$image["alt"] ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-xxl-6 offset-xxl-1">
                    <div class="title-row">
                        <div class="subtitle"><?php echo $biometric_section["highlighted_text"] ?></div>
                        <h3 class="section-title section-title--xl has-bg-gradient"><?php echo $biometric_section["title"] ?></h3>
                        <?php echo $biometric_section["text"] ?>
                        <?php if ($biometric_section["tagline"]): ?>
                            <p class="tagline"><?php echo $biometric_section["tagline"] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="btn-grp mt-5">
                        <?php if ($biometric_section["button_text"]): ?>
                            <a href="<?php echo $biometric_section["button_link"] ?>" title="<?php echo $biometric_section["button_text"] ?>" class="btn btn-outline-light-green text-dark"><?php echo $biometric_section["button_text"] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>