<?php
$in_person_payment_section = get_field('in_person_payment_section');
 $in_person_payment_section_image = $in_person_payment_section["image"];
?>
<section class="in-person-payments">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 col-xxl-6">
                <div class="title-row">
                    <div class="subtitle"><?php echo $in_person_payment_section["highlighted_text"] ?></div>
                    <h2 class="section-title section-title--xl"><?php echo $in_person_payment_section["title"] ?></h2>
                    <div class="title-row"><p><?php echo $in_person_payment_section["text"] ?></p></div>
                </div>
                <div class="btn-grp">
                    <?php if (!empty($in_person_payment_section["button_text_1"])): ?>
                        <a href="<?php echo @$in_person_payment_section["button_link_1"] ?>"
                           title="<?php echo $in_person_payment_section["button_text_1"] ?>"
                           class="btn btn-light-green"><?php echo $in_person_payment_section["button_text_1"] ?></a>
                    <?php endif; ?>
                    <?php if (!empty($in_person_payment_section["button_text_2"])): ?>
                        <a href="<?php echo $in_person_payment_section["button_link_2"] ?>"
                           title="<?php echo $in_person_payment_section["button_text_2"] ?>"
                           class="btn btn-outline-light-green"><?php echo $in_person_payment_section["button_text_2"] ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-6 col-xxl-6 order-first order-lg-last mb-5 mb-lg-0 pb-5 pb-lg-0">
                <?php if(isset($in_person_payment_section_image)): ?>
                <div class="in-person-payment--img text-lg-center">
                    <img src="<?php echo $in_person_payment_section_image["url"] ?>" alt="<?php echo @$in_person_payment_section_image["alt"] ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>