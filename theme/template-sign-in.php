<?php
/**
 * Template Name: Sign In
 *
 * Ported from the Edunex HTML template's `sign-in.html`. Decorative only
 * -- no registration wiring.
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
                    <h2 class="form-title">Create your account.</h2>
                    <p class="desc">Start learning free — no credit card required.</p>
                  </div>

                  <div class="login-social">
                    <a class="tj-social-login-btn" href="#">
                      <span class="icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/google.svg" alt="Google"></span>
                      <span class="text">Continue with Google</span>
                    </a>
                  </div>

                  <div class="login-divider"><span>or sign up with email</span></div>

                  <form class="tj-login-form" action="#" method="post">
                    <div class="form-input">
                      <label class="cf-label" for="login-email">Full name</label>
                      <div class="input-icon-wrap">
                        <span class="input-icon"><i class="tji-user"></i></span>
                        <input type="text" id="login-name" name="name" placeholder="Jonsina Clarce" required>
                      </div>
                    </div>
                    <div class="form-input">
                      <label class="cf-label" for="login-email">Email</label>
                      <div class="input-icon-wrap">
                        <span class="input-icon"><i class="tji-envelope"></i></span>
                        <input type="email" id="login-email" name="email" placeholder="you@example.com" required>
                      </div>
                    </div>
                    <div class="form-input">
                      <label class="cf-label" for="login-password">Password</label>
                      <div class="input-icon-wrap">
                        <span class="input-icon"><i class="tji-lock"></i></span>
                        <input type="password" id="login-password" name="password"
                          placeholder="Create a password (8+ characters)" required>
                        <button type="button" class="password-toggle" aria-label="Show password">
                          <i class="tji-eye-off"></i>
                        </button>
                      </div>
                    </div>
                    <div class="login-form-meta">
                      <label class="remember-check" for="remember-me">
                        <input type="checkbox" id="remember-me" name="remember">
                        <span>I agree to the <a href="#">Privacy policy</a> and <a href="#">Terms of service</a></span>
                      </label>
                    </div>
                    <div class="form-submit">
                      <button class="tj-btn-primary flip-text-wrap" type="submit">
                        <span class="btn-text">Create account</span>
                        <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                      </button>
                    </div>
                  </form>

                  <p class="login-form-footer">Already have an account? <a href="<?php echo esc_url( home_url( "/login" ) ); ?>">Log in</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Login Section -->


<?php
endwhile;

get_footer();
