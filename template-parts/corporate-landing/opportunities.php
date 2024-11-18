<?php
$opportunities_section = get_field("opportunities_section");
if (isset($opportunities_section)):
    $slides = $opportunities_section["opportunities"];
    ?>
    <section class="payments payments--slider one-api">
        <div class="container">
            <div class="title-row text-center">
                <div class="subtitle"><?php echo $opportunities_section["highlighted_text"] ?></div>
                <h3 class="section-title has-bg-gradient"><?php echo $opportunities_section["title"] ?></h3>
                <p><?php echo $opportunities_section["text"] ?></p>
            </div>
            <?php if ($slides): ?>
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