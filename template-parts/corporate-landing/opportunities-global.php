<?php
$payment_processing_section = get_field("payment_processing_section");
if (isset($payment_processing_section)):
    $slides = $payment_processing_section["slides"];
    ?>
    <section class="payments payments--slider one-api one-api--global">
        <div class="container">
            <div class="title-row text-center">
                <div class="subtitle"><?php echo $payment_processing_section["highlighted_text"] ?></div>
                <h3 class="section-title section-title--xl has-bg-gradient"><?php echo $payment_processing_section["title"] ?></h3>
                <p><?php echo $payment_processing_section["text"] ?></p>
            </div>
            <?php if ($slides): ?>
                <div class="payments--swiper swiper pb-4">
                    <div class="swiper-wrapper">
                        <?php foreach ($slides as $slide):
                            $image = $slide["image"];
                            ?>
                            <div class="swiper-slide">
                                <div class="payments--col">
                                    <div class="payments--col-header">
                                        <div class="image">
                                            <?php if (!empty($image)): ?>
                                                <img src="<?php echo $image['url'] ?>"
                                                     alt="<?php echo @$image['alt'] ?>"/>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="payments--col-footer">
                                        <div class="payments--col-footer-content">
                                            <h4><?php echo $slide["title"] ?></h4>
                                            <p><?php echo $slide["text"] ?></p>
                                        </div>
                                        <?php if ($slide["button_title"]): ?>
                                            <div class="payments--col-footer-cta">
                                                <a href="<?php echo @$slide["button_link"] ?>" title="<?php echo $slide["button_title"] ?>" class="btn btn-light-green btn-block"><?php echo $slide["button_title"] ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>