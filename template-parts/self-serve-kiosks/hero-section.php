<?php
$hero_section = get_field("hero_section");
if ($hero_section):
?>
  	<section class="hero hero--in-person-payment">
        <div class="container">
            <div class="hero--content">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-10 col-xxl-9">
                        <h1><?php echo $hero_section["title"] ?></h1>
                        <?php if (!empty($hero_section['image'])): ?>
                            <div class="hero--img">
                                <img src="<?php echo $hero_section["image"]["url"] ?>"
                                     alt="<?php echo @$hero_section["image"]["alt"] ?>">
                            </div>
                        <?php endif; ?>
                        <br>
                        <h3 style="color: #0c0a09"><?php echo $hero_section["subtitle"] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>