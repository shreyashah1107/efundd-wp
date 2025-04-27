<?php
$fourth_content_section = get_field("fourth_content_section");
if ($fourth_content_section) {
    $title = $fourth_content_section["title"];
    $text = $fourth_content_section["text"];
    $primary_button = $fourth_content_section["primary_button"];
    $secondary_button = $fourth_content_section["secondary_button"];
    ?>
    <section class="multicurrency-wallet-content-section--four">
        <div class="bg-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/multicurrency-wallet/bg-four.png"
                 alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row align-items-center justify-content-center justify-content-xl-between">
                            <div class="col-lg-6 col-xl-6 col-xxl-6">
                                <div class="title-row mb-5 text-center text-lg-start">
                                    <h3 class="section-title section-title--xl text-anime-style-3 mb-lg-5"><?php echo $title ?></h3>
                                    <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                </div>
                                <div class="btn-grp justify-content-center justify-content-lg-start">
                                    <?php if ($primary_button): ?>
                                        <a href="<?php echo $primary_button["link"] ?>"
                                           title="<?php echo $primary_button["title"] ?>"
                                           class="btn btn-bright-green wow fadeInUp"
                                           data-wow-delay="0.2s"><?php echo $primary_button["title"] ?></a>
                                    <?php endif; ?>
                                    <?php if ($secondary_button): ?>
                                        <a href="<?php echo $secondary_button["link"] ?>"
                                           title="<?php echo $secondary_button["title"] ?>"
                                           class="btn btn-white wow fadeInUp"
                                           data-wow-delay="0.4s"><?php echo $secondary_button["title"] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-10 col-md-9 col-lg-6 col-xl-6 col-xxl-6 mt-5 mt-lg-0 pt-5 pt-lg-0">
                                <div class="tool--items">
                                    <div class="tool--item wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/multicurrency-wallet/tool-1.svg"
                                                 alt="Image">
                                        </div>
                                        <div class="text">
                                            <p>100% online account accessible anytime, anywhere</p>
                                        </div>
                                    </div>

                                    <div class="tool--item wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/multicurrency-wallet/tool-2.svg"
                                                 alt="Image">
                                        </div>
                                        <div class="text">
                                            <p>Billing tool</p>
                                        </div>
                                    </div>

                                    <div class="tool--item wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/multicurrency-wallet/tool-3.svg"
                                                 alt="Image">
                                        </div>
                                        <div class="text">
                                            <p>Preparation for simplified accounting</p>
                                        </div>
                                    </div>

                                    <div class="tool--item wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/multicurrency-wallet/tool-4.svg"
                                                 alt="Image">
                                        </div>
                                        <div class="text">
                                            <p>Local sort code and international IBAN</p>
                                        </div>
                                    </div>

                                    <div class="tool--item wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/multicurrency-wallet/tool-5.svg"
                                                 alt="Image">
                                        </div>
                                        <div class="text">
                                            <p>Customer service based in UK, available 7 days a week</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>