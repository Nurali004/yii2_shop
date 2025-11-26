

$(function(){
        const $cartQuantity = $('#cart-quantity');
        const $addToCart = $('.btn-add-to-cart');
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
    }
);