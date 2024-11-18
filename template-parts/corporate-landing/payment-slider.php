<?php
$banking_slider_section = get_field("payments_slider_section");
if (isset($banking_slider_section)):
    $slides = $banking_slider_section["slides"];
    ?>
    <section class="payments payments--slider">
        <div class="container">
            <div class="title-row text-center">
                <div class="subtitle"><?php echo $banking_slider_section["highlighted_text"] ?></div>
                <h3 class="section-title"><?php echo $banking_slider_section["title"] ?></h3>
                <p><?php echo $banking_slider_section["text"] ?></p>
            </div>
            <?php if (isset($slides)): ?>
                <div class="payments--swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($slides as $slide): ?>
                            <div class="swiper-slide">
                                <div class="payments--col">
                                    <div class="payments--col-header">
                                        <h4><?php echo $slide["title"] ?></h4>
                                        <p><?php echo $slide["text"] ?></p>
                                    </div>
                                    <div class="payments--col-footer">
                                        <?php if (!empty($slide["image"])): ?>
                                            <div class="image">
                                                <img src="<?php echo $slide["image"]["url"] ?>"
                                                     alt="<?php echo @$slide["image"]["alt"] ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="swiper-nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            <?php endif; ?>
    </section>
<?php endif; ?>