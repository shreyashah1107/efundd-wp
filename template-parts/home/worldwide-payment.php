<?php
$worldwide_account_section = get_field("worldwide_account_section");
if (isset($worldwide_account_section)):
    $transactions = $worldwide_account_section["transactions"];
    ?>
    <section class="worldwide-payments">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-xxl-5">
                            <div class="currency--list">
                                <?php if (!empty($transactions)):
                                    foreach ($transactions as $transaction): ?>
                                        <div class="currency--list-item">
                                            <div class="country">
                                                <?php if (!empty($transaction["icon"])): ?>
                                                    <div class="flag">
                                                        <img src="<?php echo $transaction["icon"]["url"]; ?>"
                                                             alt="<?php echo @$transaction["icon"]["alt"]; ?>">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="name">
                                                    <div class="currency"><?php echo $transaction["currency"] ?></div>
                                                    <div class="currency-alias"><?php echo $transaction["currency_alias"] ?></div>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                <div class="large"><?php echo $transaction["amount"] ?></div>
                                                <div class="small"><?php echo $transaction["amount"] ?></div>
                                            </div>
                                        </div>
                                    <?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6 order-first order-xl-last">
                            <h3 class="section-title"><?php echo $worldwide_account_section["title"] ?></h3>
                            <p><?php echo $worldwide_account_section["text"] ?></p>
                            <div class="btn-grp">
                                <?php if (!empty($worldwide_account_section["button_text_1"])): ?>
                                    <a href="<?php echo @$worldwide_account_section["button_link_1"] ?>"
                                       title="<?php echo $worldwide_account_section["button_text_1"] ?>"
                                       class="btn btn-light-green"><?php echo $worldwide_account_section["button_text_1"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($worldwide_account_section["button_text_2"])): ?>
                                    <a href="<?php echo $worldwide_account_section["button_link_2"] ?>"
                                       title="<?php echo $worldwide_account_section["button_text_2"] ?>"
                                       class="btn btn-light-green"><?php echo $worldwide_account_section["button_text_2"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>