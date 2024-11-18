<?php
$banking_slider_section = get_field("banking_slider_section");
if (isset($banking_slider_section)):
    $slides = $banking_slider_section["slides"];
    ?>
    <section class="payments payments--slider">
        <div class="container">
            <div class="title-row text-center">
                <h3 class="section-title has-bg-gradient"><?php echo $banking_slider_section["title"] ?></h3>
            </div>
            <?php  if ($slides): ?>
            <div class="payments--swiper swiper pb-0">
                <div class="swiper-wrapper">
                   <?php foreach ($slides as $slide): ?>
                    <div class="swiper-slide">
                        <div class="payments--col">
                            <div class="payments--col-header">
                                <h4><?php echo $slide["title"] ?></h4>
                            </div>
                            <div class="payments--col-footer">
                                <?php if (!empty($slide["image"])): ?>
                                <div class="image">
                                    <img src="<?php echo $slide["image"]["url"] ?>" alt="<?php echo @$slide["image"]["alt"] ?>">
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
    </section>
<?php endif; ?>