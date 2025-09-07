     var mainimg= document.getElementById("mainimg");
     var smallimg=document.getElementsByClassName("small-img");

     for(let i=0;i<4;i++){

      smallimg[i].onclick=function(){
      mainimg.src = smallimg[i].src;
     }

     }