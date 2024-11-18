<?php
$digital_solution_section = get_field("digital_solution_section");
if (isset($digital_solution_section)):
    $solutions = $digital_solution_section["solutions"];
    ?>
    <section class="digital-solution">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xxl-6">
                    <h2 class="section-title"><?php echo $digital_solution_section["title"] ?></h2>
                    <p><?php echo $digital_solution_section["text"] ?></p>
                </div>
            </div>

            <div class="digital-solution--grid">
                <?php if (!empty($solutions)): foreach ($solutions as $solution):
                  $solution_image = $solution["image"];
                    ?>
                    <div class="digital-solution--col">
                        <div class="digital-solution--col-header">
                            <h5><?php echo $solution["title"] ?></h5>
                        </div>
                        <?php if(!empty($solution_image)): ?>
                        <div class="digital-solution--col-footer">
                            <div class="image">
                                <img src="<?php echo $solution_image["url"] ?>" alt="<?php echo @$solution_image["alt"] ?>">
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>