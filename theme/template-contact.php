<?php
/**
 * Template Name: Contact
 *
 * Ported from the Edunex HTML template's `contact.html`. The contact form
 * is decorative only (the source template has no form-submission JS or
 * server endpoint) — wire it to a mail handler or form plugin before
 * relying on it in production.
 *
 * @package tutorial
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>

      <main id="primary" class="site-main">

        <div class="space-for-header"></div>
        <!-- start: Page Header Section -->
        <section class="tj-page-header">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="tj-page-header-content">
                  <h1 class="tj-page-title"><?php the_title(); ?></h1>
                  <div class="tj-page-link">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="<?php echo esc_url( home_url( "/" ) ); ?>">Home</a>
                    </span>
                    <span><i class="tji-arrow-right-4"></i></span>
                    <span>
                      <span><?php the_title(); ?></span>
                    </span>
                  </div>
                  <div class="shape"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shapes/stars.png" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Page Header Section -->

        <!-- start: Contact Section -->
        <section class="tj-contact-section section-gap-bottom">
          <div class="container">
            <div class="row rg-30 flex-lg-row flex-column-reverse">
              <div class="col-lg-7">
                <div class="contact-form tj-fade-anim">
                  <div class="form-title-wrap">
                    <h3 class="form-title">Send us a message.</h3>
                    <p class="desc">Start learning free — no credit card required.</p>
                  </div>
                  <form id="contact-form">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-input">
                          <label class="cf-label">Full name</label>
                          <input type="text" name="cfName" placeholder="Enter name" required="" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-input">
                          <label class="cf-label">Email address</label>
                          <input type="email" name="cfEmail" placeholder="Enter email" required="" />
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-input">
                          <label class="cf-label">Subject</label>
                          <div class="tj-select">
                            <select name="cfSubject">
                              <option value="1">General question</option>
                              <option value="2">Course Information</option>
                              <option value="3">Pricing & Subscription</option>
                              <option value="4">Request a Refund</option>
                              <option value="5">Account & Login</option>
                              <option value="6">Billing & Payments</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-input message-input">
                          <label class="cf-label">Message</label>
                          <textarea name="message" placeholder="Tell us how we can help..."></textarea>
                        </div>
                      </div>
                      <div class="form-submit">
                        <button class="tj-btn-primary flip-text-wrap" type="submit">
                          <span class="btn-text">Send message</span>
                          <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="tj-contact-area">
                  <div class="sec-heading">
                    <span class="sec-subtitle tj-fade-anim" data-direction="top"><i class="tji-subtitle"></i> Get in
                      touch</span>
                    <h2 class="sec-title tj-fade-anim">Get in Touch.</h2>
                    <p class="desc tj-fade-anim" data-delay=".3">Pick whichever channel suits you — we're quick on all
                      of them. Master modern digital
                      and tech skills through.</p>
                  </div>
                  <div class="contact-item-wrap">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.3">
                      <div class="contact-icon">
                        <i class="tji-envelope"></i>
                      </div>
                      <div class="contact-content">
                        <h3 class="contact-title">Email us</h3>
                        <p>For anything, anytime</p>
                        <a class="contact-link" href="mailto:hello@elevex.com">hello@edunex.com</a>
                      </div>
                    </div>
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.5">
                      <div class="contact-icon">
                        <i class="tji-phone-call"></i>
                      </div>
                      <div class="contact-content">
                        <h3 class="contact-title">Call us</h3>
                        <p>Mon-Fri, 9am-6pm CT.</p>
                        <a class="contact-link" href="tel:14155550132">+1 (415) 555-0132</a>
                      </div>
                    </div>
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.1">
                      <div class="contact-icon">
                        <i class="tji-location"></i>
                      </div>
                      <div class="contact-content">
                        <h3 class="contact-title">Visit us</h3>
                        <p>189 Congress, Suite 300 TX 78701, USA</p>
                        <a class="tj-text-btn flip-text-wrap" target="_blank"
                          href="https://maps.app.goo.gl/atM8DyLTPi25AwLDA">
                          <span class="btn-text">Get directions</span>
                          <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="map-area">
                  <div class="map">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d34245.64001997674!2d-73.85739292030802!3d40.653793634481424!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1785402593015!5m2!1sen!2sbd"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Contact Section -->
      </main>

<?php
endwhile;

get_footer();
