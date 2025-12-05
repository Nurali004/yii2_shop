<?php
/**
 * @var $order \common\models\Order
 */

$this->title = "Buyurtma muvaffaqiyatli yaratildi";
?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2>Buyurtma muvaffaqiyatli bajarildi!</h2>
        <p class="text-success">Buyurtma raqami: <strong>#<?= $order->id ?></strong></p>
    </div>

    <h4>Mijoz ma'lumotlari</h4>
    <table class="table table-bordered mb-5">
        <tr><th>Familiya</th><td><?= $order->l_name ?></td></tr>
        <tr><th>Ism</th><td><?= $order->f_name ?></td></tr>
        <tr><th>Telefon</th><td><?= $order->phone ?></td></tr>
        <tr><th>Manzil</th><td><?= $order->address ?></td></tr>
    </table>

    <h4>Buyurtma mahsulotlari</h4>
    <?php foreach ($orderItems as $item): ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Mahsulot</th>
            <th>Soni</th>
            <th>Narxi</th>
            <th>Jami</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td><?= $item->product->name_uz ?></td>
                <td><?= $item->count ?></td>
                <td><?= number_format($item->product->price, 0, '.', ' ') ?> so'm</td>
                <td><?= number_format($item->price, 0, '.', ' ') ?> so'm</td>
            </tr>

        </tbody>
    </table>

    <?php endforeach; ?>

    <div class="text-center mt-4">
        <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="btn btn-primary">Do‘konga qaytish</a>
    </div>
</div>

