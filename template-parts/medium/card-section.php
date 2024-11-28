<?php
$cards_section = get_field('cards_section');
if ($cards_section):
    $cards = $cards_section['cards'];
    ?>
    <section class="why-choose-us contract-management-solution">
        <div class="container">
            <div class="title-row">
                <h3 class="section-title has-bg-gradient text-center"><?php echo $cards_section["title"] ?></h3>
                <p class="text-center">Manage your contracts and licenses to effectively plan for your future renewals in a single panel.</p>
            </div>
            <?php if (!empty($cards)): ?>
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="why-choose-us--items">
                            <?php foreach ($cards as $card): ?>
                                <div class="card-why-us">
                                    <div class="card-why-us--icon">
                                        <img src="<?php echo @$card["icon"]["url"] ?>"
                                            alt="<?php echo @$card["icon"]["alt"] ?>">
                                    </div>
                                    <div class="card-why-us--title"><?php echo $card["title"] ?></div>
                                    <div class="card-why-us--text"><?php echo $card["text"] ?></div>

                                    <div class="btn-grp mt-5 pt-5">
                                        <a href="#" title="Launch Demo" class="btn btn-light-green">Launch Demo</a>
                                    </div>

                                    <!-- <?php if (!empty($cards_section["button_text"])): ?>
                                        <div class="btn-grp justify-content-center mt-5">
                                            <a href="<?php echo @$cards_section["button_link"] ?>"
                                            title="<?php echo $cards_section["button_text"] ?>"
                                            class="btn btn-light-green"><?php echo $cards_section["button_text"] ?></a>
                                        </div>
                                    <?php endif; ?> -->
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>