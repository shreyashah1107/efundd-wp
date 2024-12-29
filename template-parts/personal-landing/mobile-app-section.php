<?php
$mobile_app_section = get_field("mobile_app_section");
if (isset($mobile_app_section)):
    $features = $mobile_app_section["features"];
    ?>
    <section class="mobile-app">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xxl-6">
                            <div class="title-row">
                                <div class="subtitle">GLOBAL</div>
                                <h3 class="section-title section-title--xl has-bg-gradient"><?php echo $mobile_app_section["title"] ?></h3>
                                <p>Save money when you spend and send money globally. All you need, in a single account</p>

                                <div class="btn-grp mt-5">
                                    <a href="#" title="Open an account" class="btn btn-light-green">Open an account</a>
                                    <a href="#" title="Learn more" class="btn btn-outline-light-green text-dark">Learn more</a>
                                </div>
                            </div>
                            <!-- <?php if ($features): ?>
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
                            <?php endif; ?> -->
                        </div>
                        <div class="col-xxl-5 order-first order-xxl-last">
                            <?php if(!empty($mobile_app_section["image"])): ?>
                            <div class="mobile-app--img">
                                <img src="<?php echo $mobile_app_section["image"]["url"] ?>" alt="<?php echo @$mobile_app_section["image"]["alt"] ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>