<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$name = 'name_'.Yii::$app->language;

$this->title = 'My Yii Application';
?>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php foreach ($sliders as $key => $slider): ?>
            <li data-target="#carouselExampleIndicators"
                data-slide-to="<?= $key ?>"
                class="<?= $key === 1 ? 'active' : '' ?>">
            </li>
        <?php endforeach; ?>
    </ol>

    <div class="carousel-inner">
        <?php foreach ($sliders as $key => $slider): ?>
            <div class="carousel-item <?= $key === 1 ? 'active' : '' ?>">
                <img class="d-block w-100" src="/<?= $slider->img ?>" alt="Slide">
            </div>
        <?php endforeach; ?>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>




<div class="row mb-3">
    <div class="col-sm-12">
        <div class="brand-area slick-initialized slick-slider">



            <div class="">
                <div class="slick-track">
                    <?php foreach ($brands as $brand): ?>

                    <div class="brand-area-image slick-slide slick-cloned" tabindex="-1" style="width: 186px;"
                         data-slick-index="-5" aria-hidden="true">

                        <img src="/<?= $brand->img ?>" alt="Brand" class="img-fluid">

                    </div>
                    <?php endforeach; ?>
                    <div class="brand-area-image slick-slide slick-cloned" tabindex="-1" style="width: 186px;"
                         data-slick-index="-4" aria-hidden="true">

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<section class="populerproduct" style="margin-top: 30px">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2><?= Yii::t('front', 'Popular Products') ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-item-image">
                        <a href="<?= Url::to(['/shop/shop', 'id'=> $product->id]) ?>"><img src="/<?= $product->img ?>" alt="Product Name" class="img-fluid"></a>
                        <div class="cart-icon">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75" viewBox="0 0 16.75 16.75">
                                    <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                        <g id="Icon" transform="translate(0 1)">
                                            <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682" cy="0.714" rx="0.682" ry="0.714" transform="translate(4.773 13.571)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></ellipse>
                                            <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682" cy="0.714" rx="0.682" ry="0.714" transform="translate(12.273 13.571)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></ellipse>
                                            <path id="Path_3" data-name="Path 3" d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409" transform="translate(-1 -1)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="product-item-info">



                        <a href="/"><?= $product->$name ?></a>
                        <span><?= $product->price ?></span>
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

            <?php endforeach; ?>

        </div>
    </div>
</section>


<section class="categorys">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Shop with top categorys</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($categories as $category): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="productcategory text-center">
                    <div class="productcategory-img">
                        <a href="#"><img src="/<?= $category->img  ?>" alt="<?= $category->img ?>" width="150" height="150"></a>
                    </div>
                    <div class="productcategory-text">
                        <a href="#">
                            <h6><?= $category->$name ?></h6>
                            <span>12</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="features-morebutton text-center">
                    <a class="btn bt-glass" href="#">View All Categorys</a>
                </div>
            </div>
        </div>
    </div>
</section>

