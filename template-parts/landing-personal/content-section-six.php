<section class="personal-content-section--six">
  <div class="section-bg section-bg--left">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-left-bg.svg" alt="Image">
  </div>

  <div class="content-wrapper">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-9">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-xl-6 text-center text-lg-start mb-5 mb-lg-0">
              <div class="title-row">
                <h3 class="section-title">Your money, in your account</h3>
                <p>Experience financial management that aligns with your unique preferences and goals, designed for your lifestyle.</p>
              </div>
            </div>
            <div class="col-lg-5 col-xl-5">
              <!-- Stacked Card Slider -->
              <div class="stacked-slider">
                <div class="stacked-slider--card active">
                  <div class="card-content">
                    <h4>Dashboard</h4>
                    <p>Our dashboard gives you quick and easy access to transaction history, statements, pay-out and more</p>

                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/slider-1.png" alt="Image">
                    </div>
                  </div>

                  <div>
                    <a href="#" title="Tell me more" class="btn btn-bright-green btn-block">Tell me more</a>
                  </div>
                </div>

                <div class="stacked-slider--card">
                  <div class="card-content">
                    <h4>Fastpay</h4>
                    <p>Our fastpay section allows you to process and receive payments in seconds</p>

                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/slider-2.png" alt="Image">
                    </div>
                  </div>

                  <div>
                    <a href="#" title="Tell me more" class="btn btn-bright-green btn-block">Tell me more</a>
                  </div>
                </div>

                <div class="stacked-slider--card">
                  <div class="card-content">
                    <h4>Fraud detection</h4>
                    <p>Using our AI tools, manage and protect fraudulent transactions automatically</p>

                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/slider-3.png" alt="Image">
                    </div>
                  </div>

                  <div>
                    <a href="#" title="Tell me more" class="btn btn-bright-green btn-block">Tell me more</a>
                  </div>
                </div>

                <div class="stacked-slider--card">
                  <div class="card-content">
                    <h4>Disputes</h4>
                    <p>Manage transactions chargebacks</p>

                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/personal/slider-4.png" alt="Image">
                    </div>
                  </div>

                  <div>
                    <a href="#" title="Tell me more" class="btn btn-bright-green btn-block">Tell me more</a>
                  </div>
                </div>

                <div class="slider-controls">
                  <div class="slider-navigation">
                    <button class="prev">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/left-arrow.svg" alt="Image">
                    </button>
                    <button class="next">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/right-arrow.svg" alt="Image">
                    </button>
                  </div>

                  <div class="slider-pagination">
                    1 of 4
                  </div>
                </div>
              </div>
              <!-- End Stacked Slider -->
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
    }, 3000);
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