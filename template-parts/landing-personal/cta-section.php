<?php
$cta_section = get_field("cta_section");
if (isset($cta_section)):
?>
  <section class="cta">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-xxl-8">
          <div class="cta--content-wrapper">
            <div class="cta--content">
              <h3 class="section-title text-white">Everything you need to send and receive payments globally</h3>

              <p>Simplify your global transactions, and manage your personal finances conveniently — all in one place with PaayCo.</p>

              <div class="btn-grp justify-content-center">
                <?php if (!empty($cta_section["button_text_1"])): ?>
                  <a href="<?php echo @$cta_section["button_link_1"] ?>"
                    title="<?php echo $cta_section["button_text_1"] ?>"
                    class="btn btn-bright-green"><?php echo $cta_section["button_text_1"] ?></a>
                <?php endif; ?>
                <?php if (!empty($cta_section["button_text_2"])): ?>
                  <a href="<?php echo $cta_section["button_link_2"] ?>"
                    title="<?php echo $cta_section["button_text_2"] ?>"
                    class="btn btn-white"><?php echo $cta_section["button_text_2"] ?></a>
                <?php endif; ?>
              </div>
            </div>
            <div class="cta--img">
              <?php if (!empty($cta_section["image"])): ?>
                <img src="<?php echo $cta_section["image"]["url"]; ?>"
                  alt="<?php echo @$cta_section["image"]["alt"]; ?>">
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>