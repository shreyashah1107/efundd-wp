<?php
$cta_section = get_field("cta_section");
if ($cta_section):
?>
  	<section class="find-product">
        <div class="container">
            <div class="text-center">
                <h3 class="section-title has-bg-gradient"><?php echo $cta_section["title"] ?></h3>
                <p><?php echo $cta_section["text"] ?></p>
                <?php if (!empty($cta_section["button_text"])): ?>
                    <div class="btn-grp justify-content-center mt-5">
                        <a href="<?php echo @$cta_section["button_link"] ?>"
                           title="<?php echo $cta_section["button_text"] ?>"
                           class="btn btn-light-green"><?php echo $cta_section["button_text"] ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>