<?php
$content_section_second = get_field('content_section_second');
if (isset($content_section_second)): ?>
    <section class="worldwide-payments instant-payment-link">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8">
                            <div class="subtitle"><?php echo @$content_section_second["highlighted_text"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo @$content_section_second["title"] ?></h3>
                            <p><?php echo @$content_section_second["text"] ?></p>
                            <?php if ($content_section_second["button_title"]): ?>
                                <div class="btn-grp">
                                    <a href="<?php echo @$content_section_second["button_link"] ?>"
                                       title="<?php echo $content_section_second["button_title"] ?>"
                                       class="btn btn-light-green"><?php echo $content_section_second["button_title"] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-xl-4 order-first order-xl-last mb-5 mb-xl-0">
                            <div class="text-lg-center">
                                <?php if ($content_section_second["image"]): ?>
                                    <img src="<?php echo $content_section_second["image"]["url"] ?>"
                                         alt="<?php echo @$content_section_second["image"]["alt"] ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>