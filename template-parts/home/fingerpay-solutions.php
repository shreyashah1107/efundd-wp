<?php
$fingerpay_solution_section = get_field("fingerpay_solution_section");
if (isset($fingerpay_solution_section)):
    ?>
    <section class="fingerpay-solution">
        <div class="container">
            <div class="row align-items-center justify-content-between justify-content-xxl-start">
                <div class="col-lg-6 col-xl-5">
                    <?php if(!empty($fingerpay_solution_section["image"])): ?>
                    <div class="fingerpay-solution--img">
                        <img src="<?php echo $fingerpay_solution_section["image"]["url"] ?>"
                             alt="<?php echo @$fingerpay_solution_section["image"]["alt"] ?>">
                    </div>
                    <?php endif; ?>
                </div>

                <div class="col-lg-6 col-xl-6 col-xxl-5 offset-xxl-1">
                    <h3 class="section-title"><?php echo $fingerpay_solution_section["title"] ?></h3>
                    <p><?php echo $fingerpay_solution_section["text"] ?></p>
                    <div>
                        <?php if (!empty($fingerpay_solution_section["button_link"])): ?>
                            <a href="<?php echo $fingerpay_solution_section["button_link"] ?>" title="Learn More"
                               class="btn btn-link">
                                <span class="text">Learn More</span>
                                <span class="icon"></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>