<?php
/**
 * Template Name: Fees Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header("light");
$hero_section = get_field('hero_section');
$testimonials_section = get_field('testimonials_section');
$table_section = get_field('table_section');
?>
    <!-- Start: Fees -->
    <section class="fees">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-11 col-xl-10 col-xxl-8">
                    <h1><?php echo $hero_section["title"] ?></h1>
                    <?php if (isset($hero_section["button_text"])): ?>
                        <div class="pt-4 pt-xxl-5">
                            <a href="<?php echo @$hero_section["button_link"]; ?>"
                               title="<?php echo $hero_section["button_text"]; ?>"
                               class="btn btn-light-green"><?php echo $hero_section["button_text"]; ?></a>
                        </div>
                    <?php endif; ?>
                    <h3><?php echo $testimonials_section["text"] ?></h3>

                    <h6><?php echo $testimonials_section["title"] ?></h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Fees -->
<?php if (isset($table_section)):
    $headers = $table_section["headers"];
    $rows = $table_section["rows"];
    ?>
    <!-- Start: Valuable Pricing -->
    <section class="valuable-pricing">
        <div class="container">
            <h3 class="section-title text-center has-bg-gradient"><?php echo $table_section["title"] ?></h3>

            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                    <tr>

                        <th></th>
                        <?php $i = 1;
                        foreach ($headers as $header): ?>
                            <th class="<?php if ($i == 1) {
                                echo 'suggested-plan';
                            } ?>">
                                <div>
                                    <span class="title"><?php echo $header["heading"] ?></span>
                                    <span class="plan-name"><?php echo $header["subheading"] ?></span>
                                </div>
                            </th>
                            <?php $i++; endforeach; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row):
                        $columns = $row["columns"];
                        ?>

                        <tr>
                            <?php $j = 1;
                            foreach ($columns as $column):
                                if ($column["text"] == "Personal cards") {
                                    if ($j == 1) {
                                        ?>
                                        <td>
                                            <span class="badge">Personal cards</span>
                                        </td>
                                    <?php }
                                } else { ?>
                                    <td><?php
                                        if($column["text"] != "") {
                                            echo $column["text"];
                                        }else{
                                            echo "-";
                                        }?></td>
                                <?php } ?>
                            <?php $j++; endforeach; ?>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End: Valuable Pricing -->
<?php endif; ?>
<?php get_footer(); ?>