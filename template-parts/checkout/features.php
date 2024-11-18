<?php
$features = get_field("features");
?>
<section class="security security--alt">
    <div class="container">
        <div class="security-text--grid security-text--grid-four-col">
            <?php if (!empty($features)): foreach ($features as $feature): ?>
                    <div class="security-text--col">
                        <?php if (!empty($feature["icon"])) : ?>
                            <div class="security-icon">
                                <img src="<?php echo $feature["icon"]["url"] ?>"
                                    alt="<?php echo @$feature["icon"]["alt"] ?>">
                            </div>
                        <?php endif; ?>
                        <div class="security-content">
                            <h4><?php echo $feature["title"] ?></h4>
                            <p><?php echo $feature["text"] ?></p>
                        </div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>