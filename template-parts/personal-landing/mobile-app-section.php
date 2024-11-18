<?php
$mobile_app_section = get_field("mobile_app_section");
if (isset($mobile_app_section)):
    $features = $mobile_app_section["features"];
    ?>
    <section class="mobile-app">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xxl-5">
                    <h3 class="section-title has-bg-gradient"><?php echo $mobile_app_section["title"] ?></h3>
                    <?php if ($features): ?>
                        <ul class="app-feature--list app-feature--list-icons">
                            <?php foreach ($features as $feature): ?>
                                <li>
                                    <?php if (!empty($feature["icon"])): ?>
                                        <div class="icon">
                                            <img src="<?php echo $feature["icon"]["url"] ?>" alt="<?php echo @$feature["icon"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="text"><?php echo $feature["text"] ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-xxl-6 order-first order-xxl-last">
                    <?php if(!empty($mobile_app_section["image"])): ?>
                    <div class="mobile-app--img">
                        <img src="<?php echo $mobile_app_section["image"]["url"] ?>" alt="<?php echo @$mobile_app_section["image"]["alt"] ?>">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>