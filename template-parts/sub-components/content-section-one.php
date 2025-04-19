<section class="component-content-section--one">
  <div class="section-bg section-bg--left">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/section-left-bg.svg" alt="Image">
  </div>
        
  <div class="content-wrapper">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-11">
          <div class="row align-items-center justify-content-center justify-content-lg-start">
            <div class="col-md-8 col-lg-6 col-xl-6 order-last order-lg-first">
              <div class="currency-conversion-form--wrapper wow fadeInLeft" data-wow-delay="0.2s">
                <div class="currency-conversion-form">
                  <form action="">
                    <div class="form-group">
                      <label>Select currency</label>
                      <div class="input-group">
                        <div class="input-group-text input-group-text--prepend">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/country-1.svg" alt="GBP">
                        </div>
                        <select class="form-select">
                          <option value="USD">USD</option>
                          <option selected value="GBP">GBP</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Amount</label>
                      <input type="text" class="form-control" placeholder="Enter amount" aria-label="Enter amount">
                    </div>
                    <div class="form-group">
                      <label>Product</label>
                      <input type="text" class="form-control" placeholder="Enter product" aria-label="Enter product">
                    </div>
                    <div class="form-group">
                      <label>Pay with</label>
                      <div class="input-group">
                        <div class="input-group-text input-group-text--prepend">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/icon-select-pay.png" alt="">
                        </div>
                        <select class="form-select">
                          <option value="GBP">Paayco Business debit card</option>
                        </select>
                      </div>
                    </div>
                    <a href="#" title="Checkout" class="btn btn-bright-green btn-block">Checkout</a>
                  </form>
                </div>

                <div class="currency-conversion-form">
                  <div class="form-group">
                    <label>Other payment methods</label>
                  </div>

                  <div class="btn-grp flex-column">
                    <a href="#" title="Paayed" class="btn btn-outline-content-link btn-block">Paayed</a>

                    <a href="#" title="GPay" class="btn btn-outline-content-link btn-block">
                      <span class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/components/apple-pay.png" alt="Image">
                      </span>

                      <span class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/components/google-pay.png" alt="Image">
                      </span>
                    </a>

                    <a href="#" title="Credit or Debit card" class="btn btn-outline-content-link btn-block">Credit or Debit card</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-6 mb-5 mb-lg-0">
              <ul>
                <li class="wow fadeInUp" data-wow-delay="0.1s">
                  <h4>Pre-built payment link</h4>
                  <p>Launch same day with our ready to go payment link: Embed on your own site or redirect to a Bann hosted payment page. Customise all fonts and colours to match your unique brand. Easily add recurring payments and applicable tax.</p>
                </li>

                <li class="wow fadeInUp" data-wow-delay="0.2s">
                  <h4>Share-able payment links</h4>
                  <p>The quickest way to accept payments – no code required. Share your payment link over email, Whatsapp, SMS, or any other channel. Accept one-time, recurring, or pay-what-you-want payments. Convert your link into an embeddable buy button or QR code</p>
                </li>

                <li class="wow fadeInUp" data-wow-delay="0.3s">
                  <h4>Built-in payments</h4>
                  <p>Use our Speedy Checkout Component to display multiple single click payment buttons. We support multiple payment methods including Google Pay, Apple Pay, Paypal and Click - Paayco's single click checkout component.</p>
                </li>

                <li class="wow fadeInUp" data-wow-delay="0.4s">
                  <h4>Automatic address collection</h4>
                  <p>Verify users identities to reduce fraud</p>
                </li>
              </ul>
              <div class="btn-grp mt-5">
                <a href="#" title="Set up now" class="btn btn-bright-green wow fadeInUp" data-wow-delay="0.2s"> Set up now </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>