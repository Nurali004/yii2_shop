<?php

/** @var yii\web\View $this */

use common\models\Order;

if (Yii::$app->language == 'uz-Cyrl') {
    $name = 'name_uz';
}else{
    $name = 'name_'.Yii::$app->language;
}

$this->title = Yii::t('menu', 'Online Shopping');
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4"><?= Yii::t('site', 'Congratulation ') ?>!</h1>

    </div>

    <div class="content">
        <div class="row items-push">
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-list fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold"><?= $stats['categories'] ?></div>
                        <div class="text-muted mb-3">Category</div>
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                            <a class="fw-medium" href="<?= \yii\helpers\Url::to(['category/index']) ?>">
                                View all categories
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-box fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold"><?= $stats['products'] ?></div>
                        <div class="text-muted mb-3">Products</div>
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                            <a class="fw-medium" href="<?= \yii\helpers\Url::to(['product/index']) ?>">
                                View all products
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-shopping-cart fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold"><?= $stats['carts'] ?></div>
                        <div class="text-muted mb-3">Carts</div>
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                            <a class="fw-medium" href="<?= \yii\helpers\Url::to(['cart/index']) ?>">
                                View all carts
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-shopping-bag fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold"><?= $stats['orders'] ?></div>
                        <div class="text-muted mb-3">Orders</div>
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                            <a class="fw-medium" href="<?= \yii\helpers\Url::to(['category/index']) ?>">
                                View all orders
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Keyingi row: Customers, Partners, Client Sayings, Favorites -->
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-users fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold"><?= $stats['customers'] ?></div>
                        <div class="text-muted mb-3">Customers</div>
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                            <a class="fw-medium" href="<?= \yii\helpers\Url::to(['customer/index']) ?>">
                                View all customers
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-handshake fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold"><?= $stats['partners'] ?></div>
                        <div class="text-muted mb-3">Partners</div>
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                            <a class="fw-medium" href="<?= \yii\helpers\Url::to(['partner/index']) ?>">
                                View all partners
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-comment fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold"><?= $stats['clientSayings'] ?></div>
                        <div class="text-muted mb-3">Client Sayings</div>
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                            <a class="fw-medium" href="<?= \yii\helpers\Url::to(['client-saying/index']) ?>">
                                View all client sayings
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-heart fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold"><?= $stats['favorites'] ?></div>
                        <div class="text-muted mb-3">Favorites</div>
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                            <a class="fw-medium" href="<?= \yii\helpers\Url::to(['favorite/index']) ?>">
                                View all favorites
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-8">
        <div class="block block-rounded block-mode-loading-refresh">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Latest Orders
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <div class="dropdown">
                        <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="si si-chemistry"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <?php foreach ($orders as $order): ?>
                            <a class="dropdown-item" href="#">
                                <i class="far fa-fw fa-dot-circle opacity-50 me-1"></i><?= $order->status ?>
                            </a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                    <thead>
                    <tr class="text-uppercase">
                        <th>Product</th>
                        <th class="d-none d-xl-table-cell">Date</th>
                        <th>Status</th>
                        <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Price</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orderItems as $order): ?>
                    <tr>
                        <td>
                            <span class="fw-semibold"><?= $order->product->$name?></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><?= $order->order->created_at ?></span>
                        </td>
                        <td>
                            <?php if ($order->order->status == Order::STATUS_PROCESSING): ?>
                            <span class="fw-semibold text-warning"><?=
                                'Processing' ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                            <?= $order->price ?>
                        </td>

                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                <a class="fw-medium" href="<?= \yii\helpers\Url::to(['order/index']) ?>">
                    View all orders
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 d-flex flex-column">
        <div class="block block-rounded">
            <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                <div class="me-3">
                    <p class="fs-3 fw-bold mb-0">
                        <?= $order_cm ?>
                    </p>
                    <p class="text-muted mb-0">
                        Completed orders
                    </p>
                </div>
                <div class="item rounded-circle bg-body">
                    <i class="fa fa-check fa-lg text-primary"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                <a class="fw-medium" href="<?= \yii\helpers\Url::to(['order-item/index']) ?>">
                    View Archive
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                </a>
            </div>
        </div>
        <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
            <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                <div class="w-100">
                    <div class="item rounded-3 bg-body mx-auto my-3">
                        <i class="fa fa-archive fa-lg text-primary"></i>
                    </div>
                    <div class="fs-1 fw-bold"><?= $order_st ?></div>
                    <div class="text-muted mb-3">Products out of stock</div>
                    <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-warning bg-warning-light">
                        5% of portfolio
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                <a class="fw-medium" href="<?= \yii\helpers\Url::to(['product/index']) ?>">
                    Order supplies
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Statistics</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-border table-vcenter">
                    <tr>
                        <th>Users</th>
                        <th>Orders</th>
                        <th>Products</th>
                        <th>Categories</th>
                    </tr>



                    <tr>

                        <td><?= $statistics->user_count ?></td>
                        <td><?= $statistics->order_count ?></td>
                        <td><?= $statistics->product_count ?></td>
                        <td><?= $statistics->product_item ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>
