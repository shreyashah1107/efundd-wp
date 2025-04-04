<?php
$ninth_content_section = get_field('ninth_content_section');
if ($ninth_content_section) {
    $title = $ninth_content_section['title'];
    $text = $ninth_content_section['text'];
    $cards = $ninth_content_section['cards'];
    ?>
    <section class="corporate-content-section--eleven">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-9 col-xl-8 col-xxl-7">
                        <div class="title-row">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>

                            <p class="mt-4 mt-lg-5 wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                </div>
                <?php if (!empty($cards)) { ?>
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <div class="payment-acceleration--items mt-5">
                                <?php
                                $delay = 0.1;
                                foreach ($cards as $card) {
                                    $delay = 0.1 + $delay;
                                    $title = $card['title'];
                                    $text = $card['text'];
                                    $primary_button = $card['primary_button'];
                                    $secondary_button = $card['secondary_button'];
                                    ?>
                                    <div class="payment-acceleration--item wow fadeInUp" data-wow-delay="<?php echo $delay ?>s">
                                        <div class="content-text">
                                            <h4><?php echo $title ?></h4>
                                            <p><?php echo $text ?></p>
                                        </div>
                                        <div class="content-cta">
                                            <?php if ($primary_button) { ?>
                                                <a href="<?php echo $primary_button["url"] ?>"
                                                   title="<?php echo $primary_button["title"] ?>"
                                                   class="btn btn-outline-bright-green"><?php echo $primary_button["title"] ?></a>
                                            <?php } ?>
                                            <?php if ($secondary_button) { ?>
                                                <a href="<?php echo $secondary_button["url"] ?>"
                                                   title="<?php echo $secondary_button["title"] ?>"
                                                   class="btn btn-link btn-link--bright-green"><?php echo $secondary_button["title"] ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>