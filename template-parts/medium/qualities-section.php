<?php
$qualities_section = get_field("qualities_section");
if ($qualities_section):
$qualities = $qualities_section["qualities"];
?>
  	<section class="card-reader-qualities">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-10 col-xxl-7">
                    <h4><?php echo $qualities_section["text"] ?></h4>
                    <p>Ebannc card machine manages everything from taking payments, managing  inventory to refunding transactions and getting paid next day. It’s reliable, automated and lets you start selling fast.</p>
                </div>
            </div>

            <div class="qualities--content">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6">
                        <?php if (!empty($qualities_section["image"])): ?>
                            <div class="image">
                                <img src="<?php echo $qualities_section["image"]["url"] ?>"
                                     alt="<?php echo @$qualities_section["image"]["alt"] ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-5 offset-xl-1 mt-5 mt-xl-0">
                        <?php if (isset($qualities)): ?>
                            <div class="qualities--content-list">
                                <?php foreach ($qualities as $quality): ?>
                                    <div class="item">
                                        <div class="title"><?php echo $quality["title"] ?></div>
                                        <div class="text"><?php echo $quality["text"] ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>