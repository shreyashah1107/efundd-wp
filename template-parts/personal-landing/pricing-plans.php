<?php
$pricing_plans_section = get_field("pricing_plans_section");
if (isset($pricing_plans_section)):
    $plans = $pricing_plans_section["plans"];
    ?>
    <section class="pricing-plan">
        <div class="container">
            <div class="pricing-plan--grid">
                <?php foreach ($plans as $plan): ?>
                    <div class="card-pricing">
                        <div class="card-pricing--header">
                            <div class="saving"><span><?php echo $plan["highlighted_text"] ?></span></div>
                            <div class="card-pricing--img">
                                <?php if (!empty($plan["image"])): ?>
                                    <img src="<?php echo $plan["image"]["url"] ?>"
                                         alt="<?php echo @$plan["image"]["alt"] ?>">
                                <?php endif; ?>
                            </div>
                            <div class="card-pricing--title"><?php echo $plan["title"] ?></div>
                            <div class="price">
                                <span class="amount"><?php echo $plan["amount"] ?></span>
                                <span>+ VAT Monthly</span>
                            </div>
                            <div class="card-pricing--cta">
                                <a href="<?php echo $plan["button_link"] ?>" title="Open an account"
                                   class="btn btn-black btn-block">Open an account</a>
                            </div>
                        </div>
                        <div class="card-pricing--body">
                            <?php echo $plan["text"] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>