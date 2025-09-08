     // var mainimg= document.getElementById("mainimg");
     // var smallimg=document.getElementsByClassName("small-img");

     // for(let i=0;i<4;i++){

     //  smallimg[i].onclick=function(){
     //  mainimg.src = smallimg[i].src;
     // }

     // }

     $(document).ready(function() {
     $('.buy-btn').click(function(e) {
          e.preventDefault();

          var qty = $(this).closest('.product-data').find('.qty-input').val();
          var pro_id = $(this).val();

          // alert(prod_id);

          $.ajax({
               method: "POST",
               url: "functions/addtocartfunctions.php",
               data: {
               "product_id": pro_id,       
               "product_qty": qty,         
               "scope": "addtoCart"
               },

               success: function(response){
                    
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
