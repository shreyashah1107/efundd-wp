<?php
$features_section = get_field("features_section");
if ($features_section):
    $features = $features_section['features'];
    ?>
    <section class="send-receive-payments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-row">
                        <h3 class="section-title section-title--xl text-center text-uppercase has-bg-gradient">
                            <?php echo $features_section["title"] ?></h3>
                    </div>

                    <div class="send-receive-payments--grid">
                        <?php if ($features):
                            foreach ($features as $feature):
                                $tabs = $feature["tabs"];
                                $image = $feature["image"];
                                ?>
                                <div class="send-receive-payments--col">
                                    <?php if ($tabs): ?>
                                        <div class="send-receive-payments--col-header">
                                            <ul>
                                                <?php foreach ($tabs as $tab): ?>
                                                    <li><?php echo $tab["text"] ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                    <div class="send-receive-payments--col-body">
                                        <div>
                                            <div class="image">
                                                <?php if ($image): ?>
                                                <img src="<?php echo $image["url"] ?>"
                                                     alt="<?php echo @$image["alt"] ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="content">
                                                <h3><?php echo $feature["title"] ?></h3>
                                                <p><?php echo $feature["text"] ?></p>
                                            </div>
                                        </div>

                                        <div class="send-receive-payments--col-cta">
                                            <?php if ($feature["button_text"]): ?>
                                                <a href="<?php echo $feature["button_link"] ?>"
                                                   title="<?php echo $feature["button_text"] ?>"
                                                   class="btn btn-light-green btn-block"><?php echo $feature["button_text"] ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>