jQuery(document).on("click", ".drawer-toggle", function() {
    jQuery('body').toggleClass('nav-show nav-hide');
        return false;
});

jQuery(document).on("click", ".drawer-toggle", function() {
    jQuery('#menu').toggleClass('active');
        return false;
});

$(".js-search").focus(function () {
    $(this).parent().addClass("active");
        }).blur(function(){
    $(this).parent().removeClass("active");
});

$(function(){
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

(function(jQuery){
  	jQuery( document ).ready( function(){     
    prettyPrint();
  });
}(jQuery));