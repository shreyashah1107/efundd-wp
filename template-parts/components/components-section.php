<?php
$components_section = get_field('components_section');
if (isset($components_section)):
    ?>
    <section class="online-payments components-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-5 mb-5 mb-lg-0 pb-5 pb-lg-0">
                    <?php if (isset($components_section["image"])): ?>
                        <img src="<?php echo @$components_section["image"]["url"] ?>" alt="<?php echo @$components_section["image"]["alt"] ?>">
                    <?php endif; ?>
                </div>
                <div class="col-lg-7 col-xl-6 col-xxl-5 offset-xxl-1">
                    <div class="title-row">
                        <div class="subtitle"><?php echo $components_section["subtitle"] ?></div>
                        <h3 class="section-title"><?php echo $components_section["title"] ?></h3>
                        <p><?php echo $components_section["text"] ?></p>
                    </div>
                    <?php if ($components_section["button_text"]): ?>
                        <div class="btn-grp">
                            <a href="<?php echo @$components_section["button_link"] ?>"
                               title="<?php echo $components_section["button_text"] ?>"
                               class="btn btn-light-green btn-rd-15"><?php echo $components_section["button_text"] ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>