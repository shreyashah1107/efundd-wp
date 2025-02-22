<?php
$security_section = get_field("security_section");
if (isset($security_section)):
    $securities = $security_section["securities"];
?>
    <section class="security">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-xxl-9">
                    <div class="title-row text-center">
                        <h3 class="section-title section-title--xl">Security You Can Trust</h3>
                        <p>You’ve worked hard for your money. Here is how we work hard to keep your account safe.</p>
                    </div>
                </div>
            </div>

            <div class="security-text--grid">
                <?php if (!empty($securities)): foreach ($securities as $security): ?>
                        <div class="security-text--col">
                            <?php if (!empty($security["icon"])) : ?>
                                <div class="security-icon">
                                    <img src="<?php echo $security["icon"]["url"] ?>"
                                        alt="<?php echo @$security["icon"]["alt"] ?>">
                                </div>
                            <?php endif; ?>
                            <div class="security-content">
                                <h4><?php echo $security["title"] ?></h4>
                                <p><?php echo $security["text"] ?></p>
                            </div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>