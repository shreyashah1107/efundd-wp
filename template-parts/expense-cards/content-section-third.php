<?php
$content_section_third = get_field('content_section_third');
if ($content_section_third):
?>
  <section class="checkout">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-10">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-xl-5 mb-5 mb-lg-0">
              <div class="text-lg-center">
                <?php if (!empty($content_section_third["image"])): ?>
                  <img src="<?php echo @$content_section_third["image"]["url"] ?>"
                    alt="<?php echo @$content_section_third["image"]["alt"] ?>">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-lg-6 col-xl-6 col-xxl-6 offset-xxl-1">
              <div class="subtitle"><?php echo $content_section_third["highlighted_text"] ?></div>
              <h3 class="section-title has-bg-gradient"><?php echo $content_section_third["title"] ?></h3>
              <p><?php echo $content_section_third["text"] ?></p>
              <div class="btn-grp">
                <?php if (!empty($content_section_third["button_text_1"])): ?>
                  <a href="<?php echo @$content_section_third["button_link_1"] ?>"
                    title="<?php echo $content_section_third["button_text_1"] ?>"
                    class="btn btn-light-green"><?php echo $content_section_third["button_text_1"] ?></a>
                <?php endif; ?>
                <?php if (!empty($content_section_third["button_text_2"])): ?>
                  <a href="<?php echo $content_section_third["button_link_2"] ?>"
                    title="<?php echo $content_section_third["button_text_2"] ?>"
                    class="btn btn-light-green"><?php echo $content_section_third["button_text_2"] ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>