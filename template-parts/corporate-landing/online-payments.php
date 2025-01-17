<?php
$online_payments_section = get_field('online_payments_section');
if (isset($online_payments_section)):
    $image = $online_payments_section["image"];
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
                <?php if (!empty($image)): ?>
                    <img src="<?php echo $image["url"] ?>"
                         alt="<?php echo @$image["alt"] ?>">
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>