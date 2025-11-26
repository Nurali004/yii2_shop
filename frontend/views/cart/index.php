<?php

$name = 'name_'.Yii::$app->language;
$description = 'description_'.Yii::$app->language;

?>

<!--<div class="row">-->
<!---->
<!--    --><?php //foreach ($products as $item): ?>
<!--        --><?php //$product = $item->product; ?>
<!---->
<!--        <div class="col-md-4 mb-3">-->
<!--            <div class="card shadow-sm">-->
<!--                --><?php //foreach ($product_img as $img): ?>
<!--                    <img src="/--><?php //= $img->img ?><!--" class="card-img-top" alt="">-->
<!--                --><?php //endforeach; ?>
<!---->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">--><?php //= $product->$name ?><!--</h5>-->
<!--                    <p class="card-text">--><?php //= $product->$description ?><!--</p>-->
<!---->
<!--                    <p><strong>Soni:</strong> --><?php //= $item->count ?><!--</p>-->
<!---->
<!--                    <a href="--><?php //= \yii\helpers\Url::to(['/cart/delete', 'product_id' => $product->id]) ?><!--" class="btn btn-danger">O‘chirish</a>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //endforeach; ?>
<!---->
<!--</div>-->


<section class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Dashboard-Nav  Start-->
                <div class="dashboard-nav">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?= \yii\helpers\Url::to(['/site/profile']) ?>">Account
                                settings</a></li>
                        <li class="list-inline-item"><a href="#">Billing information</a></li>
                        <li class="list-inline-item"><a href="<?= \yii\helpers\Url::to(['/cart/index']) ?>" class="active">My cart</a></li>
                        <li class="list-inline-item"><a href="order.html">Order</a></li>
                    </ul>
                </div>
                <!-- Dashboard-Nav  End-->
            </div>
        </div>

        <div class="rows">
            <div class="cart-items">
                <div class="header">
                    <div class="image">
                        Image
                    </div>
                    <div class="name">
                       Name
                    </div>
                    <div class="price">
                        Price
                    </div>

                    <div class="info">
                        Info
                    </div>
                </div>

                <div class="body">
                    <?php foreach ($product_img as $product): ?>
                    <div class="item">
                        <div class="image">
                            <img src="/<?= $product->product->img ?>" alt="">
                        </div>
                        <div class="name">
                            <div class="name-text">
                                <p><?= $product->product->$name ?></p>
                            </div>
                            <div class="button">
                                <a class="btn bg-primary" href="billing-information.html">Checkout now</a>
                                <a class="cart-btn" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                        <g id="Heart" transform="translate(1 1)">
                                            <path id="Heart-2" data-name="Heart" d="M18.161,4.413a4.674,4.674,0,0,0-6.7,0l-.913.93-.913-.93a4.675,4.675,0,0,0-6.7,0,4.893,4.893,0,0,0,0,6.828l.913.93L10.548,19l6.7-6.828.913-.93a4.892,4.892,0,0,0,0-6.828Z" transform="translate(-1.549 -2.998)" fill="#fff" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </g>
                                    </svg>
                                </a>
                                <a class="del" href="<?= \yii\helpers\Url::to(['/cart/delete', 'product_id'=> $product->id]) ?>">Delete</a>
                            </div>
                        </div>
                        <div class="price">
                            <span><?= $product->product->price ?></span>
                        </div>
                        <div class="info mt-5">

                            <div class="quantity">
                                <div class="product-pricelist-selector-quantity">
                                    <h6>quantity</h6>
                                    <div class="wan-spinner wan-spinner-4">
                                        <a href="javascript:void(0)" class="minus">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69" viewBox="0 0 11.98 6.69">
                                                <path id="Arrow" d="M1474.286,26.4l5,5,5-5" transform="translate(-1473.296 -25.41)" fill="none" stroke="#989ba7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                            </svg>
                                        </a>
                                        <input type="text" value="1" min="1">
                                        <a href="javascript:void(0)" class="plus"><svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69" viewBox="0 0 11.98 6.69">
                                                <g id="Arrow" transform="translate(10.99 5.7) rotate(180)">
                                                    <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l5,5,5-5" transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="apply-coupon">
                    <h6>Apply Coupon</h6>
                    <form action="#">
                        <div class="form__div">
                            <input type="text" class="form__input" placeholder=" ">
                            <label for="" class="form__label">Coupon Code</label>
                        </div>
                        <button class="btn bg-primary" type="submit">apply COUPON</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-price">
                    <h6>Check Summery</h6>
                    <div class="card-price-list d-flex justify-content-between align-items-center">
                        <div class="item">
                            <p>3 item</p>
                        </div>
                        <div class="price">
                            <p>$125</p>
                        </div>
                    </div>
                    <div class="card-price-list d-flex justify-content-between align-items-center">
                        <div class="item">
                            <p>Shipping Cast</p>
                        </div>
                        <div class="price">
                            <p>$55</p>
                        </div>
                    </div>
                    <div class="card-price-list d-flex justify-content-between align-items-center">
                        <div class="item">
                            <p>Discount</p>
                        </div>
                        <div class="price">
                            <p>8%</p>
                        </div>
                    </div>
                    <div class="card-price-list d-flex justify-content-between align-items-center">
                        <div class="item">
                            <p>Taxes</p>
                        </div>
                        <div class="price">
                            <p>$5.49</p>
                        </div>
                    </div>
                    <div class="card-price-subtotal d-flex justify-content-between align-items-center">
                        <div class="total-text">
                            <p>Total Price</p>
                        </div>
                        <div class="total-price">
                            <p>$174.99</p>
                        </div>

                    </div>
                    <form action="#">
                        <a href="billing-information.html" class="btn bg-primary" type="submit" style="width: 100%;">Checkout Now</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

