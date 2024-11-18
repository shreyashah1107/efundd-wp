<?php
$solutions_section = get_field('solutions_section');
if (isset($solutions_section)):
    $solutions = $solutions_section['slides'];
    ?>
    <section class="digital-solution digital-solution--with-bg">
        <div class="container">
            <div class="title-row text-center">
                <h3 class="section-title"><?php echo $solutions_section["title"] ?></h3>
                <p><?php echo $solutions_section["text"] ?></p>
            </div>
            <?php if (!empty($solutions)): ?>
                <div class="digital-solution--list">
                    <div class="digital-solution--list-items">
                        <?php foreach ($solutions as $solution): ?>
                            <div class="digital-solution--list-item">
                                <?php if (!empty($solution["icon"])): ?>
                                    <div class="digital-solution--list-item-icon">
                                        <img src="<?php echo $solution["icon"]["url"] ?>"
                                             alt="<?php echo @$solution["icon"]["alt"] ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="digital-solution--list-item-content">
                                    <h4><?php echo $solution["title"] ?></h4>
                                    <p><?php echo $solution["text"] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>