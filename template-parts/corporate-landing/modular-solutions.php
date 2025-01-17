<?php
$modular_solutions_section = get_field('modular_solutions_section');
if (isset($modular_solutions_section)):
    $modular_solutions_section_image = $modular_solutions_section["image"];
    ?>
    <section class="modular-solutions">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-7 col-xxl-7">
                    <div class="subtitle"><?php echo $modular_solutions_section["highlighted_text"] ?></div>
                    <h2 class="section-title section-title--xl"><?php echo $modular_solutions_section["title"] ?></h2>
                    <div class="title-row"><p><?php echo $modular_solutions_section["text"] ?></p></div>

                    <div class="btn-grp mt-5">
                        <?php if (!empty($modular_solutions_section["button_text_1"])): ?>
                            <a href="<?php echo @$modular_solutions_section["button_link_1"] ?>"
                               title="<?php echo $modular_solutions_section["button_text_1"] ?>"
                               class="btn btn-light-green"><?php echo $modular_solutions_section["button_text_1"] ?></a>
                        <?php endif; ?>
                        <?php if (!empty($modular_solutions_section["button_text_2"])): ?>
                            <a href="<?php echo $modular_solutions_section["button_link_2"] ?>"
                               title="<?php echo $modular_solutions_section["button_text_2"] ?>"
                               class="btn btn-outline-light-green text-dark"><?php echo $modular_solutions_section["button_text_2"] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-5 col-xxl-5 order-first order-lg-last mb-5 mb-lg-0 pb-5 pb-lg-0">
                    <div class="modular-solutions--img text-lg-center">
                        <?php if(!empty($modular_solutions_section_image)): ?>
                            <img src="<?php echo $modular_solutions_section_image["url"] ?>"
                                 alt="<?php echo @$modular_solutions_section_image["alt"] ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>