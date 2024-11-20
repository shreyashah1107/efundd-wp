<?php
$payment_link_section_dark = get_field('payment_link_section_dark');
if ($payment_link_section_dark):
?>
  <section class="compatibility">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-11">
          <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 col-xxl-6">
              <div class="title-row">
                <div class="subtitle"><?php echo @$payment_link_section_dark["highlighted_text"] ?></div>
                <h3 class="section-title has-bg-gradient"><?php echo @$payment_link_section_dark["title"] ?></h3>
                <p><?php echo @$payment_link_section_dark["text"] ?></p>

                <div class="btn-grp">
                  <?php if ($payment_link_section_dark["button_text_1"]): ?>
                    <a href="<?php echo @$payment_link_section_dark["button_link_1"] ?>"
                      title="<?php echo $payment_link_section_dark["button_text_1"] ?>"
                      class="btn btn-light-green"><?php echo $payment_link_section_dark["button_text_1"] ?></a>
                  <?php endif; ?>
                  <?php if ($payment_link_section_dark["button_text_2"]): ?>
                    <a href="<?php echo @$payment_link_section_dark["button_link_2"] ?>"
                      title="<?php echo $payment_link_section_dark["button_text_2"] ?>"
                      class="btn btn-light-green"><?php echo $payment_link_section_dark["button_text_2"] ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-lg-5 col-xl-6 col-xxl-6 mb-5 mb-xl-0 pb-5 pb-lg-0 order-first order-lg-last">
              <div>
                <?php if ($payment_link_section_dark["image"]): ?>
                  <img src="<?php echo $payment_link_section_dark["image"]["url"] ?>"
                    alt="<?php echo @$payment_link_section_dark["image"]["alt"] ?>">
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>