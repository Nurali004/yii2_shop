<?php if (empty($carts)): ?>
    <p>Customer cart is empty.</p>
<?php else: ?>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>

            <th><?= Yii::t('product', 'Products') ?></th>
            <th><?= Yii::t('product', 'Quantity') ?></th>
            <th><?= Yii::t('product', 'Price') ?></th>
            <th><?= Yii::t('product', 'Total Price') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($carts as $item): ?>
            <tr>
                <td><?= $item->product->name_uz ?></td>
                <td><?= $item->count ?></td>
                <td><?= $item->product->price ?></td>
                <td><?= $item->count * $item->product->price ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

