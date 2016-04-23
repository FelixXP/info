<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <title>信息论-首页</title>
    <link href="/info/Public/Home/Css/discussion.css" rel="stylesheet" type="text/css">
    <script src="/info/Public/Common/Js/jquery-2.2.3.min.js"></script>
    <!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <link href="/info/Public/Common/Css/nav.css" rel="stylesheet" type="text/css">
    <script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <![endif]-->
    <script src="/info/Public/Common/Js/common.js"></script>
</head>
<body id="body">
<!--添加登录条-->
<!--登陆条-->
<div id="loginBar">
    <a href="#">关于我们</a>
    <a href="#">注册</a>
    <a href="#">登录</a>
</div>
<!--添加导航栏-->
<!--首页导航栏-->
<div class="nav-wrap">
    <div class="title">
        <a href="#"><img class="logo" src="/info/Public/Common/Img/logo-info.png"/></a>
        <strong>信息论与编码</strong>
        <span>Information Theory and Encoding</span>
    </div>
    <div class="container">
        <button type="button" class="nav-btn dis-none">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="nav">
            <li><a href="http://localhost/info/index.php/Home/Index/show/aim/index" class="current">首页</a></li>
            <li><a href="http://localhost/info/index.php/Home/Index/show/aim/video">教学录像</a></li>
            <li><a href="http://localhost/info/index.php/Home/Index/show/aim/exercise">自测训练</a></li>
            <li><a href="http://localhost/info/index.php/Home/Index/show/aim/discussion">交流讨论</a></li>
            <li><a href="#">课程介绍</a></li>
            <li><a href="#">资源下载</a></li>
            <li><a href="#">评价反馈</a></li>
        </ul>
    </div>
</div>

<div class="lecture-wrap">
    <div class="lecture">
        <div><a href="#">信息论在图像性能上的应用</a></div>
        <span>专题讲座</span>
        <div><a href="#">编解码设计与实现</a></div>
    </div>
</div>

<div class="discussion">
    <h1>交流讨论</h1>
    <p class="subTitle">discussion</p>
    <form action="#" class="discussion-form">
        <textarea rows="4" cols="100" id="discussion-submit" ></textarea>
        <label><input name="discussion-type" type="radio" value="review" />心得 </label>
        <label><input name="discussion-type" type="radio" value="question" />疑问 </label>
        <label><input name="discussion-type" type="radio" value="comment" />吐槽 </label>
        <span class="msg"></span>
        <input type="submit" value="留言讨论" />
    </form>
    <div class="discussion-box">
        <div class="discussion-tag">
            <input type="button" value="全部" class="choose" data-show="all"/>
            <input type="button" value="心得" data-show="review"/>
            <input type="button" value="疑问" data-show="question"/>
            <input type="button" value="吐槽" data-show="comment"/>
        </div>
        <ul class="discussion-list">
            <li class="discussion-row">
                <img src="/info/Public/Common/Img/list-item1.jpg">
                <p class="discussion-row-title">
                    <strong>Felix</strong><span>2016-04-06 21:54:50</span>
                </p>
                <p>神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代</p>
            </li>
            <li class="discussion-row">
                <img src="/info/Public/Common/Img/list-item1.jpg">
                <p class="discussion-row-title">
                    <strong>Felix</strong><span>2016-04-06 21:54:50</span>
                </p>
                <p>神明之胄动画全集这是一个图腾崇拜的时代</p>
            </li>
            <li class="discussion-row">
                <img src="/info/Public/Common/Img/list-item1.jpg">
                <p class="discussion-row-title">
                    <strong>Felix</strong><span>2016-04-06 21:54:50</span>
                </p>
                <p>神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代</p>
            </li>
            <li class="discussion-row">
                <img src="/info/Public/Common/Img/list-item1.jpg">
                <p class="discussion-row-title">
                    <strong>Felix</strong><span>2016-04-06 21:54:50</span>
                </p>
                <p>神明之胄动画全集这是一个图腾崇拜的时代</p>
            </li>
        </ul>

        <div class="page">
            <a href="#"  name="pre">上一页</a>
            <a href="#" class="page-current" name="page1">1</a>
            <a href="#" name="page2">2</a>
            <a href="#" name="page3">3</a>
            <a href="#" name="page4">4</a>
            <a href="#" name="page5" class="page-last">5</a>
            <a href="#" name="next">下一页</a>
            <input type="text" />
            <a href="#" name="jump">跳转到</a>

        </div>
    </div>
</div>
<!--添加页尾-->
<div id="footer">
    <div class="friendLink">
        <ul class="friendLink-list">
            <li><a href="#" title="返回顶部" rel="nofollow">返回顶部</a></li>
            <li class="link-dis-none"><a href="#" title="学校首页" rel="nofollow">学校首页</a></li>
            <li class="link-dis-none"><a href="#" title="新闻动态" rel="nofollow">新闻动态</a></li>
            <li class="link-dis-none"><a href="#" title="关于我们" rel="nofollow">关于我们</a></li>
            <li><a href="#" title="联系我们" rel="nofollow">联系我们</a></li>
            <li><a href="#" title="反馈留言" rel="nofollow">反馈留言</a></li>
        </ul>
    </div>
    <div class="copyRight">
        <P>&#174;广东工业大学信息工程学院</P>
    </div>
</div>
<script src="/info/Public/Home/Js/index.js"></script>
<script src="/info/Public/Home/Js/discussion.js"></script>
<!--让IE8支持媒体查询-->
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
</body>
</html>