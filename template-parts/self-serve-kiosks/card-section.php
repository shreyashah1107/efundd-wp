<?php
$cards_section = get_field('grids_section');
if ($cards_section):
    $cards = $cards_section['grids'];
    ?>
    <section class="why-us-alt">
        <div class="container">
            <div class="title-row">
                <h3 class="section-title has-bg-gradient text-center"><?php echo $cards_section["title"] ?></h3>
            </div>
            <?php if (!empty($cards)): ?>
                <div class="why-us-alt--items">
                    <?php foreach ($cards as $card): ?>
                        <div class="card-why-us-alt">
                            <div class="card-why-us-alt--header">
                                <div class="card-why-us-alt--icon">
                                    <img src="<?php echo @$card["icon"]["url"] ?>"
                                         alt="<?php echo @$card["icon"]["alt"] ?>">
                                </div>
                                <div class="card-why-us-alt--title"><?php echo $card["title"] ?></div>
                                <div class="card-why-us-alt--text"><?php echo $card["text"] ?></div>
                            </div>
                            <?php if (!empty($cards_section["button_text"])): ?>
                                <div class="card-why-us-alt--footer">
                                    <a href="<?php echo @$cards_section["button_link"] ?>"
                                       title="<?php echo $cards_section["button_text"] ?>"
                                       class="btn btn-link"><?php echo $cards_section["button_text"] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>