$ = jQuery ;


// $('.owl-carousel').owlCarousel();
// alert("hello mina");




$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 100) {
       $('.header-shadow').addClass("bg-white");
    }
    if(height < 100)
    {
        $('.header-shadow').removeClass("bg-white");
    }
    if(screen.width > 700)
    {
       document.getElementById("menu-hidden").style.display = "block";
       document.getElementsByClassName("menu--about")[0].style.display = "block";
       document.getElementsByClassName("menu--learn")[0].style.display = "block";
       document.getElementsByClassName("menu--customer-service")[0].style.display = "block";
       document.getElementsByClassName("menu--shop-by")[0].style.display = "block";
    }
});

$(document).ready(function () {
        // (function ($) {
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    800:{
                        items:2
                    },
                    1050:{
                        items:3
                    }
                }
            })
        // })(jQuery);

        // open-button
        var openbutton=0;
        $("#open-button").click(function(){
            document.getElementById("myForm").style.display = "block";
            document.getElementById("open-button").style.display = "none";
            document.getElementById("close-button").style.display = "block";
            openbutton=1;
          });

          $("#close-button").click(function(){
            document.getElementById("myForm").style.display = "none";
            document.getElementById("open-button").style.display = "block";
            document.getElementById("close-button").style.display = "none";
            openbutton=1;
          });
       
          $(".cancel").click(function(){
            document.getElementById("myForm").style.display = "none";
          });

        //   Menu link dropdown
          
          $(".btn-display").click(function(){

              if(document.getElementById("menu-hidden").style.display =="block")
              {
                // $('.menu-hidden').addClass("display-none");
                document.getElementById("menu-hidden").style.display = "none";
              }
              else
              {
                document.getElementById("menu-hidden").style.display = "block";
                // $('.menu-hidden').addClass("display-block");
              }
          });
      
            

          // block about in footer

          $(".btn-about").click(function(){

            if(document.getElementsByClassName("menu--about")[0].style.display =="block")
            {
              
              document.getElementsByClassName("menu--about")[0].style.display = "none";
            }
            else
            {
              document.getElementsByClassName("menu--about")[0].style.display = "block";
             
            }
        });
      
        $(".btn-learn").click(function(){

          if(document.getElementsByClassName("menu--learn")[0].style.display =="block")
          {
            
            document.getElementsByClassName("menu--learn")[0].style.display = "none";
          }
          else
          {
            document.getElementsByClassName("menu--learn")[0].style.display = "block";
           
          }
      });
      $(".btn-customerservice").click(function(){

        if(document.getElementsByClassName("menu--customer-service")[0].style.display =="block")
        {
          
          document.getElementsByClassName("menu--customer-service")[0].style.display = "none";
        }
        else
        {
          document.getElementsByClassName("menu--customer-service")[0].style.display = "block";
         
        }
    });
     
      $(".btn-shopby").click(function(){

        if(document.getElementsByClassName("menu--shop-by")[0].style.display =="block")
        {
          
          document.getElementsByClassName("menu--shop-by")[0].style.display = "none";
        }
        else
        {
          document.getElementsByClassName("menu--shop-by")[0].style.display = "block";
         
        }
    });

    
        // function openForm() {
        //     document.getElementById("myForm").style.display = "block";
        //   }
          
        //   function closeForm() {
        //     document.getElementById("myForm").style.display = "none";
        //   }
    })

