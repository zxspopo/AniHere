$(function(){
    $("a.ajax").click(function(){
        $.get($(this).attr('href'), function(data){
            alert(data);
        })
        return false;
    });
});


$(function(){
    $(".playbutton").hover(function(){
        $(this).find("span").show();
    },function(){
        $(this).find("span").hide();
    });
});


<!-- 多说js加载开始，一个页面只需要加载一次 -->

var duoshuoQuery = {short_name:"anihere"};
(function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = 'http://static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
})();

<!-- 多说js加载结束，一个页面只需要加载一次 -->

var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc926a93b44939f08acca201ca0aef160' type='text/javascript'%3E%3C/script%3E"));
