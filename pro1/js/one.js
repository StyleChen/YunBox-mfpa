/**
 * Created by Administrator on 2017/3/13.
 */
$(function(){
    $('.nav>li').hover(function(){
        if(!$(this).hasClass('nav-active')){
            var ele = $(this).find('img');
            var src = ele.attr('src');
            var srcH = src.slice(0,src.length-4);
            ele.attr('src',srcH + '-active.png');
        }
    },function () {
        if(!$(this).hasClass('nav-active')){
            var ele = $(this).find('img');
            var src = ele.attr('src');
            var srcH = src.slice(0,src.length-11);
            ele.attr('src',srcH + '.png');
        }
    })
});