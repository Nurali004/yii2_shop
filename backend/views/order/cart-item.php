<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $order common\models\Order */
/* @var $orderItems common\models\OrderItem[] */

$this->title = "Order Details #{$order->id}";
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<p><b>.<?= Yii::t('customer', 'Customers') ?>.:</b> <?= $order->user ? $order->user->username : ($order->f_name . ' ' . $order->l_name) ?></p>
<p><b>.<?= Yii::t('order', 'Phone') ?>.:</b> <?= Html::encode($order->phone) ?></p>
<p><b>.<?= Yii::t('order', 'Address') ?>.:</b> <?= Html::encode($order->address) ?></p>

<h3><?= Yii::t('order', 'Products in this order') ?>:</h3>

<?php if (!empty($orderItems)): ?>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th><?= Yii::t('product', 'Products') ?></th>
            <th><?= Yii::t('product', 'Quantity') ?></th>
            <th><?= Yii::t('product', 'Price') ?></th>
            <th><?= Yii::t('product', 'Total Price') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($orderItems as $i => $item): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $item->product ? Html::encode($item->product->name_uz) : 'N/A' ?></td>
                <td><?= $item->count ?></td>
                <td><?= $item->price ?></td>
                <td><?= $item->price * $item->count ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No products in this order.</p>
<?php endif; ?>
