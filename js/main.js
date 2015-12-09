$(document).ready(function(){

  $('.drawer-toggle').click(function(){
    $('body').toggleClass('nav-show nav-hide');
    $('#menu').toggleClass('active');
  });

  $("#animate").mouseover(function(){
    $("#animate div").attr({class: 'flip'});
  });
  $("#animate").mouseout(function(){
    $("#animate div").removeClass("flip");
  });

  $(".js-search").focus(function () {
    $(this).parent().addClass("active");
        }).blur(function(){
    $(this).parent().removeClass("active");
  });

  $(window).scroll(function(){
        if($(window).scrollTop() > 200){
            $("#gotop").fadeIn(500);//一秒渐入动画
        }else{
            $("#gotop").fadeOut(500);//一秒渐隐动画
        }
        });
         
      $("#gotop").click(function(){
        $('body,html').animate({scrollTop:0},500);
        return false;
  });
});