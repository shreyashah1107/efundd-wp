<?php
$corporate_card_section = get_field("corporate_card_section");
if(isset($corporate_card_section)):
?>
<section class="payment-methods payment-methods--cards pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-xxl-6">
                <div class="title-row">
                    <div class="subtitle"><?php echo $corporate_card_section["highlighted_text"] ?></div>
                    <h3 class="section-title section-title--xl has-bg-gradient"><?php echo $corporate_card_section["title"] ?></h3>
                    <?php echo $corporate_card_section["text"] ?>
                </div>
            </div>

            <div class="col-xl-6 col-xxl-5 offset-xxl-1 order-first order-xl-last mb-5 mb-xl-0 pb-5 pb-xl-0">
                <div class="payment-methods--col-img">
                    <div class="image">
                        <?php if(!empty($corporate_card_section["image"])): ?>
                            <img src="<?php echo $corporate_card_section["image"]["url"] ?>" alt="<?php echo @$corporate_card_section["image"]["alt"] ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>