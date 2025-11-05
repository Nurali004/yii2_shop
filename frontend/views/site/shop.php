<?php

use yii\bootstrap5\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = 'Shop';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>


<section class="search">
    <div class="container">
        <div class="row justify-content-center">
            <div class="search-wrapper">
                <?php Pjax::begin(); ?>
               <?php \yii\bootstrap5\ActiveForm::begin([]) ?>

                <?= $this->render('_search', ['model' => $searchModel]); ?>


                <?php \yii\bootstrap5\ActiveForm::end() ?>


                <?php Pjax::end() ?>

            </div>
        </div>
    </div>
</section>


<section class="categoryitem">
    <div class="container">
        <div class="row justify-content-center">
            <div class="categoryitem-wrapper">

                <div class="categoryitem-wrapper-itembox">
                    <h6>Category</h6>
                    <select style="display: none;">
                        <option data-display="Men">Men</option>
                        <option value="1">Men</option>
                        <option value="2">Men</option>
                        <option value="4">Men</option>
                    </select>
                    <div class="nice-select" tabindex="0">
                        <span class="current"> Category Name</span>
                        <ul class="list">
                            <?php foreach ($categories as $category): ?>

                                <li data-value="<?= $category->id ?>" class="option"><?= $category->name ?></li>

                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
                <div class="categoryitem-wrapper-price">
                    <h6>Price</h6>

                    <div class="nice-select" tabindex="0">
                        <span class="current"> Product Price</span>
                        <ul class="list">
                            <li data-value="Men" data-display="Men" class="option selected">Categoriyani tanlang..</li>
                            <?php foreach ($categories as $category): ?>
                                <?php foreach ($category->products as $price): ?>
                                    <li data-value="1" class="option"><?= $price->price ?></li>
                                <?php endforeach; ?>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="populerproduct bg-white p-0 shop-product">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-item-image">
                            <a href="/"><img src="/<?= $product->img ?>" alt="Product Name" class="img-fluid"></a>
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


<section class="pagination">
    <div class="container">
        <div class="row justify-content-center">
            <div class="pagination-group">

                <?=

                \yii\bootstrap5\LinkPager::widget([
                        'pagination' => $pagination,
                        'options' => ['class' => 'cdp_i'],

                ])

                ?>

            </div>

        </div>
    </div>
</section>



