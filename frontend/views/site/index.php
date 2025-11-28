<?php

/** @var yii\web\View $this */

use common\models\Category;
use common\models\Slider;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$name = 'name_'.Yii::$app->language;

$this->title = 'My Yii Application';

if (Yii::$app->session->hasFlash('support')) {

    Yii::$app->session->getFlash('support');
}


?>

<?php if (Yii::$app->session->hasFlash('support')): ?>

<div class="alert alert-primary" role="alert">
   <?= Yii::$app->session->getFlash('support') ?>
</div>

<?php endif; ?>



<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-secondary">Online Do'kon</h4>
                <h1 class="mb-5 display-3 text-primary">Zamonaviy elektron buyumlar</h1>
                <div class="position-relative mx-auto">
                    <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                    <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                </div>
            </div>

            <div class="col-md-12 col-lg-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-inner" role="listbox"> <!-- Bu ikkinchi carousel-inner noto'g'ri -->
                            <?php foreach ($sliders as $index => $slider): ?>
                                <div class="carousel-item <?= $index == 0 ? 'active' : '' ?> rounded">
                                    <img src="/<?= $slider->img ?>" class="img-fluid w-100 h-100 bg-secondary rounded" alt="slide">
                                    <a href="#" class="btn px-4 py-2 text-white rounded"><?= $slider->name ?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Featurs Section Start -->
<div class="container-fluid featurs py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-car-side fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Free Shipping</h5>
                        <p class="mb-0">Free on order over $300</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-user-shield fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Security Payment</h5>
                        <p class="mb-0">100% security payment</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-exchange-alt fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>30 Day Return</h5>
                        <p class="mb-0">30 day money guarantee</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fa fa-phone-alt fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>24/7 Support</h5>
                        <p class="mb-0">Support every time fast</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featurs Section End -->

<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <div class="tab-class text-center">
            <div class="row g-4">
                <div class="col-lg-4 text-start">
                    <h1>Mahsulotlar</h1>
                </div>
                <div class="col-lg-8 text-end">
                    <ul class="nav nav-pills d-inline-flex text-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-0">
                                <span class="text-dark" style="width: 130px;">All Products</span>
                            </a>
                        </li>
                        <?php $categories = Category::find()->where(['status' => 1])->all(); ?>
                        <?php foreach ($categories as $category): ?>

                        <li class="nav-item">
                            <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-<?= $category->id ?>">
                                <span class="text-dark" style="width: 130px;"><?= $category->name_uz ?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-0" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">

                                <?php foreach ($products as $product): ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3 product-itemm" data-key="<?= $product->id ?>"">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/<?= $product->img ?>" class="img-fluid w-100 rounded-top" alt="" width="100" height="100">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?= $product->category->name_uz ?></div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Grapes</h4>
                                                <p><?= $product->name_uz ?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0"><?= $product->price ?></p>
                                                    <?= Html::a('<i class="fa fa-shopping-bag me-2 text-primary"></i>Add to Cart', ['cart/create', 'id' => $product->id],
                                                    [
                                                            'class' => 'btn border border-secondary rounded-pill px-3 text-primary btn-add-to-cart',


                                                    ],
                                            ) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-1" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <?php $category_sms = Category::find()->where(['pid' => 1])->all(); ?>

                                <?php foreach ($category_sms as $category_sm): ?>
                                <?php  $product_sms = \common\models\Product::find()->where(['category_id' => $category_sm->id])->all(); ?>
                                <?php foreach ($product_sms as $product_sm): ?>
                                <div class="col-md-6 col-lg-4 col-xl-3 product-itemm" data-key="<?= $product->id ?>"">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/<?= $product_sm->img ?>" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">


                                            <p><?= $category_sm->name_uz ?></p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0"><?= $product_sm->price ?></p>
                                                <a href="<?= Url::to(['cart/create', 'id'=> $product_sm->id]) ?>" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <?php $category_kms = Category::find()->where(['pid' => 5])->all(); ?>

                                <?php foreach ($category_kms as $category_km): ?>
                                    <?php  $product_kms = \common\models\Product::find()->where(['category_id' => $category_km->id])->all(); ?>
                                       <?php foreach ($product_kms as $product_km): ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3 product-itemm" data-key="<?= $product->id ?>"">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/<?= $product_km->img ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">


                                                <p><?= $category_km->name_uz ?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0"><?= $product_km->price ?></p>
                                                    <?= Html::a('<i class="fa fa-shopping-bag me-2 text-primary"></i>Add to Cart', ['cart/create', 'id' => $product->id],
                                                    [
                                                            'class' => 'btn border border-secondary rounded-pill px-3 text-primary btn-add-to-cart',


                                                    ],
                                            ) ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                       <?php endforeach; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-10" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <?php $category_mts = Category::find()->where(['pid' => 10])->all(); ?>

                                <?php foreach ($category_mts as $category_mt): ?>
                                    <?php  $product_mts = \common\models\Product::find()->where(['category_id' => $category_mt->id])->all(); ?>
                                         <?php foreach ($product_mts as $product_mt): ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3 product-itemm" data-key="<?= $product->id ?>"">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/<?= $product_mt->img ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">


                                                <p><?= $category_mt->name_uz ?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0"><?= $product_mt->price ?></p>
                                                    <?= Html::a('<i class="fa fa-shopping-bag me-2 text-primary"></i>Add to Cart', ['cart/create', 'id' => $product->id],
                                                    [
                                                            'class' => 'btn border border-secondary rounded-pill px-3 text-primary btn-add-to-cart',


                                                    ],
                                            ) ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                         <?php endforeach; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->

