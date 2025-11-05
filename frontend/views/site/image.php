<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-12">
                <div class="product-slider">
                    <div class="exzoom" id="exzoom">
                        <div class="exzoom_img_box" style="width: 500px; height: 500px;">

                            <div class="exzoom_img_ul_outer" style="width: 500px; height: 500px;"><ul class="exzoom_img_ul" style="width: 2000px;">
                                    <?php use frontend\components\widgets\shop\ShopWidget;

                                    foreach ($products as $product): ?>
                                    <li style="width: 500px;"><img src="/<?= $product->img ?>" style="margin-top: 35px; width: 500px;"></li>
                                    <?php endforeach; ?>

                                </ul></div>
                            <div class="exzoom_zoom_outer" style="width: 500px; height: 430px; top: 35px; left: 0px; position: relative;">
                                <span class="exzoom_zoom" style="width: 215px; height: 215px; display: none; left: 285px; top: 0px;"></span>
                            </div>
                            <p class="exzoom_preview" style="width: 500px; height: 500px; left: 505px; display: none;">
                                <img class="exzoom_preview_img" src="/<?= $product->img ?>" style="width: 1162.79px; height: 1000px; left: -660.14px; top: 0px;">
                            </p>
                        </div>
                        <div class="exzoom_nav" style="height: 60px;"><p class="exzoom_nav_inner" style="width: 268px;"><span class="current" style="margin-left: 7px; width: 60px; height: 60px;"><img src="/<?= $product->img ?>" width="60" style="top:4.200000000000003px;"></span><span style="margin-left: 7px; width: 60px; height: 60px;"><img src="/<?= $product->img ?>" width="60" style="top:4.200000000000003px;"></span><span style="margin-left: 7px; width: 60px; height: 60px;"><img src="/<?= $product->img ?>" width="60" style="top:4.200000000000003px;"></span><span style="margin-left: 7px; width: 60px; height: 60px;"><img src="/<?= $product->img ?>" width="60" style="top:4.200000000000003px;"></span></p></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-12">
                <div class="product-pricelist">
                    <h2><?= $product->name ?></h2>
                    <div class="product-pricelist-ratting">
                        <div class="price">
                            <span><?= $product->price ?></span>
                        </div>
                        <div class="star">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li>5.0</li>
                                <li class="point">(500 Rating)</li>
                            </ul>
                        </div>
                    </div>
                    <p><?= $product->description ?></p>
                    <div class="product-pricelist-selector">

                        <div class="product-pricelist-selector-quantity">
                            <h6>quantity</h6>
                            <div class="wan-spinner wan-spinner-4">
                                <a href="javascript:void(0)" class="minus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69" viewBox="0 0 11.98 6.69">
                                        <path id="Arrow" d="M1474.286,26.4l5,5,5-5" transform="translate(-1473.296 -25.41)" fill="none" stroke="#989ba7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                    </svg>
                                </a>
                                <input type="text" value="1" min="1">
                                <a href="javascript:void(0)" class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69" viewBox="0 0 11.98 6.69">
                                        <g id="Arrow" transform="translate(10.99 5.7) rotate(180)">
                                            <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l5,5,5-5" transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                        </g>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-pricelist-selector-button">
                        <a class="btn cart-bg " href="#">Add to cart
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        </a>

                        <div class="product-pricelist-selector-button-item">
                            <div class="shipping">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.4" height="17.937" viewBox="0 0 21.4 17.937">
                                        <g id="Truck_Icon" data-name="Truck Icon" transform="translate(-0.8 -3.8)">
                                            <path id="Path_14" data-name="Path 14" d="M1.5,4.5H15.112V16.3H1.5Z" fill="none" stroke="#335aff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                            <path id="Path_15" data-name="Path 15" d="M24,12h3.63l2.722,2.722V19.26H24Z" transform="translate(-8.852 -3)" fill="none" stroke="#335aff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                            <path id="Path_16" data-name="Path 16" d="M9.037,26.269A2.269,2.269,0,1,1,6.769,24a2.269,2.269,0,0,1,2.269,2.269Z" transform="translate(-1.185 -7.5)" fill="none" stroke="#335aff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                            <path id="Path_17" data-name="Path 17" d="M28.537,26.269A2.269,2.269,0,1,1,26.269,24,2.269,2.269,0,0,1,28.537,26.269Z" transform="translate(-8.852 -7.5)" fill="none" stroke="#335aff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                        </g>
                                    </svg>

                                </div>
                                <p>Free Shipping Cast</p>
                            </div>
                            <div class="delivery">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17.5" viewBox="0 0 17.5 17.5">
                                        <g id="Icon" transform="translate(-2.25 -2.25)">
                                            <path id="Path_20" data-name="Path 20" d="M19,11a8,8,0,1,1-8-8A8,8,0,0,1,19,11Z" fill="none" stroke="#335aff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                            <path id="Path_21" data-name="Path 21" d="M18,9v4.8l3.2,1.6" transform="translate(-7 -2.8)" fill="none" stroke="#335aff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                        </g>
                                    </svg>
                                </div>
                                <p>3 Days Delivery Time</p>
                            </div>
                            <div class="cash">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16">
                                        <path id="Icon" d="M14.863,11.522c-2.23-.524-2.947-1.067-2.947-1.911,0-.969.992-1.644,2.652-1.644,1.749,0,2.4.756,2.456,1.867H19.2a3.655,3.655,0,0,0-3.153-3.387V4.5H13.095V6.42c-1.906.373-3.438,1.493-3.438,3.209,0,2.053,1.876,3.076,4.617,3.671,2.456.533,2.947,1.316,2.947,2.142,0,.613-.481,1.591-2.652,1.591-2.024,0-2.819-.818-2.927-1.867H9.48c.118,1.947,1.729,3.04,3.615,3.4V20.5h2.947V18.589c1.916-.329,3.438-1.333,3.438-3.156C19.48,12.909,17.093,12.047,14.863,11.522Z" transform="translate(-9.48 -4.5)" fill="#335aff"></path>
                                    </svg>
                                </div>
                                <p>Cash on Delivery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= ShopWidget::widget() ?>