$(document).ready(function() {
    $('.mobile div').on('click', function() {
      $('.mobile div').toggleClass('active');
      $('.mobile nav').toggleClass('open');
      $('.mobile nav ul').toggleClass('show');
    });
  
    for (let a = 1; a <= $(".mobile ul li").length; a++){
      $(".mobile ul li:nth-child("+ a +")").css("animation-delay", "."+ (a+1) +"s");   
    }
  });
  