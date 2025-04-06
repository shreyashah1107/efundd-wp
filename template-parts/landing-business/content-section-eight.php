<?php
$eight_content_section = get_field("eight_content_section");
if ($eight_content_section) {
    $currencies = $eight_content_section["currencies"];
    $supported_countries = $eight_content_section["supported_countries"];
    ?>
    <section class="business-content-section--eight">
        <div class="content-wrapper">
            <?php if ($currencies) { ?>
                <div class="flags-row flags-row--one wow fadeInUp" data-wow-delay="0.2s">
                    <?php foreach ($currencies as $currency) {
                        ?>
                        <div class="image">
                            <img src="<?php echo $currency["url"] ?>"
                                 alt="<?php echo @$currency["alt"] ?>">
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if ($supported_countries) { ?>
                <div class="flags-row flags-row--two mt-lg-5 wow fadeInUp" data-wow-delay="0.4s">
                    <?php foreach ($supported_countries as $supported_country) { ?>
                        <div class="image">
                            <img src="<?php echo $supported_country["url"] ?>"
                                 alt="<?php echo @$supported_country["alt"] ?>">
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>