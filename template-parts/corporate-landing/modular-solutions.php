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
                        <a href="#" title="Accept payments" class="btn btn-light-green">Accept payments</a>
                        <a href="#" title="Learn More" class="btn btn-light-green">Learn More</a>
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