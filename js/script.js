$(function(){

  //TOPへ戻るスムーススクロール
$('.top-btn').click(function(){
  $('html, body').animate({
    'scrollTop': 0
  }, 500);
});


  //ハンバーガーメニュー
$('#menu-btn').click(function() {
  $(this).toggleClass('active');

  if ($(this).hasClass('active')) {
    $('.menu-container').addClass('active');
  } else {
    $('.menu-container').removeClass('active');
  }
});

//ふわっと浮き上がるスクロール
$(function(){
  $(window).scroll(function (){
      $('.fadein').each(function(){
          var targetElement = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > targetElement - windowHeight + 200){
              $(this).css('opacity','1');
              $(this).css('transform','translateY(0)');
          }
      });
  });
});


});
