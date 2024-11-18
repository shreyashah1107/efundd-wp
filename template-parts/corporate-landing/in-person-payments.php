<?php
$in_person_payment_section = get_field('in_person_payment_section');
 $in_person_payment_section_image = $in_person_payment_section["image"];
?>
<section class="in-person-payments">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 col-xxl-5">
                <div class="title-row">
                    <div class="subtitle"><?php echo $in_person_payment_section["highlighted_text"] ?></div>
                    <h3 class="section-title"><?php echo $in_person_payment_section["title"] ?></h3>
                    <p><?php echo $in_person_payment_section["text"] ?></p>
                </div>
                <div class="btn-grp">
                    <a href="#" title="Order now" class="btn btn-light-green">Order now</a>
                    <a href="#" title="Process payments" class="btn btn-light-green">Process payments</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-6 col-xxl-5 offset-xxl-1 order-first order-lg-last mb-5 mb-lg-0 pb-5 pb-lg-0">
                <?php if(isset($in_person_payment_section_image)): ?>
                <div class="in-person-payment--img text-lg-center">
                    <img src="<?php echo $in_person_payment_section_image["url"] ?>" alt="<?php echo @$in_person_payment_section_image["slt"] ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>