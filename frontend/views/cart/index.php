<?php

use yii\widgets\Pjax;

$name = 'name_' . Yii::$app->language;
$description = 'description_' . Yii::$app->language;

$this->title = Yii::t('cart', 'Carts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('cart', 'Carts'), 'url' => ['index']];

?>

<div class="div">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"><?= Yii::t('cart', 'Mahsulotlar') ?></th>
                        <th scope="col"><?= Yii::t('category', 'Name') ?></th>
                        <th scope="col"><?= Yii::t('product', 'Price') ?></th>
                        <th scope="col"><?= Yii::t('product', 'Quantity') ?></th>
                        <th scope="col"><?= Yii::t('product', 'Total Price') ?></th>
                        <th scope="col"><?= Yii::t('product', 'Handle') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($cartItems)): ?>
                        <?php foreach ($cartItems as $item): ?>

                            <tr class="item-quantity" data-id="<?= $item['id'] ?>"
                                data-url="<?= \yii\helpers\Url::to(['cart/change-quantity']) ?>">
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="/<?= $item['img'] ?>" class="img-fluid me-5"
                                             style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4"><a href="<?= \yii\helpers\Url::to(['shop/detail', 'id' => $item['id']]) ?>"><?= $item['name_uz'] ?></a></p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4"><?= Yii::$app->formatter->asCurrency($item['price'] )?></p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">

                                        <input type="number" min="1"
                                               class="form-control form-control-sm text-center border-0"
                                               style="width: 80px" value="<?= $item['count'] ?>">

                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4"><?=Yii::$app->formatter->asCurrency($item['total_price']) ?></p>
                                </td>
                                <td>

                                    <button class="btn btn-md rounded-circle bg-light border mt-4">
                                        <?= \yii\bootstrap5\Html::a('',
                                                ['cart/delete', 'id' => $item['id']],
                                                [
                                                        'class' => 'fa fa-times text-danger',
                                                        'data' => [

                                                                'method' => 'post',

                                                        ]
                                                ]) ?>

                                    </button>

                                </td>

                            </tr>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Siz hali Mahsulotlardan tanlamadingiz!</p>
                        <a href=" <?= \yii\helpers\Url::to(['/cart/index']) ?>" class="btn btn-primary"></a>
                    <?php endif; ?>

                    </tbody>
                </table>

            </div>

            <p class="float-end mt-4">
                <?= \yii\bootstrap5\Html::a(Yii::t('product', 'Checkout'), ['cart/checkout'], ['class' => 'btn btn-primary'],) ?>
            </p>

        </div>
    </div>
</div>


