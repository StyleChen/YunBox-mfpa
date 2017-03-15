/**
 * Created by Administrator on 2017/3/13.
 */
$(function(){
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }
    var page = getQueryString('page');
    if(page == null){page = 0}
    page = parseInt(page);
    $('.nav li').eq(page).addClass('nav-active');
    var ele = $('.nav li').eq(page).find('img');
    var src = ele.attr('src');
    var srcH = src.slice(0,src.length-4);
    ele.attr('src',srcH + '-active.png');
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
    });
    $('.nav>li').click(function () {
        $(this).parent().children('li').removeClass('nav-active');
        $(this).addClass('nav-active')
    })
});