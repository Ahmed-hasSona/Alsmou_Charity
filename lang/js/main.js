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