<?php use yii\helpers\Html; ?>
<?php

if (Yii::$app->language == 'uz-Cyrl') {
    $name = 'name_uz';
}else{
    $name = 'name_'.Yii::$app->language;
}
?>

<h1>Mahsulotlar ro'yxati</h1>


    <div class="container" style="margin-top:100px;">
        <div class="row">

            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th><?= Yii::t('category', 'Img') ?></th>
                    <th><?= Yii::t('category', 'Name') ?></th>
                    <th><?= Yii::t('product', 'Price') ?></th>
                    <th><?= Yii::t('product', 'Handle') ?></th>

                </tr>
                <?php foreach ($products as $product): ?>

                    <tr>
                        <td><img src="/<?= $product->img ?>"  width="100" alt=""></td>
                        <td><?= $product->$name ?></td>
                        <td><?= $product->price ?></td>

                            <td>
                                <a class="btn btn-outline-danger" href="<?= \yii\helpers\Url::to(['favorite/remove', 'product_id'=> $product->id]) ?>">Delete</a>
                            </td>


                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

    </div>

