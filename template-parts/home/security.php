<?php
$security_section = get_field("security_section");
if (isset($security_section)):
    $securities = $security_section["securities"];
    ?>
    <section class="security">
        <div class="container">
            <div class="title-row text-center">
                <div class="subtitle"><?php echo $security_section["highlighted_text"] ?></div>
                <h3 class="section-title has-bg-gradient"><?php echo $security_section["title"] ?></h3>
                <p><?php echo $security_section["text"] ?></p>
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
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>