<?php
$payment_acquiring_solution_section = get_field("payment_acquiring_solution_section");
if(isset($payment_acquiring_solution_section)):
    $payment_acquiring_solution_section_image = $payment_acquiring_solution_section["image"];
?>
<section class="payment-acquiring-solution">
    <div class="container">
        <div class="row align-items-center justify-content-between justify-content-xxl-start">
            <div class="col-lg-6 col-xl-5">
                <?php if(!empty($payment_acquiring_solution_section_image)): ?>
                <div class="payment-acquiring-solution--img">
                    <img src="<?php echo $payment_acquiring_solution_section_image["url"] ?>" alt="<?php echo @$payment_acquiring_solution_section_image["alt"] ?>">
                </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-6 col-xl-6 col-xxl-5 offset-xxl-1">
                <div class="subtitle"><?php echo $payment_acquiring_solution_section["highlighted_text"] ?></div>
                <h3 class="section-title"><?php echo $payment_acquiring_solution_section["title"] ?></h3>
                <p><?php echo $payment_acquiring_solution_section["text"] ?></p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>