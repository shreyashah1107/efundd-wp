<?php
$account_management = get_field("account_management");
if(isset($account_management)):
?>
<section class="monitor-transactions">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-xxl-5">
                <div class="monitor-transactions--img mb-5 mb-xl-0">
                    <?php if(!empty($account_management["image"])): ?>
                    <img src="<?php echo $account_management["image"]["url"] ?>" alt="<?php echo @$account_management["image"]["alt"] ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-5 offset-xxl-1">
                <div class="title-row mb-5">
                    <h3 class="section-title section-title--lg"><?php echo $account_management["title"] ?></h3>
                    <p><?php echo $account_management["text"] ?></p>
                </div>
                <div class="btn-grp">
                    <?php if (!empty($account_management["button_text_1"])): ?>
                        <a href="<?php echo @$account_management["button_link_1"] ?>"
                           title="<?php echo $account_management["button_text_1"] ?>"
                           class="btn btn-light-green"><?php echo $account_management["button_text_1"] ?></a>
                    <?php endif; ?>
                    <?php if (!empty($account_management["button_text_2"])): ?>
                        <a href="<?php echo $account_management["button_link_2"] ?>"
                           title="<?php echo $account_management["button_text_2"] ?>"
                           class="btn btn-light-green"><?php echo $account_management["button_text_2"] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>