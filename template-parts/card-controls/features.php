<?php
$features = get_field('features');
if (isset($features)):
    ?>
    <!-- Start: Features -->
    <section class="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center">
                        <div class="security-text--grid" style="grid-template-columns: repeat(3, minmax(0, 1fr));">
                            <?php foreach ($features as $feature): ?>
                                <div class="security-text--col">
                                    <?php if (!empty($feature["icon"])): ?>
                                        <div class="security-icon">
                                            <img src="<?php echo $feature["icon"]["url"] ?>"
                                                 alt="<?php echo @$feature["icon"]["alt"] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="security-content">
                                        <h4><?php echo $feature["title"] ?></h4>
                                        <p><?php echo $feature["text"] ?>.</p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Features -->
<?php endif; ?>