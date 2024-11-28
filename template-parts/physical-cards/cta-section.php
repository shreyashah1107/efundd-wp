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
                        <div class="payment-process--items d-block">
                            <div class="btn-grp justify-content-center">
                                <?php foreach ($links as $link): ?>
                                    <a href="<?php echo @$link["link"] ?>"
                                       title="<?php echo $link["text"] ?>"
                                       class="btn btn-light-green"><?php echo $link["text"] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>