<?php
$content_section = get_field("content_section");
if (isset($content_section)):
?>
    <section class="component-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-xxl-5">
                            <div class="key-features">
                                <div class="key-features--item">
                                    <h4>Pre-built payment link</h4>
                                    <p>Launch same day with our ready to go payment link:Embed on your own site or redirect to a Bann hosted payment page. Customise all fonts and colours to match your unique brandEasily add recurring payments and applicable Tax</p>
                                </div>

                                <div class="key-features--item">
                                    <h4>Share-able payment links</h4>
                                    <p>The quickest way to accept payments – no code required Share your payment link over email, Whatsapp, SMS, or any other channelAccept one-time, recurring, or pay-what-you-want payments Convert your link into an embeddable buy button or QR code</p>
                                </div>

                                <div class="key-features--item">
                                    <h4>Built-in payments</h4>
                                    <p>Use our Speedy Checkout Component to display multiple single click payment buttons. We support multiple payment methods including Google Pay, Apple Pay, Paypal and Click - Bannc's single click checkout component.</p>
                                </div>

                                <div class="key-features--item">
                                    <h4>Automatic address collection</h4>
                                    <p>Verify users identities to reduce fraud</p>
                                </div>
                            </div>

                            <?php echo $content_section["list"] ?>
                            <div class="btn-grp">
                                <?php if (!empty($content_section["button_title"])): ?>
                                    <a href="<?php echo @$content_section["button_link"] ?>"
                                        title="<?php echo $content_section["button_title"] ?>"
                                        class="btn btn-light-green"><?php echo $content_section["button_title"] ?></a>
                                <?php endif; ?>
                                <?php if (!empty($content_section["secondary_button_title"])): ?>
                                    <a href="<?php echo $content_section["secondary_button_link"] ?>"
                                        title="<?php echo $content_section["secondary_button_title"] ?>"
                                        class="btn btn-outline-light-green text-dark"><?php echo $content_section["secondary_button_title"] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6 order-first order-xl-last">
                            <div class="text-lg-center">
                                <img src="<?php echo @$content_section["image"]["url"] ?>" alt="<?php echo @$content_section["image"]["alt"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>