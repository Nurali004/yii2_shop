<?php

use yii\bootstrap5\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\Pjax;

if (Yii::$app->language == 'uz-Cyrl') {
    $name = 'name_uz';
}else{

$name = 'name_' . Yii::$app->language;
}


$this->title = 'Shop';
$this->params['breadcrumbs'][] = $this->title;
?>





<div class="container-fluid fruite py-5">

        <h1 class="mb-4">Fresh fruits shop</h1>
        <div class="row g-4">
            <?php $form = \yii\bootstrap5\ActiveForm::begin([
                    'method' => 'get',
                'action' => ['shop/index'],
            ]) ?>
            <?php Pjax::begin() ?>
            <div class="col-lg-12">
                <div class="row g-4">

                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">

                          <div class="input-group">
                              <?= $form->field($searchModel, 'search')->textInput(['placeholder' => 'Search products', 'class'=> 'form-control p-3'])->label(false) ?>
                          </div>

                           <div class="input-group">
                               <?= Html::submitButton('<i class="fas fa-search"></i>', ['class' => 'btn btn-primary']) ?>
                           </div>

                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <?= $form->field($searchModel, 'sortt')->dropDownList([
                                    'expensive' => 'Avval qimmatlari',
                                    'cheap' => 'Avval arzonlari',
                                     'a' => "yangi qo'shilganlar",
                                     'z' => "eski qo'shilganlar",

                            ])->label('Saralash') ?>

                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Categories</h4>
                                    <ul class="list-unstyled fruite-categorie">
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Apples</a>
                                                <span>(3)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Oranges</a>
                                                <span>(5)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Strawbery</a>
                                                <span>(2)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Banana</a>
                                                <span>(8)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Pumpkin</a>
                                                <span>(5)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4 class="mb-2">Price</h4>

                            <?= $form->field($searchModel, 'price')->input('range',['placeholder' => 'Price', 'id' => 'rangeInput', 'class'=> 'form-range w-100', 'oninput' => 'amount.value=rangeInput.value', 'value' => $minValue, 'min' => $minValue,  'max'=> $maxValue ])->label(false) ?>

<!--                                    <input type="range" class="" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">-->
                                    <output id="amount" name="amount" min-velue="<?=$minValue ?>" max-value="<?= $maxValue ?>f" for="rangeInput"><?= $minValue ?></output>


                                </div>
                                <?= Html::submitButton('Apply', ['class' => 'btn btn-primary']) ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-4 justify-content-center">
                            <?php foreach ($dataProvider->getModels() as $product): ?>
                                <div class="col-md-6 col-lg-6 col-xl-4 product-itemm" data-key="<?= $product->id ?>">

                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <a href="<?= Url::to(['shop/detail', 'id'=> $product->id]) ?>"><img src="/<?= $product->img ?>" class="img-fluid w-100 rounded-top" alt=""></a>
                                    </div>


                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?= $product->category->$name ?></div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <?= Html::a('❤️', ['favorite/add', 'product_id' => $product->id], ['class' => 'btn btn-primary']) ?>

                                        <p><a href="<?= Url::to(['shop/detail', 'id' => $product->id]) ?>"><?= $product->$name ?></a></p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0"><?= Yii::$app->formatter->asCurrency($product->price ) ?></p>
                                            <?= Html::a('<i class="fa fa-shopping-bag me-2 text-primary"></i>'. Yii::t('cart', 'Add to Cart'), ['cart/create', 'id' => $product->id],
                                                    [

                                                        'class' => 'btn border border-secondary rounded-pill px-3 text-primary btn-add-to-cart',
                                                    ],
                                            ) ?>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>

                            <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    <?= \yii\bootstrap5\LinkPager::widget([
                                            'pagination' => $dataProvider->pagination,
                                            'options' => [
                                                    'class' => 'pagination',
                                                    'tag' => false,
                                            ],
                                            'linkContainerOptions' => [ 'tag' => false ],
                                            'linkOptions' => ['class' => 'rounded'],
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php Pjax::end(); ?>
            <?php \yii\bootstrap5\ActiveForm::end(); ?>
        </div>

</div>





