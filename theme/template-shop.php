<?php
/**
 * Template Name: Shop
 *
 * Ported from the Edunex HTML template's `shop.html`.
 * Decorative only -- per project decision, products/cart/checkout aren't backed by a real store (no WooCommerce). A typo in the source template (href="hshop-details.html") was corrected while porting.
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
                  <h1 class="tj-page-title">Our Product</h1>
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

        <!-- start: Shop Section -->
        <div class="tj-product-area section-gap-bottom sidebar-sticky-container">
          <div class="container">
            <div class="row rg-50">
              <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="tj-shop-listing d-flex flex-wrap align-items-center mb-40 justify-content-between">
                  <div class="tj-shop-listing-number">
                    <p class="tj-shop-list-title">
                      Showing <strong>1–6</strong> of <strong>10</strong> results </p>
                  </div>
                  <div class="tj-shop-listing-popup">
                    <div class="tj-shop-from">
                      <div class="select-label">Sort by</div>
                      <form class="woocommerce-ordering" method="get">
                        <div class="tj-select">
                          <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="popularity">Most Popular</option>
                            <option value="rating">Average rating</option>
                            <option value="date" selected="selected">Latest</option>
                            <option value="price">Low to high</option>
                            <option value="price-desc">High to low</option>
                          </select>
                        </div>
                        <input type="hidden" name="paged" value="1">
                      </form>
                    </div>
                  </div>
                </div>


                <div class="tj-shop-item-wrapper">
                  <div class="row rg-30 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 row-cols-1">
                    <div class="tj-product">
                      <div class="tj-product-item">
                        <div class="tj-product-thumb">
                          <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-1.webp" alt=""> </a>

                          <div class="tj-product-badge product-on-sale">
                            <span class="onsale">Sale</span>
                          </div>

                          <!-- product action -->
                          <div class="tj-product-action">
                            <div class="tj-product-action-item d-flex flex-column">
                              <div class="tj-product-action-btn product-add-wishlist-btn">
                                <button>Add to
                                  wishlist</button> <span class="tj-product-action-btn-tooltip">Add to
                                  wishlist</span>
                              </div>

                              <div class="tj-product-action-btn">
                                <a class="tj-quick-product-details" href="#tj-product-modal-1" data-vbtype="inline"><i
                                    class="tji-eye"></i></a>
                                <span class="tj-product-action-btn-tooltip">Quick view</span>
                              </div>
                            </div>
                          </div>
                          <div class="tj-product-cart-btn">
                            <a href="<?php echo esc_url( home_url( "/cart" ) ); ?>" data-quantity="1"
                              class="cart-button button tj-cart-btn stock-available ">
                              <span class="btn-text"><span>Add to cart</span></span>
                              <span class="btn-icon"><i class="tji-cart-bag"></i><i class="tji-cart-bag"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="tj-product-content">
                          <div class="tj-product-tag d-none">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>"> Power</a>
                          </div>
                          <h3 class="tj-product-title">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Personal holding earbud</a>
                          </h3>

                          <div class="tj-product-price-wrapper">
                            <span class="price"><del><span><bdi><span>$</span>40.00</bdi></span></del>
                              <ins><span><bdi><span>$</span>28.00</bdi></span></ins></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tj-product">
                      <div class="tj-product-item">
                        <div class="tj-product-thumb">
                          <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-2.webp" alt="">
                          </a>
                          <div class="tj-product-badge product-on-sale">
                            <span class="onsale">Sale</span>
                          </div>

                          <!-- product action -->
                          <div class="tj-product-action">
                            <div class="tj-product-action-item d-flex flex-column">
                              <div class="tj-product-action-btn product-add-wishlist-btn">
                                <button>Add to
                                  wishlist</button> <span class="tj-product-action-btn-tooltip">Add to
                                  wishlist</span>
                              </div>

                              <div class="tj-product-action-btn">
                                <a class="tj-quick-product-details" href="#tj-product-modal-1" data-vbtype="inline"><i
                                    class="tji-eye"></i></a> <span class="tj-product-action-btn-tooltip">Quick
                                  view</span>
                              </div>
                            </div>
                          </div>
                          <div class="tj-product-cart-btn">
                            <a href="<?php echo esc_url( home_url( "/cart" ) ); ?>" class="cart-button button tj-cart-btn stock-available ">
                              <span class="btn-text"><span>Add to cart</span></span>
                              <span class="btn-icon"><i class="tji-cart-bag"></i><i class="tji-cart-bag"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="tj-product-content">
                          <div class="tj-product-tag d-none">
                            <a href="#">
                              Charger</a>
                          </div>
                          <h3 class="tj-product-title">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">MacBook Air M5 15-Inch</a>
                          </h3>

                          <div class="tj-product-price-wrapper">
                            <span class="price"><del><span><bdi><span>$</span>300.00</bdi></span></del>
                              <ins><span><bdi><span>$</span>250.00</bdi></span></ins></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tj-product">
                      <div class="tj-product-item">
                        <div class="tj-product-thumb">
                          <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-3.webp" alt="">
                          </a>
                          <div class="tj-product-badge product-on-sale">
                            <span class="onsale">Sale</span>
                          </div>
                          <!-- product action -->
                          <div class="tj-product-action">
                            <div class="tj-product-action-item d-flex flex-column">
                              <div class="tj-product-action-btn product-add-wishlist-btn">
                                <button>Add to
                                  wishlist</button> <span class="tj-product-action-btn-tooltip">Add to
                                  wishlist</span>
                              </div>

                              <div class="tj-product-action-btn">
                                <a class="tj-quick-product-details" href="#tj-product-modal-1" data-vbtype="inline"><i
                                    class="tji-eye"></i></a> <span class="tj-product-action-btn-tooltip">Quick
                                  view</span>
                              </div>
                            </div>
                          </div>
                          <div class="tj-product-cart-btn">
                            <a href="<?php echo esc_url( home_url( "/cart" ) ); ?>" data-quantity="1"
                              class="cart-button button tj-cart-btn stock-available ">
                              <span class="btn-text"><span>Add to cart</span></span>
                              <span class="btn-icon"><i class="tji-cart-bag"></i><i class="tji-cart-bag"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="tj-product-content">
                          <div class="tj-product-tag d-none">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>"> Speaker</a>
                          </div>
                          <h3 class="tj-product-title">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Fast charging cable</a>
                          </h3>

                          <div class="tj-product-price-wrapper">
                            <span class="price"><del><span><bdi><span>$</span>40.00</bdi></span></del>
                              <ins><span><bdi><span>$</span>28.00</bdi></span></ins></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tj-product">
                      <div class="tj-product-item">
                        <div class="tj-product-thumb">
                          <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-4.webp" alt="">
                          </a>
                          <!-- product action -->
                          <div class="tj-product-action">
                            <div class="tj-product-action-item d-flex flex-column">
                              <div class="tj-product-action-btn product-add-wishlist-btn">
                                <button>Add to
                                  wishlist</button> <span class="tj-product-action-btn-tooltip">Add to
                                  wishlist</span>
                              </div>

                              <div class="tj-product-action-btn">
                                <a class="tj-quick-product-details" href="#tj-product-modal-1" data-vbtype="inline"><i
                                    class="tji-eye"></i></a> <span class="tj-product-action-btn-tooltip">Quick
                                  view</span>
                              </div>
                            </div>
                          </div>
                          <div class="tj-product-cart-btn">
                            <a href="<?php echo esc_url( home_url( "/cart" ) ); ?>" class="cart-button button tj-cart-btn stock-available ">
                              <span class="btn-text"><span>Add to cart</span></span>
                              <span class="btn-icon"><i class="tji-cart-bag"></i><i class="tji-cart-bag"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="tj-product-content">
                          <div class="tj-product-tag d-none">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>"> Power</a>
                          </div>
                          <h3 class="tj-product-title">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Cool mini USB fan</a>
                          </h3>

                          <div class="tj-product-price-wrapper">
                            <span class="price"><span><bdi><span>$</span>40.00</bdi></span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tj-product">
                      <div class="tj-product-item">
                        <div class="tj-product-thumb">
                          <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-5.webp" alt="">
                          </a>
                          <div class="tj-product-badge product-on-sale">
                            <span class="onsale sold-out">Sold</span>
                          </div>
                          <!-- product action -->
                          <div class="tj-product-action">
                            <div class="tj-product-action-item d-flex flex-column">
                              <div class="tj-product-action-btn product-add-wishlist-btn">
                                <button>Add to
                                  wishlist</button> <span class="tj-product-action-btn-tooltip">Add to
                                  wishlist</span>
                              </div>

                              <div class="tj-product-action-btn">
                                <a class="tj-quick-product-details" href="#tj-product-modal-1" data-vbtype="inline"><i
                                    class="tji-eye"></i></a> <span class="tj-product-action-btn-tooltip">Quick
                                  view</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tj-product-content">
                          <div class="tj-product-tag d-none">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>"> Cover</a>
                          </div>
                          <h3 class="tj-product-title">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Full leather bag pack</a>
                          </h3>

                          <div class="tj-product-price-wrapper">
                            <span class="price"><span><bdi><span>$</span>230.00</bdi></span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tj-product">
                      <div class="tj-product-item">
                        <div class="tj-product-thumb">
                          <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-6.webp" alt="">
                          </a>
                          <div class="tj-product-badge product-on-sale">
                            <span class="onsale">Sale</span>
                          </div>

                          <!-- product action -->
                          <div class="tj-product-action">
                            <div class="tj-product-action-item d-flex flex-column">
                              <div class="tj-product-action-btn product-add-wishlist-btn">
                                <button>Add to
                                  wishlist</button> <span class="tj-product-action-btn-tooltip">Add to
                                  wishlist</span>
                              </div>

                              <div class="tj-product-action-btn">
                                <a class="tj-quick-product-details" href="#tj-product-modal-1" data-vbtype="inline"><i
                                    class="tji-eye"></i></a> <span class="tj-product-action-btn-tooltip">Quick
                                  view</span>
                              </div>
                            </div>
                          </div>
                          <div class="tj-product-cart-btn">
                            <a href="<?php echo esc_url( home_url( "/cart" ) ); ?>" class="cart-button button tj-cart-btn stock-available ">
                              <span class="btn-text"><span>Add to cart</span></span>
                              <span class="btn-icon"><i class="tji-cart-bag"></i><i class="tji-cart-bag"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="tj-product-content">
                          <div class="tj-product-tag d-none">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>"> Speaker</a>
                          </div>
                          <h3 class="tj-product-title">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Hi-Fi wireless headphones</a>
                          </h3>

                          <div class="tj-product-price-wrapper">
                            <span class="price"><del><span><bdi><span>$</span>300.00</bdi></span></del>
                              <ins><span><bdi><span>$</span>160.00</bdi></span></ins></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="basic-pagination text-start">
                        <div class="tj-pagination shop">
                          <span aria-current="page" class="page-numbers current">1</span>
                          <a class="page-numbers" href="#">2</a>
                          <a class="page-numbers" href="#">3</a>
                          <a class="next page-numbers" href="#"><i class="tji-arrow-right-3"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="tj-shop-sidebar sidebar-sticky">
                  <div id="_price_filter-2" class="product-widget widget_price_filter">
                    <h5 class="product-widget-title">Price range</h5>
                    <form>
                      <div class="price_slider_wrapper">
                        <div class="price_slider" id="slider-range"></div> <!-- Added ID -->
                        <div class="price_slider_amount">
                          <button type="submit" class="button">Apply</button>
                          <div class="price_label">
                            <span class="from">$<span id="price-from">75</span></span> &mdash;
                            <span class="to">$<span id="price-to">300</span></span>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="product-widget  widget_product_categories">
                    <h5 class="product-widget-title">Categories</h5>
                    <ul class="product-categories">
                      <li><a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Power</a>
                        <span class="count">(3)</span>
                      </li>
                      <li><a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Connect</a> <span class="count">(2)</span></li>
                      <li><a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Smart</a> <span>(3)</span></li>
                      <li><a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Charge</a> <span class="count">(6)</span></li>
                      <li><a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Stream</a> <span class="count">(4)</span>
                      </li>
                    </ul>
                  </div>
                  <div class="product-widget  widget_products">
                    <h5 class="product-widget-title">Latest products</h5>
                    <ul class="product_list_widget">
                      <li class="tj-recent-product-list sidebar-recent-post">
                        <div class="single-post d-flex align-items-center ">
                          <div class="post-image">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                              <img width="300" height="300" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-7.webp"
                                class="attachment-_thumbnail size-_thumbnail" alt="Personal holding earbud">
                            </a>
                          </div>

                          <div class="post-header">
                            <h5 class="tj-product-title">
                              <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Room fragrance device</a>
                            </h5>
                            <div class="tj-product-sidebar-rating-price tj-product-price">
                              <del><span><span>$</span>180.00</span></del>
                              <ins><span><span>$</span>70.00</span></ins>
                            </div>
                          </div>

                        </div>
                      </li>
                      <li class="tj-recent-product-list sidebar-recent-post">
                        <div class="single-post d-flex align-items-center ">
                          <div class="post-image">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                              <img width="300" height="300" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-8.webp"
                                class="attachment-_thumbnail size-_thumbnail" alt="Super fast charger">
                            </a>
                          </div>

                          <div class="post-header">
                            <h5 class="tj-product-title">
                              <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Sleek sound earbuds</a>
                            </h5>
                            <div class="tj-product-sidebar-rating-price tj-product-price">
                              <del><span><span>$</span>60.00</span></del>
                              <ins><span><span>$</span>25.00</span></ins>
                            </div>
                          </div>

                        </div>
                      </li>
                      <li class="tj-recent-product-list sidebar-recent-post">
                        <div class="single-post d-flex align-items-center ">
                          <div class="post-image">
                            <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">
                              <img width="300" height="300" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product/product-9.webp"
                                class="attachment-_thumbnail size-_thumbnail" alt="Base booster speaker"> </a>
                          </div>

                          <div class="post-header">
                            <h5 class="tj-product-title">
                              <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>">Mini boom speaker</a>
                            </h5>
                            <div class="tj-product-sidebar-rating-price tj-product-price">
                              <del><span><span>$</span>170.00</span></del>
                              <ins><span><span>$</span>50.00</span></ins>
                            </div>
                          </div>

                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="product-widget  widget_product_tag_cloud">
                    <h5 class="product-widget-title">Tags</h5>
                    <div class="tagcloud">
                      <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>" class="tag-cloud-link ">Powerful</a>
                      <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>" class="tag-cloud-link">Portable</a>
                      <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>" class="tag-cloud-link ">Reliable</a>
                      <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>" class="tag-cloud-link">Fast</a>
                      <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>" class="tag-cloud-link">Compact</a>
                      <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>" class="tag-cloud-link">Durable</a>
                      <a href="<?php echo esc_url( home_url( "/shop-details" ) ); ?>" class="tag-cloud-link ">Bag</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- end: Shop Section -->
      </main>

<?php
endwhile;

get_footer();
