<?php
$modular_solutions_section = get_field('modular_solutions_section');
if (isset($modular_solutions_section)):
    $modular_solutions_section_image = $modular_solutions_section["image"];
    ?>
    <section class="modular-solutions">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-7 col-xxl-5">
                    <div class="subtitle"><?php echo $modular_solutions_section["highlighted_text"] ?></div>
                    <h2 class="section-title section-title--xl has-bg-gradient"><?php echo $modular_solutions_section["title"] ?></h2>
                    <?php echo $modular_solutions_section["text"] ?>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-5 col-xxl-5 offset-xxl-1 order-first order-lg-last mb-5 mb-lg-0 pb-5 pb-lg-0">
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