<?php
$content_section_second = get_field('content_section_second');
if ($content_section_second):
    ?>
    <section class="billing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-6 col-xxl-6">
                            <div class="title-row">
                                <div class="subtitle"><?php echo $content_section_second["highlighted_text"] ?></div>
                                <h3 class="section-title"><?php echo $content_section_second["title"] ?></h3>
                                <p><?php echo $content_section_second["text"] ?></p>
                            </div>
                            <div class="btn-grp">
                                <?php if (!empty($content_section_second["button_title"])): ?>
                                    <a href="<?php echo @$content_section_second["button_link"] ?>"
                                       title="<?php echo $content_section_second["button_title"] ?>"
                                       class="btn btn-light-green"><?php echo $content_section_second["button_title"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-5 offset-xxl-1 mb-5 mb-lg-0 order-first order-lg-last">
                            <?php if (!empty($content_section_second["image"])): ?>
                                <div>
                                    <img src="<?php echo $content_section_second["image"]["url"] ?>"
                                         alt="<?php echo @$content_section_second["image"]["alt"] ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>