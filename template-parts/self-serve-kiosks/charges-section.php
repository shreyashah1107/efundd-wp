<?php
$charges_section = get_field("charges_section");
if ($charges_section):
$charges = $charges_section["charges"];
?>
  	<section class="charges">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-6">
                    <h3 class="section-title has-bg-gradient"><?php echo $charges_section["title"] ?></h3>
                    <p><?php echo $charges_section["text"] ?></p>
                </div>
            </div>
            <?php if (isset($charges)): ?>
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="charges--grid">
                            <?php foreach ($charges as $charge): ?>
                                <div class="charges--col">
                                    <?php if (!empty($charge["image"])): ?>
                                        <div class="icon">
                                            <img src="<?php echo $charge["image"]["url"] ?>"
                                                 alt="<?php echo @$charge["image"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="title"><?php echo $charge["title"] ?></div>
                                    <div class="text"><?php echo $charge["text"] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>