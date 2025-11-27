
$(function(){
        const $cartQuantity = $('#cart-quantity');
        const $addToCart = $('.btn-add-to-cart');
        const $itemQuantity = $('.item-quantity');

        $addToCart.click(ev => {
            ev.preventDefault();
            const $this = $(ev.currentTarget);
            const id = $this.closest('.product-itemm').data('key');

            console.log(id);
            $.ajax({
                method: 'POST',
                url: '/cart/create',
                data: {
                    id: id,
                    '<?= Yii::$app->request->csrfParam ?>': '<?= Yii::$app->request->csrfToken ?>'
                },
                success: function (){
                    console.log(arguments);
                    $cartQuantity.text(parseInt($cartQuantity.text() || 0) + 1);
                }

            });
        })

        $itemQuantity.click(ev => {
            const $this = $(ev.target);
            let $tr = $this.closest('tr');
            const id = $tr.data('id');
            $.ajax({
                method: 'POST',
                url: $tr.data('url'),
                data: {
                    id: id,
                    quantity: $this.val()

                },
                success: function (res) {
                    $cartQuantity.text(res.totalQuantity);


                }
            })
        })
    }
);