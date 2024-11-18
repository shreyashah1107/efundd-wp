<?php
$transaction_overview_section = get_field("transaction_overview_section");
if (isset($transaction_overview_section)):
    $transactions = $transaction_overview_section["transactions"];
    ?>
    <section class="transaction-overview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-7 col-xl-5">
                            <h3 class="section-title"><?php echo $transaction_overview_section["title"] ?></h3>
                            <p><?php echo $transaction_overview_section["text"] ?></p>
                            <?php if (!empty($transaction_overview_section["button_text"])): ?>
                                <div class="btn-grp">
                                    <a href="<?php echo @$transaction_overview_section["button_link"] ?>"
                                       title="<?php echo $transaction_overview_section["button_text"] ?>"
                                       class="btn btn-light-green"><?php echo $transaction_overview_section["button_text"] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-xl-6">
                            <div class="transaction-overview--grid">
                                <?php if (!empty($transactions)):
                                    foreach ($transactions as $transaction): ?>
                                        <div class="transaction-overview--col">
                                            <div class="card-transaction-overview">
                                                <?php if (!empty($transaction["icon"])): ?>
                                                    <div class="flag">
                                                        <img src="<?php echo $transaction["icon"]["url"]; ?>"
                                                             alt="<?php echo @$transaction["icon"]["alt"]; ?>">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="amount"><?php echo $transaction["amount"] ?></div>
                                                <div class="currency"><?php echo $transaction["currency"] ?></div>
                                            </div>
                                        </div>
                                    <?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>