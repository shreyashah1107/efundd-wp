<?php
$content_with_list_section = get_field("content_with_list_section");
if ($content_with_list_section):
    $image = $content_with_list_section["image"];
    $list = $content_with_list_section["list"];
    ?>
    <section class="mobile-app mobile-app-v2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xxl-7">
                    <div class="title-row">
                        <h3 class="section-title section-title--xl text-uppercase mb-4"><?php echo $content_with_list_section["title"] ?></h3>
                        <?php echo $content_with_list_section["text"] ?>
                        <?php if ($content_with_list_section["button_text"]): ?>
                            <div class="btn-grp mt-5">
                                <a href="<?php echo $content_with_list_section["button_link"] ?>"
                                   title="<?php echo $content_with_list_section["button_text"] ?>"
                                   class="btn btn-light-green"><?php echo $content_with_list_section["button_text"] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mobile-app--img">
                        <?php if ($image): ?>
                            <img src="<?php echo $image["url"] ?>"
                                 alt="<?php echo @$image["alt"] ?>">
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-xl-7 col-xxl-5">
                    <?php if ($list): ?>
                        <ul class="app-feature--list">
                            <?php foreach ($list as $item):
                                $icon = $item["icon"];
                                ?>
                                <li>
                                    <?php if ($icon): ?>
                                    <div class="icon">
                                        <img src="<?php echo $icon["url"] ?>"
                                             alt="<?php echo @$icon["alt"] ?>">
                                    </div>
                                    <?php endif; ?>
                                    <div class="text">
                                        <h5><?php echo $item["title"] ?></h5>
                                        <p><?php echo $item["text"] ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>