<?php
$pricing_plans_section = get_field("pricing_plans_section");
if ($pricing_plans_section):
$plans = $pricing_plans_section["plans"];
?>
  	<section class="choose-card-reader">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="section-title has-bg-gradient"><?php echo $pricing_plans_section["title"] ?></h3>
                    </div>
                    <?php if (isset($plans)): ?>
                        <div class="choose-card-reader-grid">
                            <?php foreach ($plans as $plan): ?>
                                <div class="choose-card-reader--col">
                                    <div class="card card-choose-card-reader">
                                        <div>
                                            <?php if (!empty($plan["image"])): ?>
                                                <div class="card-img">
                                                    <img class="card-img-top" src="<?php echo $plan["image"]["url"] ?>"
                                                         alt="<?php echo @$plan["image"]["alt"] ?>">
                                                </div>
                                            <?php endif; ?>

                                            <div class="card-header">
                                                <div class="card-title"><?php echo $plan["title"] ?></div>
                                                <div class="price"><?php echo $plan["amount"] ?></div>
                                                <a href="<?php echo @$plan["button_link"] ?>" title="Order now"
                                                   class="btn btn-block btn-light-green">Order
                                                    now</a>
                                            </div>
                                            <div class="card-body">
                                                <?php echo $plan["text"] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>