<?php
$content_section_third = get_field('content_section_third');
if (isset($content_section_third)): ?>
    <!-- Start: Instant Payment Link -->
    <section class="worldwide-payments instant-payment-link">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8">
                            <div class="subtitle"><?php echo @$content_section_third["highlighted_text"] ?></div>
                            <h3 class="section-title has-bg-gradient"><?php echo @$content_section_third["title"] ?></h3>
                            <p><?php echo @$content_section_third["text"] ?></p>
                            <?php if ($content_section_third["button_text_1"]): ?>
                                <div class="btn-grp">
                                    <a href="<?php echo @$content_section_third["button_link_1"] ?>"
                                       title="<?php echo $content_section_third["button_text_1"] ?>"
                                       class="btn btn-light-green"><?php echo $content_section_third["button_text_1"] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-xl-12 col-xxl-12 order-first order-xl-last mb-5 pb-5 mb-xl-0 pb-xl-0 mt-xl-5 pt-xl-5">
                            <div class="text-lg-center">
                                <?php if ($content_section_third["image"]): ?>
                                    <img src="<?php echo $content_section_third["image"]["url"] ?>"
                                         alt="<?php echo @$content_section_third["image"]["alt"] ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start: Instant Payment Link -->
<?php endif; ?>