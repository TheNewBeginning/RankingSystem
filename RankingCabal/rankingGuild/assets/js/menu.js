$(function(){
   $("#test li").mouseover(function(){
      var menu = $(this).parent().children('.depth2 on');
      var submenu =  $(this).parent().parent();
      if(menu.length > 0 && menu.is(':hidden')){
         $("#test li").removeClass('link hover');
         $(this).addClass('link hover');
         $("ul li.link hover a div.depth2 on").removeClass("depth2 on");
         $("ul li.link hover a div.depth2").addClass("depth2");
         $('.depth2').slideUp();
         menu.slideDown();
      }
      if(!submenu.hasClass('depth2 on') && menu.length == 0){
         $("#test li").removeClass('link hover');
         $(this).addClass('link hover');
         /*$('#test li.link').each(function(index) {
            $(this).toggleClass('link hover');
         });*/
         $("ul li.link hover a div.depth2 on").removeClass("depth2 on");
         $("ul li.link hover a div.depth2").addClass("depth2");
         $('.depth2').slideUp();
      }
   });
});

// JavaScript que faz aquela Troca.. ainda falta corrigir uma falha mais isso deixo pra depois.
//         $("li div.depth2").removeClass('depth2');
//         $("li div.depth2").addClass('depth2 on');