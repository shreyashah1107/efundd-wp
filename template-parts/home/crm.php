<?php
$crm_sections = get_field("crm_section");
if (isset($crm_sections)):
    $transactions = $crm_sections["transactions"];
    ?>
    <section class="crm">
        <div class="container">
            <div class="crm-content--wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6">
                        <div class="title-row">
                            <div class="subtitle"><?php echo $crm_sections["highlighted_text"] ?></div>
                            <h3 class="section-title"><?php echo $crm_sections["title"] ?></h3>
                            <p><?php echo $crm_sections["text"] ?></p>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="crm-cta--list">
                            <div class="crm-cta--list-item">
                                <div class="account-creation">
                                    <div class="account-creation--title">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/user.svg" alt="User Icon">
                                        </div>
                                        <div class="title">Create Account</div>
                                    </div>

                                    <div class="account-creation--badge">
                                        <span class="text">Free</span>
                                    </div>
                                </div>
                            </div>
                            <?php if (!empty($transactions)):
                                foreach ($transactions as $transaction): ?>
                                    <div class="crm-cta--list-item">
                                        <div class="payment-info">
                                            <div class="payment-info--title">
                                                <?php if (!empty($transaction["icon"])): ?>
                                                    <div class="flag">
                                                        <img src="<?php echo $transaction["icon"]["url"]; ?>"
                                                             alt="<?php echo @$transaction["icon"]["alt"]; ?>">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="currency"><?php echo $transaction["currency"] ?></div>
                                            </div>
                                            <div class="payment-info--account">
                                                <div class="amount"><?php echo $transaction["amount"] ?></div>
                                                <?php if (!empty($transaction["account_icon"])): ?>
                                                    <div class="account-number">
                                              <span class="icon">
                                                <img src="<?php echo $transaction["account_icon"]["url"]; ?>"
                                                     alt="<?php echo @$transaction["account_icon"]["alt"]; ?>">
                                              </span>
                                                        <span>... 4940</span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>