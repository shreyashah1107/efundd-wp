<?php
$sixth_content_section = get_field("sixth_content_section");
if ($sixth_content_section) {
    $title = $sixth_content_section["title"];
    $text = $sixth_content_section["text"];
    $primary_button = $sixth_content_section["primary_button"];
    $secondary_button = $sixth_content_section["secondary_button"];
    ?>
    <section class="payment-link-content-section--six">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-10 col-xxl-12 text-center">
                                <div class="title-row mb-4">
                                    <h3 class="section-title section-title--xl mb-5 text-anime-style-3"><?php echo $title ?></h3>

                                    <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                </div>
                                <div class="btn-grp justify-content-center mt-5 pt-md-5">
                                    <?php if ($primary_button): ?>
                                        <a href="<?php echo $primary_button["link"] ?>"
                                           title="<?php echo $primary_button["title"] ?>"
                                           class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s"><?php echo $primary_button["title"] ?></a>
                                    <?php endif; ?>
                                    <?php if ($secondary_button): ?>
                                        <a href="<?php echo $secondary_button["link"] ?>"
                                           title="<?php echo $secondary_button["title"] ?>"
                                           class="btn btn-outline-white wow fadeInUp"
                                           data-wow-delay="0.4s"><?php echo $secondary_button["title"] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>