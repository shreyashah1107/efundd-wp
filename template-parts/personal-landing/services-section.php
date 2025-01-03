<?php
$services_section = get_field("services_section");
if (isset($services_section)):
    $services = $services_section["services"];
    ?>
    <section class="payments  payments--slider">
        <div class="container">
            <div class="title-row text-center">
                <?php if (!empty($services_section["highlighted_text"])): ?>
                    <div class="subtitle"><?php echo $services_section["highlighted_text"] ?></div>
                <?php endif; ?>
                <h3 class="section-title section-title--xl has-bg-gradient"><?php echo $services_section["title"] ?></h3>
                <p><?php echo $services_section["subtitle"] ?></p>
            </div>
            <div class="payments--swiper swiper">
                <div class="swiper-wrapper">
                    <?php if (!empty($services)):
                        foreach ($services as $service): ?>
                            <div class="swiper-slide">
                                <div class="payments--col">
                                    <div class="payments--col-header">
                                        <h4><?php echo $service["title"] ?></h4>
                                        <p><?php echo $service["text"] ?></p>
                                    </div>
                                    <div class="payments--col-footer">
                                        <?php if (!empty($service["image"])): ?>
                                            <div class="image">
                                                <img src="<?php echo $service["image"]["url"] ?>"
                                                     alt="<?php echo @$service["image"]["alt"] ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                </div>

                <div class="swiper-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>