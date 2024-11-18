<?php
$corporate_card_section = get_field("corporate_card_section");
if(isset($corporate_card_section)):
?>
<section class="payment-methods pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-10">
                <div class="payment-methods--grid">
                    <div class="payment-methods--col">
                        <div class="payment-methods--col-content">
                            <div class="title-row">
                                <div class="subtitle"><?php echo $corporate_card_section["highlighted_text"] ?></div>
                                <h3 class="section-title has-bg-gradient"><?php echo $corporate_card_section["title"] ?></h3>
                                <?php echo $corporate_card_section["text"] ?>
                            </div>
                        </div>
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
        </div>
    </div>
</section>
<?php endif; ?>