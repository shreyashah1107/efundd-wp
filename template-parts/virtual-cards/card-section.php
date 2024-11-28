<?php
$cards_section = get_field('cards_section');
if ($cards_section):
    $cards = $cards_section['cards'];
    ?>
    <!-- Start: Why Choose Us -->
    <section class="why-choose-us">
        <div class="container">
            <div class="title-row">
                <h3 class="section-title has-bg-gradient text-center"><?php echo $cards_section["title"] ?></h3>
            </div>
            <?php if (!empty($cards)): ?>
            <div class="why-choose-us--items">
                <?php foreach ($cards as $card): ?>
                    <div class="card-why-us">
                        <div class="card-why-us--icon">
                            <img src="<?php echo @$card["icon"]["url"] ?>"
                                 alt="<?php echo @$card["icon"]["alt"] ?>">
                        </div>
                        <div class="card-why-us--title"><?php echo $card["title"] ?></div>
                        <div class="card-why-us--text"><?php echo $card["text"] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End: Why Choose Us -->
<?php endif; ?>