<?php
$security_section = get_field("ninth_content_section");
if (isset($security_section)):
    $title = $security_section["title"];
    $text = $security_section["text"];
    $securities = $security_section["lists"];
?>
    <section class="security">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-xxl-9">
                    <div class="title-row text-md-center">
                        <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                        <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <div class="security-text--grid">
                        <?php if (!empty($securities)): foreach ($securities as $security): ?>
                                <div class="security-text--col wow fadeInUp" data-wow-delay="0.2s">
                                    <?php if (!empty($security["icon"])) : ?>
                                        <div class="security-icon">
                                            <img src="<?php echo $security["icon"]["url"] ?>"
                                                alt="<?php echo @$security["icon"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="security-content">
                                        <p><?php echo $security["text"] ?></p>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>