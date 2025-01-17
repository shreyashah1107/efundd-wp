<?php
$crm_sections = get_field("crm_section");
if (isset($crm_sections)):
    $image = $crm_sections["image"];
    ?>
    <section class="crm pb-5">
        <div class="container">
            <div class="crm-content--wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6">
                        <div class="title-row">
                            <div class="subtitle"><?php echo $crm_sections["highlighted_text"] ?></div>
                            <h3 class="section-title section-title--lg text-uppercase"><?php echo $crm_sections["title"] ?></h3>
                            <p><?php echo $crm_sections["text"] ?></p>
                        </div>

                        <div class="btn-grp mt-5">
                            <?php if ($crm_sections["button_text"]): ?>
                                <a href="<?php echo $crm_sections["button_link"] ?>"
                                   title="<?php echo $crm_sections["button_text"] ?>"
                                   class="btn btn-light-green"><?php echo $crm_sections["button_text"] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="crm-cta--list">
                            <?php if (!empty($image)): ?>
                                <img src="<?php echo $image["url"] ?>" alt="<?php echo @$image["alt"] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>