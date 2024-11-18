<?php
$account_management_section = get_field("account_management_section");
if (isset($account_management_section)):
    $slides = $account_management_section["slides"];
    ?>
    <section class="account-management">
        <div class="container">
            <div class="title-row text-center">
                <?php if (!empty($account_management_section["highlighted_text"])): ?>
                    <div class="subtitle"><?php echo $account_management_section["highlighted_text"] ?></div>
                <?php endif; ?>
                <h3 class="section-title"><?php echo $account_management_section["title"] ?></h3>
                <p><?php echo $account_management_section["text"] ?></p>
            </div>
            <?php if (!empty($slides)): ?>
                <div class="account-management--swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($slides as $slide):
                            $card = $slide["card"];
                            ?>
                            <div class="swiper-slide">
                                <div class="card-account-management">
                                    <div class="card-account-management--header">
                                        <div class="card-account-management--title">
                                            <?php echo $slide["title"] ?>
                                        </div>
                                        <div class="card-account-management--text">
                                            <?php echo $slide["text"] ?>
                                        </div>
                                    </div>
                                    <?php if (!empty($card)): ?>
                                        <div class="card-account-management--footer">
                                            <div class="analysis-card">
                                                <div class="analysis-card--left">
                                                    <?php if (!empty($card["icon"])): ?>
                                                        <div class="image">
                                                            <img src="<?php echo $card["icon"]["url"]; ?>"
                                                                 alt="<?php echo @$card["icon"]["alt"]; ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="title">
                                                        <h5><?php echo $card["title"] ?></h5>
                                                        <p><?php echo $card["text"] ?></p>
                                                    </div>
                                                </div>
                                                <div class="analysis-card--right">
                                                    <h5><?php echo $card["side_title"] ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="swiper-nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            <?php endif; ?>
    </section>
<?php endif; ?>