<section class="features bg-lightwhite">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Featured Products</h2>
                </div>
            </div>
        </div>
        <div class="features-wrapper">
            <div class="features-active slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 4160px; transform: translate3d(-1600px, 0px, 0px); transition: transform 500ms;">
                        <?php foreach ($products as $product): ?>
                        <div class="product-item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 290px;">
                            <div class="product-item-image">
                                <a href="/" tabindex="-1"><img src="/<?= $product->img ?>" alt="Product Name" class="img-fluid"></a>
                                <div class="cart-icon">
                                    <a href="#" tabindex="-1"><i class="far fa-heart"></i></a>
                                    <a href="#" tabindex="-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75" viewBox="0 0 16.75 16.75">
                                            <g id="" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="" transform="translate(0 1)">
                                                    <ellipse id="" data-name="Ellipse 2" cx="0.682" cy="0.714" rx="0.682" ry="0.714" transform="translate(4.773 13.571)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></ellipse>
                                                    <ellipse id="" data-name="Ellipse 3" cx="0.682" cy="0.714" rx="0.682" ry="0.714" transform="translate(12.273 13.571)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></ellipse>
                                                    <path id="" data-name="Path 3" d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409" transform="translate(-1 -1)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html" tabindex="-1">BERRY TYPE-II: C1N Backpack</a>
                                <span>$975</span> <del>$999</del>
                            </div>
                        </div>

                        <?php endforeach; ?>

                    </div>
                </div>




            </div>
            <div class="slider-arrows">
                <div class="prev-arrow slick-arrow" style="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.828" viewBox="0 0 9.414 16.828">
                        <path id="Icon_feather-chevron-left" data-name="Icon feather-chevron-left" d="M20.5,23l-7-7,7-7" transform="translate(-12.5 -7.586)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </div>
                <div class="next-arrow slick-arrow" style="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.828" viewBox="0 0 9.414 16.828">
                        <path id="Icon_feather-chevron-right" data-name="Icon feather-chevron-right" d="M13.5,23l5.25-5.25.438-.437L20.5,16l-7-7" transform="translate(-12.086 -7.586)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="features-morebutton text-center">
                    <a class="btn bt-glass" href="#">View All Products</a>
                </div>
            </div>
        </div>
    </div>
</section>
