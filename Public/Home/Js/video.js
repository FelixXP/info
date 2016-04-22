/**
 * Created by Felix on 2016/4/22.
 */

//分页跳转
$(document).ready(function(){
    function jump(current,newPage){
        current.removeClass("page-current");
        newPage.addClass("page-current");
        console.log("跳转到第 " + newPage.attr("name").replace(/[^0-9]/ig,"") + " 页");
    }
    var Count = 5;
    $(".page a").click(function(){
        var current = $(".page-current");
        var newPage = $(this);
        var pageName = newPage.attr("name");
        switch(pageName){
            case "pre"://上一页
                if(current.attr("name") !== "page1"){
                    jump(current, current.prev());
                }
                break;
            case "next"://下一页
                if(current.attr("name") !== $(".page-last").attr("name")){
                    jump(current, current.next());
                }
                break;
            default://某一页
                jump(current,newPage);
                break;
        }

    });
});