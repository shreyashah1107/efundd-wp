<?php
$cta_section = get_field("cta_section");
if (isset($cta_section)):
    $title = $cta_section["title"];
    $text = $cta_section["text"];
?>
  <section class="cta">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-xl-9">
          <div class="cta--content-wrapper">
            <div class="cta--content">
              <h3 class="section-title section-title--xl text-white text-anime-style-3"><?php echo $title ?></h3>

              <p class="wow fadeInUp" data-wow-delay="0.1s">One account to send and receive payments worldwide. No hidden fees, no complex codes, just lightning-fast transfers across borders. Connect with friends and family all over the world, from Australia to Canada, and manage multiple currencies and your personal finances right from your Paayco dashboard.</p>

              <div class="btn-grp justify-content-center">
                <?php if (!empty($cta_section["primary_button"])): ?>
                  <a href="<?php echo @$cta_section["primary_button"]["url"] ?>"
                    title="<?php echo $cta_section["primary_button"]["title"] ?>"
                    class="btn btn-bright-green wow fadeInUp" data-wow-delay="0.2s"><?php echo $cta_section["primary_button"]["title"] ?></a>
                <?php endif; ?>
                <?php if (!empty($cta_section["secondary_button"])): ?>
                  <a href="<?php echo $cta_section["secondary_button"]["url"] ?>"
                    title="<?php echo $cta_section["secondary_button"]["title"] ?>"
                    class="btn btn-white wow fadeInUp" data-wow-delay="0.4s"><?php echo $cta_section["secondary_button"]["title"] ?></a>
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