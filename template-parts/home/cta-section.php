<?php
$cta_section = get_field("cta_section");
if (isset($cta_section)):
    ?>
    <section class="cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="cta--content-wrapper">
                        <div class="cta--content">
                            <div class="row">
                                <div class="col-lg-7 col-xl-6">
                                    <h3 class="section-title"><?php echo $cta_section["title"] ?></h3>

                                    <div class="btn-grp">
                                        <?php if (!empty($cta_section["button_text_1"])): ?>
                                            <a href="<?php echo @$cta_section["button_link_1"] ?>"
                                               title="<?php echo $cta_section["button_text_1"] ?>"
                                               class="btn btn-light-green"><?php echo $cta_section["button_text_1"] ?></a>
                                        <?php endif; ?>
                                        <?php if (!empty($cta_section["button_text_2"])): ?>
                                            <a href="<?php echo $cta_section["button_link_2"] ?>"
                                               title="<?php echo $cta_section["button_text_2"] ?>"
                                               class="btn btn-light-green"><?php echo $cta_section["button_text_2"] ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cta--img">
                            <?php if (!empty($cta_section["image"])): ?>
                                <img src="<?php echo $cta_section["image"]["url"]; ?>"
                                     alt="<?php echo @$cta_section["image"]["alt"]; ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>