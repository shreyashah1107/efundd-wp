<?php
$eight_content_section = get_field('eight_content_section');
if ($eight_content_section) {
    $title = $eight_content_section["title"];
    $text = $eight_content_section["text"];
    $countries = $eight_content_section["countries"];
    ?>
    <section class="personal-content-section--nine">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="title-row text-center">
                            <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <?php if ($countries) { ?>
                            <div class="country-list--items">
                                <?php foreach ($countries as $country) {
                                    $image = $country["image"];
                                    $link = $country["link"];
                                    ?>
                                    <div class="country-list--item wow fadeInUp" data-wow-delay="0.1s">
                                        <?php if ($image) { ?>
                                            <div class="image">
                                                <img src="<?php echo $image["url"] ?>"
                                                     alt="<?php echo @$image["alt"] ?>">
                                            </div>
                                        <?php } ?>
                                        <div class="text">
                                            <?php if ($link) { ?>
                                                <a href="<?php echo @$link["url"] ?>" title="<?php echo $link["title"] ?>"><?php echo $link["title"] ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>