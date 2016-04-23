/**
 * Created by Felix on 2016/4/23.
 */


/*
* changeClass(cl1,cl2,clName)
* 给cl1移除类clName
* 给cl1添加类clName
* */

function changeClass(cl1,cl2,clName){
    cl1.removeClass(clName);
    cl2.addClass(clName);
}

