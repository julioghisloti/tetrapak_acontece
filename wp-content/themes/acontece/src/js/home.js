//trava Slider
$(document).ready(function() {
	 var slider = $('.sequence-canvas');
         $(window).scroll(function () {

              if ($(this).scrollTop() > 160) {

                  slider.addClass("fixo");
                  $('.slide-title').fadeOut();
                  $('.slide-text').fadeOut();
                  $('.hover-slider').fadeOut();
                  $('#nav').fadeOut();
                  $('#next').fadeOut();
                  $('#prev').fadeOut();

              } else {

                  slider.removeClass("fixo");
                  $('.slide-title').fadeIn();
                  $('.slide-text').fadeIn();
                  $('.hover-slider').fadeIn(500);
                  $('#nav').fadeIn(700);
                  $('#next').fadeIn(800);
                  $('#prev').fadeIn(800);

              }

        });

 });

//foco de editoria
$(document).ready(function() {
  if(Modernizr.backgroundsize) {
    $('.editorias-lista ul').children().hover(
      function() {
        $(this).siblings().stop().fadeTo(200, 0.5);
      },
      function() {
        $(this).siblings().stop().fadeTo(200, 1);
      }
    );
  }else{ 
    //
  }
});

//Slider
$(function() {
    $(".sequence-canvas").cycle({
        fx: 'fade',
        speed: 800,
        pager: '#nav',
        next: '#next',
        prev: '#prev',
        slideResize: false,
        pagerAnchorBuilder: function(idx, slide) {
            return '<li><a href="#"></a></li>';
        }
    });
    
});