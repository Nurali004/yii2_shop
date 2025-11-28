

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
                url: $this.attr('href'),
                data: {id: id},
                success: function (){
                    console.log(arguments);
                    $cartQuantity.text(parseInt($cartQuantity.text() || 0) + 1);
                }

            });
        })


        $itemQuantity.change(ev => {
            console.log(123);
        const $this = $(ev.target);
        let $tr = $this.closest('tr');
        const id = $tr.data('id');
        $.ajax({
            method: 'post',
            url: $tr.data('url'),
            data: {id, quantity: $this.val()},
            success: function (totalQuantity){
                $cartQuantity.text(totalQuantity);
            }
        });
    });
    }
);