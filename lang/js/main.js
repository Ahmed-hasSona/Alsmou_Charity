$(function (){
   'use strict'
   var winh = $(window).height(),
       upperh = $('.upper-bar').innerHeight(),
       navh = $('.navbar').innerHeight();
   $('.slider,.carousel-item').height(winh - ( upperh + navh ));

   // Featured work shuffle

   $('.features-work ul li').on('click', function() {
     $(this).addClass('active').siblings().removeClass('active'); 
     if($(this).data('class') === 'all'){
         $('.shuffle-imgs .col-md').css('opacity',1);
     }

     else{
         $('.shuffle-imgs .col-md').css('opacity','.08');
         $($(this).data('class')).parent().css('opacity',1);
     }

   });

});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
      }
    }
  }

  function myFunctionS() {
    document.getElementById("myDropdownS").classList.toggle("showS");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtnS')) {
      var dropdowns = document.getElementsByClassName("dropdown-contentS");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
      }
    }
  }

    function myFunctions() {
    document.getElementById("myDropdowns").classList.toggle("shows");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtns')) {
      var dropdowns = document.getElementsByClassName("dropdown-contents");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
      }
    }
  }

  var a;
  function show_hide(){
    if(a==1){
      document.getElementById("show").style.display="block";
      return a=0;
    }

    else{
      document.getElementById("show").style.display="none";
      return a=1;
    }
  }

  // Form Restrictions

  $(function () {

    'use strict';

     var userError = true,

         emailError = true,
        
         msgError = true;

         phone = true;

         village = true;

     function checkError(){

        if(userError === true || emailError === true || msgError === true || phone === true || village == true){
            console.log('This Form is Wrong');
        }
        
        else{
            console.log('This Form Success');
        }
     }

     checkError();

    $('.name').blur(function() {

        if($(this).val().length < 4){
            $(this).css('border','1px solid #f00');
            userError = true;
        }else{
            $(this).css('border', '1px solid #fff');
            userError = false;
        }

        checkError();
    });

    $('.email').blur(function() {

        if($(this).val().length < 5){
            $(this).css('border','1px solid #f00');
            emailError = true;
        }else{
            $(this).css('border', '1px solid #fff');
            emailError = false;
        }

        checkError();
    });

    $('.mess').blur(function(){

        if($(this).val().length < 10){
            $(this).css('border','1px solid #f00');
            msgError = true;
        }else{
            $(this).css('border','1px solid #fff');
            msgError = false;
        }
        checkError();
    });

    $('.vill').blur(function(){

      if($(this).val().length < 3){
          $(this).css('border','1px solid #f00');
          msgError = true;
      }else{
          $(this).css('border','1px solid #fff');
          msgError = false;
      }
      checkError();
  });

  $('.phone').blur(function(){

    if($(this).val().length < 10){
        $(this).css('border','1px solid #f00');
        msgError = true;
    }else{
        $(this).css('border','1px solid #fff');
        msgError = false;
    }
    checkError();
});

});