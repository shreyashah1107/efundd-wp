<?php
$safegaurd_section = get_field('safegaurd_section');
if ($safegaurd_section):
    $grids = $safegaurd_section['grids'];
    ?>
    <section class="safeguard pb-5">
        <div class="container">
            <div class="title-row text-center">
                <div class="subtitle"><?php echo $safegaurd_section["highlighted_text"] ?></div>
                <h3 class="section-title section-title--lg text-uppercase"><?php echo $safegaurd_section["title"] ?></h3>
                <p><?php echo $safegaurd_section["subtitle"] ?></p>
            </div>
            <?php if ($grids): ?>
                <div class="safeguard--items">
                    <?php foreach ($grids as $grid):
                        $image = $grid["image"];
                        ?>
                        <div class="card-safeguard">
                            <div class="card-safeguard--icon">
                                <img src="<?php echo $image["url"] ?>"
                                     alt="<?php _e("Image", "darwin") ?>">
                            </div>
                            <div class="card-safeguard--title"><?php echo $grid["title"] ?></div>
                            <div class="card-safeguard--text"><?php echo $grid["text"] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if ($safegaurd_section["button_text"]): ?>
                <div class="safeguard--cta text-center mt-md-5 pt-5">
                    <a href="<?php echo $safegaurd_section["button_link"] ?>" title="<?php echo $safegaurd_section["button_text"] ?>"
                       class="btn btn-light-green"><?php echo $safegaurd_section["button_text"] ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>