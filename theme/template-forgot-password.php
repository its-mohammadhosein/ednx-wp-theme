<?php
/**
 * Template Name: Forgot Password
 *
 * Ported from the Edunex HTML template's `forgot-password.html`.
 * Decorative only -- no password-reset wiring.
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

        <!-- start: Login Section -->
        <section class="tj-login-section section-gap-bottom fix">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="tj-login-form-wrapper tj-fade-anim">
                  <div class="login-form-header">
                    <div class="icon"><i class="tji-lock"></i></div>
                    <h2 class="form-title">Forgot password</h2>
                    <p class="desc">No worries — enter your email and we'll send you a reset link.</p>
                  </div>

                  <form class="tj-login-form" action="#" method="post">
                    <div class="form-input">
                      <label class="cf-label" for="login-email">Email</label>
                      <div class="input-icon-wrap">
                        <span class="input-icon"><i class="tji-envelope"></i></span>
                        <input type="email" id="login-email" name="email" placeholder="you@example.com" required>
                      </div>
                    </div>
                    <div class="form-submit">
                      <button class="tj-btn-primary flip-text-wrap" type="submit">
                        <span class="btn-text">Send reset link</span>
                        <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                      </button>
                    </div>
                    <div class="back-btn-wrap">
                      <a class="tj-back-btn" href="<?php echo esc_url( home_url( "/login" ) ); ?>">
                        <span class="btn-icon"><i class="tji-arrow-left-4"></i></span>
                        <span class="btn-text">Back to login</span>
                      </a>
                    </div>
                  </form>

                  <div class="verification-info">
                    <i class="tji-info"></i>
                    <p class="desc">The link expires in 30 minutes. Check your spam folder if it doesn't arrive within a
                      couple of minutes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Login Section -->


<?php
endwhile;

get_footer();
