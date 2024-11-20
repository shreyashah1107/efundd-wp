<?php
$content_section = get_field("content_section");
if (isset($content_section)):
    $key_features = $content_section["key_features"];
?>
    <section class="component-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-xxl-5">
                            <?php if (!empty($key_features)): ?>
                            <div class="key-features">
                                <?php foreach ($key_features as $key_feature): ?>
                                <div class="key-features--item">
                                    <h4><?php echo $key_feature["title"] ?></h4>
                                    <p><?php echo $key_feature["text"] ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                            <div class="btn-grp">
                                <?php if (!empty($content_section["button_title"])): ?>
                                    <a href="<?php echo @$content_section["button_link"] ?>"
                                        title="<?php echo $content_section["button_title"] ?>"
                                        class="btn btn-light-green"><?php echo $content_section["button_title"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($content_section["secondary_button_title"])): ?>
                                    <a href="<?php echo $content_section["secondary_button_link"] ?>"
                                        title="<?php echo $content_section["secondary_button_title"] ?>"
                                        class="btn btn-outline-light-green text-dark"><?php echo $content_section["secondary_button_title"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6 order-first order-xl-last">
                            <div class="text-lg-center">
                                <img src="<?php echo @$content_section["image"]["url"] ?>" alt="<?php echo @$content_section["image"]["alt"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>