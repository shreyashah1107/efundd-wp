<?php
$payments_section = get_field("payments_section");
if ($payments_section):
$cards = $payments_section["cards"];
?>
  	<section class="transaction-overview--wrapper">
        <div class="container">
            <div class="transaction-overview">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-7 col-xl-5">
                                <h3 class="section-title"><?php echo $payments_section["title"] ?></h3>
                                <p><?php echo $payments_section["text"] ?></p>
                                <?php if (!empty($payments_section["button_text"])): ?>
                                    <div class="btn-grp">
                                        <a href="<?php echo $payments_section["button_link"] ?>"
                                           title="<?php echo $payments_section["button_text"] ?>"
                                           class="btn btn-light-green"><?php echo $payments_section["button_text"] ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-xl-6">
                                <?php if (isset($cards)): ?>
                                    <div class="transaction-overview--grid">
                                        <?php foreach ($cards as $card): ?>
                                            <div class="transaction-overview--col">
                                                <div class="card-transaction-overview">
                                                    <?php if (!empty($card["icon"])): ?>
                                                        <div class="flag">
                                                            <img src="<?php echo $card["icon"]["url"] ?>"
                                                                 alt="<?php echo @$card["icon"]["alt"] ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="amount"><?php echo $card["amount"] ?></div>
                                                    <div class="currency"><?php echo $card["currency"] ?></div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>