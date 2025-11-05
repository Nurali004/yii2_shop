<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

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

            <?php foreach ($brands

            as $brand): ?>

            <div class="">
                <div class="slick-track">

                    <div class="brand-area-image slick-slide slick-cloned" tabindex="-1" style="width: 186px;"
                         data-slick-index="-5" aria-hidden="true">

                        <img src="<?= $brand->img ?>" alt="Brand" class="img-fluid">

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
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4 col-sm-6">
                <div class="product-item">
                    <div class="product-item-image">
                        <a href="<?= Url::to(['/site/image', 'id'=> $product->id]) ?>"><img src="/<?= $product->img ?>" alt="Product Name" class="img-fluid"></a>
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
                        <a href="/"><?= $product->name ?></a>
                        <span><?= $product->price ?></span>
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
                        <a href="#"><img src="/<?= $category->img  ?>" alt="<?= $category->img ?>" width="200"></a>
                    </div>
                    <div class="productcategory-text">
                        <a href="#">
                            <h6><?= $category->name ?></h6>
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

