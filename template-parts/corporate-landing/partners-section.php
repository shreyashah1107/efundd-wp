<?php
$partners_section = get_field('partners_section');
if (isset($partners_section)):
    $partners = $partners_section["partners"];
    ?>
    <section class="partners">
        <div class="container">
            <h4 class="text-center"><?php echo $partners_section["title"] ?></h4>

            <ul class="partner-list">
                <?php foreach ($partners as $partner): ?>
                    <li>
                        <img src="<?php echo $partner["image"]["url"] ?>" alt="<?php echo @$partner["image"]["alt"] ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
