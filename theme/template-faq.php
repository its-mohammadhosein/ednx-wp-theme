<?php
/**
 * Template Name: FAQ
 *
 * Ported from the Edunex HTML template's `faq.html`.
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

        <!-- start: FAQ Section -->
        <section class="tj-faq-section-4 section-gap-bottom fix">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="sec-heading sec-heading-center">
                  <span class="sec-subtitle"><i class="tji-subtitle"></i> Support center</span>
                  <h2 class="sec-title tj-fade-anim" data-delay="0.3">Browse FAQs to Get Quick answers.</h2>
                </div>
                <div class="tj-faq-wrapper-3">
                  <div class="d-flex justify-content-center tj-fade-anim" data-delay="0.4">
                    <ul class="nav nav-tabs tj-faq-tab" id="faq-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="item-all-tab" data-bs-toggle="tab"
                          data-bs-target="#item-all" type="button" role="tab" aria-controls="item-all"
                          aria-selected="true">General</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="item-1-tab" data-bs-toggle="tab" data-bs-target="#item-1"
                          type="button" role="tab" aria-controls="item-1" aria-selected="false">Courses</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="item-2-tab" data-bs-toggle="tab" data-bs-target="#item-2"
                          type="button" role="tab" aria-controls="item-2" aria-selected="false">Payments</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="item-3-tab" data-bs-toggle="tab" data-bs-target="#item-3"
                          type="button" role="tab" aria-controls="item-3" aria-selected="false">Accounts</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="item-4-tab" data-bs-toggle="tab" data-bs-target="#item-4"
                          type="button" role="tab" aria-controls="item-4" aria-selected="false">Support</button>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="faq-tabContent">
                    <div class="tab-pane fade show active" id="item-all" role="tabpanel" aria-labelledby="item-all-tab"
                      tabindex="0">
                      <div class="tj-faq tj-faq-3" id="tjAccordion01">
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-1" aria-expanded="true">Can I host live coaching
                            sessions?</button>
                          <div id="accordion-1" class="show collapse" data-bs-parent="#tjAccordion01">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-2" aria-expanded="false">How do clients book coaching
                            sessions?</button>
                          <div id="accordion-2" class="collapse" data-bs-parent="#tjAccordion01">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-3" aria-expanded="false">Can I sell courses and coaching
                            programs?</button>
                          <div id="accordion-3" class="collapse" data-bs-parent="#tjAccordion01">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-4" aria-expanded="false">Does the platform support progress
                            tracking?</button>
                          <div id="accordion-4" class="collapse" data-bs-parent="#tjAccordion01">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <div class="accordion-inner">
                            <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#accordion-5" aria-expanded="false">Do I need technical skills to get
                              started?</button>
                            <div id="accordion-5" class="collapse" data-bs-parent="#tjAccordion01">
                              <div class="accordion-body tj-accordion-content">
                                Clients can view your availability, choose a suitable time slot, and book sessions
                                online
                                through the built-in scheduling system. Organize and manage all your projects
                                effortlessly
                                in one place. From initial planning to the finalized. Organize and manage all your
                                projects
                                effortlessly.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="item-1" role="tabpanel" aria-labelledby="item-1-tab" tabindex="0">
                      <div class="tj-faq tj-faq-3" id="tjAccordion02">
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-6" aria-expanded="true">Can I host live coaching
                            sessions?</button>
                          <div id="accordion-6" class="collapse" data-bs-parent="#tjAccordion02">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-7" aria-expanded="false">How do clients book coaching
                            sessions?</button>
                          <div id="accordion-7" class="collapse" data-bs-parent="#tjAccordion02">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-8" aria-expanded="false">Can I sell courses and coaching
                            programs?</button>
                          <div id="accordion-8" class="collapse" data-bs-parent="#tjAccordion02">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-9" aria-expanded="false">Does the platform support progress
                            tracking?</button>
                          <div id="accordion-9" class="collapse" data-bs-parent="#tjAccordion02">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <div class="accordion-inner">
                            <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#accordion-10" aria-expanded="false">Do I need technical skills to get
                              started?</button>
                            <div id="accordion-10" class="collapse" data-bs-parent="#tjAccordion02">
                              <div class="accordion-body tj-accordion-content">
                                Clients can view your availability, choose a suitable time slot, and book sessions
                                online
                                through the built-in scheduling system. Organize and manage all your projects
                                effortlessly
                                in one place. From initial planning to the finalized. Organize and manage all your
                                projects
                                effortlessly.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="item-2" role="tabpanel" aria-labelledby="item-2-tab" tabindex="0">
                      <div class="tj-faq tj-faq-3" id="tjAccordion03">
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-11" aria-expanded="true">Can I host live coaching
                            sessions?</button>
                          <div id="accordion-11" class="collapse" data-bs-parent="#tjAccordion03">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-12" aria-expanded="false">How do clients book coaching
                            sessions?</button>
                          <div id="accordion-12" class="collapse" data-bs-parent="#tjAccordion03">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-13" aria-expanded="false">Can I sell courses and coaching
                            programs?</button>
                          <div id="accordion-13" class="collapse" data-bs-parent="#tjAccordion03">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-14" aria-expanded="false">Does the platform support progress
                            tracking?</button>
                          <div id="accordion-14" class="collapse" data-bs-parent="#tjAccordion03">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <div class="accordion-inner">
                            <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#accordion-15" aria-expanded="false">Do I need technical skills to get
                              started?</button>
                            <div id="accordion-15" class="collapse" data-bs-parent="#tjAccordion03">
                              <div class="accordion-body tj-accordion-content">
                                Clients can view your availability, choose a suitable time slot, and book sessions
                                online
                                through the built-in scheduling system. Organize and manage all your projects
                                effortlessly
                                in one place. From initial planning to the finalized. Organize and manage all your
                                projects
                                effortlessly.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="item-3" role="tabpanel" aria-labelledby="item-3-tab" tabindex="0">
                      <div class="tj-faq tj-faq-3" id="tjAccordion04">
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-16" aria-expanded="true">Can I host live coaching
                            sessions?</button>
                          <div id="accordion-16" class="collapse" data-bs-parent="#tjAccordion04">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-17" aria-expanded="false">How do clients book coaching
                            sessions?</button>
                          <div id="accordion-17" class="collapse" data-bs-parent="#tjAccordion04">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-18" aria-expanded="false">Can I sell courses and coaching
                            programs?</button>
                          <div id="accordion-18" class="collapse" data-bs-parent="#tjAccordion04">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-19" aria-expanded="false">Does the platform support progress
                            tracking?</button>
                          <div id="accordion-19" class="collapse" data-bs-parent="#tjAccordion04">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <div class="accordion-inner">
                            <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#accordion-20" aria-expanded="false">Do I need technical skills to get
                              started?</button>
                            <div id="accordion-20" class="collapse" data-bs-parent="#tjAccordion04">
                              <div class="accordion-body tj-accordion-content">
                                Clients can view your availability, choose a suitable time slot, and book sessions
                                online
                                through the built-in scheduling system. Organize and manage all your projects
                                effortlessly
                                in one place. From initial planning to the finalized. Organize and manage all your
                                projects
                                effortlessly.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="item-4" role="tabpanel" aria-labelledby="item-4-tab" tabindex="0">
                      <div class="tj-faq tj-faq-3" id="tjAccordion05">
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-21" aria-expanded="true">Can I host live coaching
                            sessions?</button>
                          <div id="accordion-21" class="collapse" data-bs-parent="#tjAccordion05">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-22" aria-expanded="false">How do clients book coaching
                            sessions?</button>
                          <div id="accordion-22" class="collapse" data-bs-parent="#tjAccordion05">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-23" aria-expanded="false">Can I sell courses and coaching
                            programs?</button>
                          <div id="accordion-23" class="collapse" data-bs-parent="#tjAccordion05">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion-24" aria-expanded="false">Does the platform support progress
                            tracking?</button>
                          <div id="accordion-24" class="collapse" data-bs-parent="#tjAccordion05">
                            <div class="accordion-body tj-accordion-content">
                              Clients can view your availability, choose a suitable time slot, and book sessions online
                              through the built-in scheduling system. Organize and manage all your projects effortlessly
                              in
                              one place. From initial planning to the finalized. Organize and manage all your projects
                              effortlessly.
                            </div>
                          </div>
                        </div>
                        <div class="tj-accordion-item tj-fade-anim" data-delay=".3" data-duration="0.6">
                          <div class="accordion-inner">
                            <button class="tj-accordion-title collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#accordion-25" aria-expanded="false">Do I need technical skills to get
                              started?</button>
                            <div id="accordion-25" class="collapse" data-bs-parent="#tjAccordion05">
                              <div class="accordion-body tj-accordion-content">
                                Clients can view your availability, choose a suitable time slot, and book sessions
                                online
                                through the built-in scheduling system. Organize and manage all your projects
                                effortlessly
                                in one place. From initial planning to the finalized. Organize and manage all your
                                projects
                                effortlessly.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="course-bottom-content style-3">
                  <span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/fire.svg" alt=""> Support</span>
                  <p>Our support team is here to help.</p>
                  <div>
                    <a class="tj-text-btn-2" href="<?php echo esc_url( home_url( "/contact" ) ); ?>">
                      <span class="btn-text"><span>Still Have a Question?</span></span>
                      <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: FAQ Section -->
      </main>

<?php
endwhile;

get_footer();
