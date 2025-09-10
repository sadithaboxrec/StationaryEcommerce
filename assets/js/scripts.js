     // var mainimg= document.getElementById("mainimg");
     // var smallimg=document.getElementsByClassName("small-img");

     // for(let i=0;i<4;i++){

     //  smallimg[i].onclick=function(){
     //  mainimg.src = smallimg[i].src;
     // }

     // }

$(document).ready(function() {
    $(document).on('click', '.buy-btn', function(e) {
        e.preventDefault();

        console.log("Buy button clicked");

        var qty = $(this).closest('.product-data').find('.qty-input').val();
        var pro_id = $(this).val();

        $.ajax({
            method: "POST",
            url: "functions/addtocartfunctions.php",
            data: {
                "product_id": pro_id,       
                "product_qty": qty,         
                "scope": "addtoCart"
            },
            success: function(response){
                console.log("Response: ", response);
                if(response == 201){
                    alertify.success("Item added to cart");
                } else if(response == "ProductExists"){
                    alertify.error("Product already in cart");
                }
                else if(response == 401){
                    alertify.error("Login to continue");
                }
                else if(response == 500){
                    alertify.error("Something went wrong");
                }   
            }      
        });
    });
});


$('.increase').click(function (e) {
    e.preventDefault();
    let $container = $(this).closest('.cart_data');
    let $qtyInput = $container.find('.qty-input');
    let qty = parseInt($qtyInput.val(), 10);

    if (!isNaN(qty) && qty < 10) {
        $qtyInput.val(++qty);
        updateQuantity($container);
    }
});

$('.decrease').click(function (e) {
    e.preventDefault();
    let $container = $(this).closest('.cart_data');
    let $qtyInput = $container.find('.qty-input');
    let qty = parseInt($qtyInput.val(), 10);

    if (!isNaN(qty) && qty > 1) {
        $qtyInput.val(--qty);
        updateQuantity($container); 
    }
});

function updateQuantity($container) {
    let qty = $container.find('.qty-input').val();
    let pro_id = $container.find('.product_id').val();

    $.ajax({
        method: "POST",
        url: "functions/addtocartfunctions.php",
        data: {
            "product_id": pro_id,
            "product_qty": qty,
            "scope": "updateQty"
        },
        success: function (response) {
            if (response == 200) {
                console.log("Quantity updated for product ID: " + pro_id);
            } else {
                console.error("Error: " + response);
            }
        }
    });
}
