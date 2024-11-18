<?php
$content_section = get_field("second_content_section");
if (isset($content_section)):
?>
    <section class="worldwide-payments bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-xxl-5 mb-5 mb-xl-0">
                            <div class="modular-solutions--img text-lg-center">
                                <img src="<?php echo @$content_section["image"]["url"] ?>"
                                    alt="<?php echo @$content_section["image"]["alt"] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="subtitle"><?php echo $content_section["highlighted_text"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo $content_section["title"] ?></h3>
                            <p><?php echo $content_section["text"] ?></p>
                            <div class="btn-grp">
                                <?php if (!empty($content_section["button_title"])): ?>
                                    <a href="<?php echo @$content_section["button_link"] ?>"
                                        title="<?php echo $content_section["button_title"] ?>"
                                        class="btn btn-light-green"><?php echo $content_section["button_title"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($content_section["secondary_button_title"])): ?>
                                    <a href="<?php echo $content_section["secondary_button_link"] ?>"
                                        title="<?php echo $content_section["secondary_button_title"] ?>"
                                        class="btn btn-light-green"><?php echo $content_section["secondary_button_title"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>