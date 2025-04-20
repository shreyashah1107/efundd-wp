<section class="hero hero--international-transfer">
  <div class="section-bg section-bg--hero">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/international-transfer/section-hero-bg.png" alt="Image">
  </div>
  <div class="content-wrapper">
    <div class="container">
      <div class="hero--content text-start">
        <div class="row justify-content-center">
          <div class="col-xxl-11">
            <div class="row justify-content-center justify-content-xl-between">
              <div class="col-xl-6">
                <h1 class="text-anime-style-3">INSTANT MONEY TRANSFER</h1>
                <p class="wow fadeInUp" data-wow-delay="0.1s">Transfer funds seamlessly across borders and currencies with transparent pricing and no hidden fees.</p>
                <div class="btn-grp">
                  <a href="#" title="Send money" class="btn btn-bright-green wow fadeInUp" data-wow-delay="0.2s"> Send money </a>
                  <a href="#" title="Convert currency" class="btn btn-outline-white wow fadeInUp" data-wow-delay="0.4s">Convert currency</a>
                </div>

                <div class="stats--items">
                  <div class="stats--item wow fadeInUp" data-wow-delay="0.1s">
                    <h3>40+</h3>
                    <p>Currencies</p>
                  </div>

                  <div class="stats--item wow fadeInUp" data-wow-delay="0.2s">
                    <h3>28+</h3>
                    <p>Payment methods</p>
                  </div>

                  <div class="stats--item wow fadeInUp" data-wow-delay="0.3s">
                    <h3>140+</h3>
                    <p>Supported Countries</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-10 col-md-10 col-lg-8 col-xl-5">
                <div class="currency-conversion-form--wrapper wow fadeInRight" data-wow-delay="0.2s">
                <div class="currency-conversion-form">
                  <h4>How much are you sending?</h4>
                  <form action="">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-text input-group-text--prepend">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/country-2.svg" alt="USD">
                          <div>You are sending to</div>
                        </div>
                        <select class="form-select">
                          <option selected disabled>Choose Country</option>
                          <option value="US">United States</option>
                          <option value="UK">United Kingdom</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>You send</label>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter amount" aria-label="Enter amount">
                        <span class="input-group-text">
                          <div class="currency-selector">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/country-1.svg" alt="GBP">
                            <select class="form-select">
                              <option value="GBP">GBP</option>
                              <option value="USD">USD</option>
                            </select>
                          </div>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Recipient gets</label>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter amount" aria-label="Enter amount">
                        <span class="input-group-text">
                          <div class="currency-selector">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/country-2.svg" alt="USD">
                            <select class="form-select">
                              <option value="USD">USD</option>
                              <option value="GBP">GBP</option>
                            </select>
                          </div>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Pay from</label>
                      <div class="input-group">
                        <div class="input-group-text input-group-text--prepend">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/icon-select-pay.png" alt="">
                        </div>
                        <select class="form-select">
                          <option value="GBP">Paayco GBP balance</option>
                          <option value="UK">United Kingdom</option>
                        </select>
                      </div>
                    </div>
                    <div class="fees-summary">
                      <div>
                        <label>Our fees</label>
                        <p>0.04 GBP</p>
                      </div>
                      <div>
                        <label>Total</label>
                        <p>0.04 GBP</p>
                      </div>
                    </div>
                    <a href="#" class="btn btn-bright-green btn-block">Send money</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>