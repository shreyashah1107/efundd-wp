<?php
$partners_section = get_field('partners_section');
if (isset($partners_section)):
    $partners = $partners_section["partners"];
    ?>
    <section class="partners">
        <div class="container">
            <div class="title-row text-center">
                <h3 class="section-title section-title--xl"><?php echo $partners_section["title"] ?></h3>
                <p><?php echo $partners_section["subtitle"] ?></p>
            </div>

            <div class="partner--swiper swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($partners as $partner): ?>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo $partner["image"]["url"] ?>" alt="<?php echo @$partner["image"]["alt"] ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
