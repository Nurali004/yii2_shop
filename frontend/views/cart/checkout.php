<?php
/**
 * @var $order \common\models\Order
 */
$this->title = Yii::t('order', 'Checkout');
$this->params['breadcrumbs'][] = ['label' => Yii::t('cart', 'Carts'), 'url' => ['checkout']];

?>

<div class="container-fluid py-5">
    <div class="container py-5">
        <h2 class="mb-4">User information</h2>
        <?php $form = \yii\bootstrap5\ActiveForm::begin(['action' => 'create-order', 'method' => 'post']); ?>
            <div class="row g-5">
                <div class="col-md-12 col-lg-6 col-xl-7">

                    <?= $form->field($order, 'l_name')->textInput() ?>
                    <?= $form->field($order, 'f_name')->textInput() ?>
                    <?= $form->field($order, 'address')->textInput() ?>
                    <?= $form->field($order, 'phone')->textInput() ?>


                </div>
                <div class="col-md-12 col-lg-6 col-xl-5">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Products</th>
                                <th scope="col">Total price</th>

                            </tr>
                            </thead>
                            <?php $carts = \common\models\Cart::getCartProducts(Yii::$app->user->id); ?>
                            <tbody>
                            <?php foreach ($carts as $cart): ?>
                            <tr>
                                <td class="py-5"><?= $cart['name_uz'] ?></td>
                                <td class="py-5"><?= $cart['total_price'] ?></td>

                            </tr>
                            <?php endforeach; ?>


                            </tbody>
                        </table>
                        <p class="float-end mt-3">
                            <?=
                             \yii\bootstrap5\Html::submitButton('Create order',  ['class' => 'btn btn-secondary'])

                            ?>
                        </p>
                    </div>

                </div>
                <?php \yii\bootstrap5\ActiveForm::end() ?>
            </div>

    </div>
</div>
