<?php
/**
 * Template Name: Help Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header("light");
$cards_section = get_field("cards_section");
$popular_articles_section = get_field("popular_articles_section");
?>
    <!-- Start: Help -->
    <section class="help">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>How can we help?</h1>
                </div>
            </div>

            <div class="search-wrapper">
                <div class="form-group">
                    <input type="text" id="search" class="form-control search-input" placeholder="Search">
                </div>
            </div>
            <?php if (isset($cards_section)): ?>
                <div class="card-help--grid">
                    <?php foreach ($cards_section as $cards): ?>
                        <div class="card-help--col">
                            <div class="card-help--col-content">
                                <h3><?php echo $cards["title"] ?></h3>
                            </div>
                            <div class="card-help--col-image">
                                <?php if (!empty($cards["image"])): ?>
                                    <img src="<?php echo $cards["image"]["url"] ?>"
                                         alt="<?php echo @$cards["image"]["alt"] ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End: Help -->
<?php if (isset($popular_articles_section)):
    $articles = $popular_articles_section["articles"];
    ?>
    <!-- Start: Popular Articles -->
    <section class="popular-articles">
        <div class="container">
            <div class="title-row">
                <h3 class="section-title has-bg-gradient"><?php echo $popular_articles_section["title"] ?></h3>
            </div>
            <?php if (isset($articles)): ?>
                <div class="security-text--grid">
                    <?php foreach ($articles as $article): ?>
                        <div class="security-text--col">
                            <div class="security-content">
                                <h4><?php echo $article["title"] ?></h4>
                                <p><?php echo $article["text"] ?></p>

                                <div class="security-content--cta">
                                    <a href="<?php echo @$article["button_link"] ?>" title="Learn More" class="btn btn-link btn-link--green">
                                        <span class="text">Learn More</span>
                                        <span class="icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End: Popular Articles -->
<?php endif; ?>
<?php get_footer(); ?>