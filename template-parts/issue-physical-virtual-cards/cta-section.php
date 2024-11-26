<?php
$cta_sections = get_field('cta_sections');
if ($cta_sections):
    $links = $cta_sections["ctas"];
    ?>
    <section class="payment-processing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8 col-xxl-6">
                    <div class="text-center">
                        <h3 class="section-title"><?php echo $cta_sections["title"] ?></h3>
                    </div>
                    <?php if (!empty($links)): ?>
                        <div class="payment-process--items">
                            <?php foreach ($links as $link): ?>
                                <a href="<?php echo @$link["url"] ?>"
                                   title="<?php echo @$link["text"] ?>" class="payment-process--item">
                                    <div class="icon">
                                        <?php if (!empty($link["icon"])): ?>
                                            <img src="<?php echo @$link["icon"]["url"] ?>"
                                                 alt="<?php echo @$link["icon"]["alt"] ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="text"><?php echo @$link["text"] ?></div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>