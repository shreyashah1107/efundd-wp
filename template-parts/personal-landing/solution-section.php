<?php
$solutions_section = get_field("solutions_section");
if (isset($solutions_section)):
    $solutions_slides = $solutions_section["slides"];
    ?>
    <section class="money-in-account">
        <div class="container">
            <div class="title-row text-center">
                <h3 class="section-title text-white"><?php echo $solutions_section["title"] ?></h3>
            </div>
            <?php if (!empty($solutions_slides)): ?>
                <div class="account-management--swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($solutions_slides as $solutions_slide):
                            $card = $solutions_slide["card"];
                            ?>
                            <div class="swiper-slide">
                                <div class="card-account-management">
                                    <div class="card-account-management--header">
                                        <div class="card-account-management--title">
                                            <?php echo $solutions_slide["title"] ?>
                                        </div>
                                        <div class="card-account-management--text">
                                            <?php echo $solutions_slide["text"] ?>
                                        </div>
                                    </div>
                                    <div class="card-account-management--footer">
                                        <div class="card-account-management--img">
                                            <div class="crm-cta--list">
                                                <div class="crm-cta--list-item">
                                                    <div class="payment-info">
                                                        <div class="payment-info--title">
                                                            <div class="flag">
                                                                <?php if (!empty($card["icon"])): ?>
                                                                    <img src="<?php echo $card["icon"]["url"] ?>"
                                                                         alt="<?php echo @$card["icon"]["alt"] ?>">
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="currency"><?php echo $card["side_title"] ?></div>
                                                        </div>
                                                        <div class="payment-info--account">
                                                            <div class="amount"><?php echo $card["text"] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        </div>
    </section>
<?php endif; ?>