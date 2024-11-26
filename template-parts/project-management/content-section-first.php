<?php
$content_section_first = get_field('content_section_first');
if (isset($content_section_first)):
    ?>
    <!-- Start: Payment Link -->
    <section class="payment-link">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-6 col-xxl-6">
                            <div class="title-row">
                                <div class="subtitle"><?php echo $content_section_first["highlighted_text"] ?></div>
                                <h3 class="section-title has-bg-gradient"><?php echo $content_section_first["title"] ?></h3>
                                <p><?php echo $content_section_first["text"] ?></p>
                            </div>
                            <div class="btn-grp">
                                <?php if (!empty($content_section_first["button_title"])): ?>
                                    <a href="<?php echo @$content_section_first["button_link"] ?>"
                                       title="<?php echo $content_section_first["button_title"] ?>"
                                       class="btn btn-light-green"><?php echo $content_section_first["button_title"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-5 mb-5 mb-xl-0 pb-5 pb-lg-0 offset-xxl-1 order-first order-lg-last">
                            <?php if (!empty($content_section_first["image"])): ?>
                                <div>
                                    <img src="<?php echo $content_section_first["image"]["url"] ?>"
                                         alt="<?php echo @$content_section_first["image"]["alt"] ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Payment Link -->
<?php endif; ?>