<!-- Featurs Start -->
<div class="container-fluid service py-3">
    <div class="container py-4">
        <h1>Hamkorlar</h1>
        <div class="row g-4 justify-content-center">
            <div class="row g-4 justify-content-start">
                <?php foreach ($partners as $partner): ?>
                    <div class="col-auto">
                        <a href="#">
                            <div class="btn btn-primary p-4">
                                <img src="/<?= $partner->img ?>" class="img-fluid rounded-top" alt="">
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>


        </div>
    </div>
</div>
<!-- Featurs End -->

<!-- Vesitable Shop Start-->
<div class="container-fluid vesitable py-5">
    <div class="container py-5">
        <h1 class="mb-0">Eng Ko'p Sotilgan mahsulotlar</h1>
        <div class="owl-carousel vegetable-carousel justify-content-center">
            <?php foreach ($products as $product): ?>
            <div class="border border-primary rounded position-relative vesitable-item product-itemm" data-key="<?= $product->id ?>">
                <div class="vesitable-img">
                    <img src="/<?= $product->img ?>" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                <div class="p-4 rounded-bottom">
                    <h4><?= $product->category->name_uz ?></h4>
                    <p><?= $product->name_uz ?></p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0"><?= $product->price ?></p>
                        <?= Html::a('<i class="fa fa-shopping-bag me-2 text-primary"></i>Add to Cart', ['cart/create', 'id' => $product->id],
                                                    [
                                                            'class' => 'btn border border-secondary rounded-pill px-3 text-primary btn-add-to-cart',


                                                    ],
                                            ) ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Vesitable Shop End -->

<!-- Banner Section Start-->

<!-- Banner Section End -->

<!-- Bestsaler Product Start -->

<!-- Bestsaler Product End -->

<!-- Fact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="bg-light p-5 rounded">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 product-itemm" data-key="<?= $product->id ?>"">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>satisfied customers</h4>
                        <h1>1963</h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 product-itemm" data-key="<?= $product->id ?>"">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>quality of service</h4>
                        <h1>99%</h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 product-itemm" data-key="<?= $product->id ?>"">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>quality certificates</h4>
                        <h1>33</h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 product-itemm" data-key="<?= $product->id ?>"">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>Available Products</h4>
                        <h1>789</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Start -->

<!-- Tastimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="testimonial-header text-center">
            <h4 class="text-primary">Our Testimonial</h4>
            <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="bg-secondary rounded">
                            <img src="/shop/img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="ms-4 d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="bg-secondary rounded">
                            <img src="/shop/img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="ms-4 d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="bg-secondary rounded">
                            <img src="/shop/img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="ms-4 d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

