<?php
$tabs_section = get_field('tabs_section');
if ($tabs_section) {
    $title = $tabs_section['title'];
    $tabs = $tabs_section['tabs'];
    ?>
    <section class="corporate-content-section--four">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row">
                            <div class="col-xl-9 col-xxl-9">
                                <div class="title-row mb-5">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($tabs)) { ?>
                            <ul class="nav nav-tabs mt-lg-5" id="paymentTab" role="tablist">
                                <?php $j = 1;
                                foreach ($tabs as $tab) {
                                    $title = $tab['title'];
                                    $the_id = str_replace(" ", "-", $title);
                                    $delay = "0.1";
                                    ?>
                                    <?php if ($j == 1) { ?>
                                        <li class="nav-item wow fadeInUp" data-wow-delay="0.1s" role="presentation">

                                            <button class="nav-link active" id="<?php echo $the_id ?>-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#<?php echo $the_id ?>" type="button" role="tab"
                                                    aria-controls="<?php echo $the_id ?>"
                                                    aria-selected="true"><?php echo $title ?>
                                            </button>
                                        </li>
                                    <?php } else {
                                        $delay = $delay + 0.1;
                                        ?>
                                        <li class="nav-item wow fadeInUp" data-wow-delay="<?php echo $delay ?>s"
                                            role="presentation">

                                            <button class="nav-link" id="<?php echo $the_id ?>-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#<?php echo $the_id ?>" type="button" role="tab"
                                                    aria-controls="<?php echo $the_id ?>"
                                                    aria-selected="false"><?php echo $title ?>
                                            </button>
                                        </li>
                                    <?php } ?>
                                    <?php $j++;
                                } ?>
                            </ul>

                            <div class="tab-content wow fadeInUp" data-wow-delay="0.1s" id="paymentTabContent">
                                <?php $l = 1;
                                foreach ($tabs as $tab) {
                                    $title = $tab['title'];
                                    $content = $tab['content'];
                                    $button = $tab['button'];
                                    $image = $tab['image'];
                                    $the_id = str_replace(" ", "-", $title);
                                    ?>
                                    <?php if ($l == 1) { ?>
                                        <div class="tab-pane show active" id="<?php echo $the_id ?>" role="tabpanel"
                                             aria-labelledby="card-machine-tab" tabindex="0">
                                            <div class="main-content-wrapper">
                                                <div class="row align-items-center justify-content-center justify-content-lg-start">
                                                    <div class="col-lg-6 col-xl-6">
                                                        <div class="content">
                                                            <div class="title-row mb-4">
                                                                <h4 class="section-title"><?php echo $title ?></h4>
                                                                <?php echo $content ?>
                                                            </div>
                                                            <?php if (!empty($button)) { ?>
                                                                <div class="btn-grp mt-4">
                                                                    <a href="<?php echo $button["url"] ?>"
                                                                       title="<?php echo $button["title"] ?>"
                                                                       class="btn btn-bright-green"><?php echo $button["title"] ?></a>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <div class="image text-center">
                                                            <?php if ($image) { ?>
                                                                <img src="<?php echo $image["url"] ?>"
                                                                     alt="<?php echo @$image["alt"] ?>">
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="tab-pane" id="<?php echo $the_id ?>" role="tabpanel"
                                             aria-labelledby="card-machine-tab" tabindex="0">
                                            <div class="main-content-wrapper">
                                                <div class="row align-items-center justify-content-center justify-content-lg-start">
                                                    <div class="col-lg-6 col-xl-6">
                                                        <div class="content">
                                                            <div class="title-row mb-4">
                                                                <h4 class="section-title"><?php echo $title ?></h4>
                                                                <?php echo $content ?>
                                                            </div>
                                                            <?php if (!empty($button)) { ?>
                                                                <div class="btn-grp mt-4">
                                                                    <a href="<?php echo $button["url"] ?>"
                                                                       title="<?php echo $button["title"] ?>"
                                                                       class="btn btn-bright-green"><?php echo $button["title"] ?></a>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <div class="image text-center">
                                                            <?php if ($image) { ?>
                                                                <img src="<?php echo $image["url"] ?>"
                                                                     alt="<?php echo @$image["alt"] ?>">
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    $l++;
                                } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>