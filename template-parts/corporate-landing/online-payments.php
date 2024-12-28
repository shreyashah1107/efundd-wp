<?php
$online_payments_section = get_field('online_payments_section');
if (isset($online_payments_section)):
    $card_section = $online_payments_section["card_section"];
    $flag = $card_section["flag"];
    ?>
    <section class="online-payments online-payments-smart--cards">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="title-row">
                        <h3 class="section-title"><?php echo $online_payments_section["title"] ?></h3>
                        <p><?php echo $online_payments_section["text"] ?></p>
                    </div>
                    <div class="btn-grp">
                        <a href="<?php echo $online_payments_section["button_link_1"] ?>"
                        title="<?php echo $online_payments_section["button_text_1"] ?>"
                        class="btn btn-light-green"><?php echo $online_payments_section["button_text_1"] ?></a>
                        <a href="<?php echo $online_payments_section["button_link_2"] ?>"
                        title="<?php echo $online_payments_section["button_text_2"] ?>"
                        class="btn btn-outline-light-green"><?php echo $online_payments_section["button_text_2"] ?></a>
                    </div>
                </div>
            </div>
            <div class="smart-card--img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/smart-card-1.png" alt="<?php _e("Image", "darwin") ?>">
            </div>
        </div>
    </section>
<?php endif; ?>