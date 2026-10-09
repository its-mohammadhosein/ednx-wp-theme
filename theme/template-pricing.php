<?php
/**
 * Template Name: Pricing
 *
 * Ported from the Edunex HTML template's `pricing.html`.
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
                  <h1 class="tj-page-title">Flexible Pricing</h1>
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

        <!-- start: Pricing Section -->
        <section class="tj-pricing-section-2 section-gap-bottom fix">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="sec-heading sec-heading-center">
                  <span class="sec-subtitle"><i class="tji-subtitle"></i> Chose pricing plan</span>
                  <h2 class="sec-title tj-fade-anim" data-delay="0.3">Choose Best Coaching Online plans.
                  </h2>
                  <div class="tj-fade-anim" data-delay=".5" data-duration="0.6">
                    <div class="price-switcher price-switcher-light price-switcher-lg tj-active-bg-container">
                      <button class="price-toggle-btn monthly tj-active-bg-item active">Monthly</button>
                      <button class="price-toggle-btn yearly tj-active-bg-item">Yearly</button>
                      <div class="tj-active-bg"></div>
                    </div>
                  </div>
                </div>
                <div class="pricing-item-wrapper">
                  <div class="pricing-item pricing-item-light pricing-item-lg tj-fade-anim" data-duration="0.6">
                    <div class="pricing-item-inner">
                      <div class="pricing-header">
                        <h3 class="package-title">Starter plan</h3>
                        <div class="package-desc">Perfect for individuals beginning.</div>
                        <div class="package-price">
                          <span class="tj-currency">$</span>
                          <span class="tj-price" data-year-price="22" data-month-price="29">29</span>
                          <span class="tj-period">/ month</span>
                        </div>
                        <a class="tj-btn-primary-2 tj-btn-primary-2-blur tj-btn-full" href="<?php echo esc_url( home_url( "/pricing" ) ); ?>">
                          <span class="btn-inner">
                            <span class="btn-text"><span>Chose plan</span></span>
                            <span class="btn-icon"><span><i class="tji-arrow-right-2"></i></span></span>
                          </span>
                        </a>
                      </div>
                      <div class="pricing-footer">
                        <div class="pricing-features-title">Included</div>
                        <ul class="pricing-features">
                          <li><i class="tji-check"></i>2 coaching sessions / month</li>
                          <li><i class="tji-check"></i>Group coaching access</li>
                          <li><i class="tji-check"></i>Goal setting resources</li>
                          <li><i class="tji-check"></i>Session recordings</li>
                          <li><i class="tji-check"></i>Email support</li>
                          <li><i class="tji-check"></i>Progress tracking</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="pricing-item pricing-item-light pricing-item-popular pricing-item-lg tj-fade-anim"
                    data-delay=".3" data-duration="0.6">
                    <div class="pricing-item-inner">
                      <div class="pricing-badge">
                        <span class="pricing-badge-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/fire.svg" alt=""></span>
                        <span class="pricing-badge-text">Most popular</span>
                      </div>
                      <div class="pricing-header">
                        <h3 class="package-title">Professional plan</h3>
                        <div class="package-desc">Ideal for professionals seeking.</div>
                        <div class="package-price">
                          <span class="tj-currency">$</span>
                          <span class="tj-price" data-year-price="69" data-month-price="79">79</span>
                          <span class="tj-period">/ month</span>
                        </div>
                        <a class="tj-btn-primary-2 tj-btn-full" href="<?php echo esc_url( home_url( "/pricing" ) ); ?>">
                          <span class="btn-inner">
                            <span class="btn-text"><span>Chose plan</span></span>
                            <span class="btn-icon"><span><i class="tji-arrow-right-2"></i></span></span>
                          </span>
                        </a>
                      </div>
                      <div class="pricing-footer">
                        <div class="pricing-features-title">Included</div>
                        <ul class="pricing-features">
                          <li><i class="tji-check"></i>6 Coaching sessions / month</li>
                          <li><i class="tji-check"></i>1-on-1 coaching</li>
                          <li><i class="tji-check"></i>Priority email support</li>
                          <li><i class="tji-check"></i>Progress reports</li>
                          <li><i class="tji-check"></i>Community access</li>
                          <li><i class="tji-check"></i>Session recordings</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="pricing-item pricing-item-light pricing-item-lg tj-fade-anim" data-delay=".5"
                    data-duration="0.6">
                    <div class="pricing-item-inner">
                      <div class="pricing-header">
                        <h3 class="package-title">Elite plan</h3>
                        <div class="package-desc">Designed for leaders and individuals.</div>
                        <div class="package-price">
                          <span class="tj-currency">$</span>
                          <span class="tj-price" data-year-price="129" data-month-price="149">149</span>
                          <span class="tj-period">/ month</span>
                        </div>
                        <a class="tj-btn-primary-2 tj-btn-primary-2-blur tj-btn-full" href="<?php echo esc_url( home_url( "/pricing" ) ); ?>">
                          <span class="btn-inner">
                            <span class="btn-text"><span>Chose plan</span></span>
                            <span class="btn-icon"><span><i class="tji-arrow-right-2"></i></span></span>
                          </span>
                        </a>
                      </div>
                      <div class="pricing-footer">
                        <div class="pricing-features-title">Included</div>
                        <ul class="pricing-features">
                          <li><i class="tji-check"></i>Unlimited coaching sessions</li>
                          <li><i class="tji-check"></i>Dedicated personal coach</li>
                          <li><i class="tji-check"></i>Customized growth strategy</li>
                          <li><i class="tji-check"></i>Weekly performance reviews</li>
                          <li><i class="tji-check"></i>Priority scheduling</li>
                          <li><i class="tji-check"></i>Direct messaging support</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Pricing Section -->

        <!-- start: Client Section -->
        <div class="tj-client-section tj-fade-anim section-gap-bottom">
          <div class="container-fluid px-0">
            <div class="row">
              <div class="col">
                <div class="tj-client-heading tj-fs-h5">
                  Trusted more than <span>2000+</span> companies and millions of learners.
                </div>
                <div class="tj-client-marquee-wrapper">
                  <div class="tj-marquee tj-client-marquee" data-scroll-speed="1" data-scroll-speed-targeted=".4"
                    data-ignore-hover="true">
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-1.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-2.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-3.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-4.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-5.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-6.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-7.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-8.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-1.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-2.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-3.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-4.png" alt="Client">
                      </span>
                    </div>
                    <div class="tj-marquee-item tj-client-item">
                      <span>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clients/client-img-5.png" alt="Client">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end: Client Section -->
      </main>

<?php
endwhile;

get_footer();
