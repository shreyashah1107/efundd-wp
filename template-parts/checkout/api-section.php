<?php
$api_section = get_field("api_section");
if (isset($api_section)):
?>
    <section class="worldwide-payments payment-experience">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8">
                            <div class="subtitle"><?php echo $api_section["highlighted_text"] ?></div>
                            <h3 class="section-title"><?php echo $api_section["title"] ?></h3>
                            <p><?php echo $api_section["text"] ?></p>
                            <div class="btn-grp">
                                <?php if (!empty($api_section["button_title"])): ?>
                                    <a href="<?php echo @$api_section["button_link"] ?>"
                                        title="<?php echo $api_section["button_title"] ?>"
                                        class="btn btn-light-green"><?php echo $api_section["button_title"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($api_section["secondary_button_title"])): ?>
                                    <a href="<?php echo $api_section["secondary_button_link"] ?>"
                                        title="<?php echo $api_section["secondary_button_title"] ?>"
                                        class="btn btn-light-green"><?php echo $api_section["secondary_button_title"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-12 col-xxl-12 order-first order-xl-last mb-5 mb-xl-0">
                            <div class="modular-solutions--img text-lg-center">
                                <img src="<?php echo @$api_section["image"]["url"] ?>"
                                    alt="<?php echo @$api_section["image"]["alt"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>