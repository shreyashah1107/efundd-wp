<?php
$fifth_content_section = get_field("fifth_content_section");
if ($fifth_content_section) {
    $title = $fifth_content_section["title"];
    $text = $fifth_content_section["text"];
    $slides = $fifth_content_section["slides"];
    ?>
    <section class="personal-content-section--six">
        <div class="section-bg section-bg--right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-right-bg.svg" alt="Image">
        </div>

        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-7 col-xl-6 mb-5 mb-lg-0">
                                <div class="title-row">
                                    <h3 class="section-title section-title--xl text-anime-style-3"><?php echo $title ?></h3>
                                    <p class="wow fadeInUp" data-wow-delay="0.1s"><?php echo $text ?></p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-5">
                                <?php if ($slides) {
                                    ?>
                                <!-- Stacked Card Slider -->
                                <div class="stacked-slider">
                                    <?php $i = 1;
                                    foreach ($slides

                                             as $slide) {
                                    $title = $slide["title"];
                                    $text = $slide["text"];
                                    $image = $slide["image"];
                                    $button = $slide["button"];
                                    $class = "";
                                    if ($i == 1) {
                                        $class = "active";
                                    }
                                    ?>
                                    <div class="stacked-slider--card <?php echo $class ?>">
                                        <div class="card-content">
                                            <h4><?php echo $title ?></h4>
                                            <p><?php echo $text ?></p>

                                            <div class="image">
                                                <?php if ($image) { ?>
                                                    <img src="<?php echo $image["url"] ?>"
                                                         alt="<?php echo @$image["alt"] ?>">
                                                <?php } ?>
                                            </div>

                                            <div>
                                                <?php if ($button) { ?>
                                                    <a href="<?php echo $button["url"] ?>"
                                                       title="<?php echo $button["title"] ?>"
                                                       class="btn btn-bright-green btn-block"><?php echo $button["title"] ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php $i++;
                                        } ?>
                                        <div class="slider-controls">
                                            <div class="slider-navigation">
                                                <button class="prev">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/left-arrow.svg"
                                                         alt="Image">
                                                </button>
                                                <button class="next">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/right-arrow.svg"
                                                         alt="Image">
                                                </button>
                                            </div>

                                            <div class="slider-pagination">
                                                1 of <?php echo count($slides); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Stacked Slider -->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Stack slider
        const cards = document.querySelectorAll(".stacked-slider .stacked-slider--card");
        const prevButton = document.querySelector(".slider-controls .prev");
        const nextButton = document.querySelector(".slider-controls .next");
        const pagination = document.querySelector(".slider-controls .slider-pagination");

        let currentIndex = 0;
        let autoPlayInterval;

        function updateSlider() {
            cards.forEach((card, index) => {
                card.classList.remove("active");

                const prevIndex = (currentIndex - 1 + cards.length) % cards.length;
                const nextIndex = (currentIndex + 1) % cards.length;

                if (index === currentIndex) {
                    card.style.transform = "translateY(0) scale(1)";
                    card.style.opacity = "1";
                    card.style.zIndex = "3";
                    card.classList.add("active");
                } else if (index === nextIndex) {
                    card.style.transform = "translateY(-30px) scale(0.9)";
                    card.style.opacity = "0.8";
                    card.style.zIndex = "2";
                } else if (index === prevIndex) {
                    card.style.transform = "translateY(-60px) scale(0.8)";
                    card.style.opacity = "0.6";
                    card.style.zIndex = "1";
                } else {
                    card.style.transform = "translateY(-100px) scale(0.7)";
                    card.style.opacity = "0";
                    card.style.zIndex = "0";
                }
            });

            pagination.textContent = `${currentIndex + 1} of ${cards.length}`;
        }

        function autoPlaySlider() {
            autoPlayInterval = setInterval(() => {
                if (currentIndex === cards.length - 1) {
                    currentIndex = 0;
                } else {
                    currentIndex++;
                }
                updateSlider();
            }, 1000);
        }

        if (nextButton && prevButton) {
            nextButton.addEventListener("click", () => {
                clearInterval(autoPlayInterval);
                currentIndex = (currentIndex + 1) % cards.length;
                updateSlider();
                autoPlaySlider();
            });

            prevButton.addEventListener("click", () => {
                clearInterval(autoPlayInterval);
                currentIndex = (currentIndex - 1 + cards.length) % cards.length;
                updateSlider();
                autoPlaySlider();
            });
        } else {
            console.error("Error: Navigation buttons not found in the DOM.");
        }

        updateSlider();
        autoPlaySlider();
    </script>
<?php } ?>