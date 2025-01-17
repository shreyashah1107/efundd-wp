<?php
$global_business_account_section = get_field("global_business_account_section");
if ($global_business_account_section):
    $image = $global_business_account_section["image"];
    ?>
    <section class="worldwide-payments payment-experience global-business-payments">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-10">
                    <div class="title-row">
                        <h3 class="section-title section-title--xl text-uppercase"><?php echo $global_business_account_section["title"] ?></h3>
                        <p><?php echo $global_business_account_section["text"] ?></p>
                        <div class="btn-grp justify-content-center">
                            <?php if (!empty($global_business_account_section["button_text_1"])): ?>
                                <a href="<?php echo @$global_business_account_section["button_link_1"] ?>"
                                   title="<?php echo $global_business_account_section["button_text_1"] ?>"
                                   class="btn btn-light-green"><?php echo $global_business_account_section["button_text_1"] ?></a>
                            <?php endif; ?>
                            <?php if (!empty($global_business_account_section["button_text_2"])): ?>
                                <a href="<?php echo $global_business_account_section["button_link_2"] ?>"
                                   title="<?php echo $global_business_account_section["button_text_2"] ?>"
                                   class="btn btn-outline-light-green"><?php echo $global_business_account_section["button_text_2"] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div>
                        <?php if (!empty($image)): ?>
                            <img src="<?php echo $image["url"] ?>"
                                 alt="<?php echo @$image["alt"] ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>