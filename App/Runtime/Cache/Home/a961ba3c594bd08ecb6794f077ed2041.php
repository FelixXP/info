<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>信息论-自测训练</title>
    <link href="/info/Public/Home/Css/exercise.css" rel="stylesheet" type="text/css">
    <script src="/info/Public/Common/Js/jquery-2.2.3.min.js"></script>
    <!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <link href="/info/Public/Common/Css/nav.css" rel="stylesheet" type="text/css">
    <link href="/info/Public/Common/Css/IE.css" rel="stylesheet" type="text/css">
    <script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <![endif]-->
</head>
<body>
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

<div class="exercise-type">
    <div class="type-title">
        <a href="#" class="type-current" data-type="chapter">章节练习</a>
        <a href="#" data-type="simulation">模拟测试</a>
        <a href="#" data-type="former">往年试题</a>
    </div>
    <ul class="type-list chapter">
        <li><a href="#" data-ch="1">第一章</a></li>
        <li><a href="#" data-ch="2">第二章</a></li>
        <li><a href="#" data-ch="3">第三章</a></li>
        <li><a href="#" data-ch="4">第四章</a></li>
        <li><a href="#" data-ch="5">第五章</a></li>
        <li><a href="#" data-ch="6">第六章</a></li>
        <li><a href="#" data-ch="7">第七章</a></li>
        <li><a href="#" data-ch="8">第八章</a></li>
    </ul>
    <ul class="type-list simulation dis-none">
        <li><a href="#">开始测试</a></li>
        <li><a href="#">选择范围</a></li>
    </ul>
    <ul class="type-list former dis-none">
        <li><a href="#">12年A卷</a></li>
        <li><a href="#">12年B卷</a></li>
        <li><a href="#">13年A卷</a></li>
        <li><a href="#">13年B卷</a></li>
        <li><a href="#">14年A卷</a></li>
        <li><a href="#">14年B卷</a></li>
        <li><a href="#">15年A卷</a></li>
        <li><a href="#">15年B卷</a></li>
    </ul>
    <div id="select-test" hidden="hidden">
        <div class="select">
            <h1>请选择测试范围</h1>
            <label><input name="test" type="checkbox" value="" />第一章 </label>
            <label><input name="test" type="checkbox" value="" />第二章 </label>
            <label><input name="test" type="checkbox" value="" />第三章 </label>
            <label><input name="test" type="checkbox" value="" />第四章</label>
            <label><input name="test" type="checkbox" value="" />第五章 </label>
            <label><input name="test" type="checkbox" value="" />第六章 </label>
            <label><input name="test" type="checkbox" value="" />第七章 </label>
            <label><input name="test" type="checkbox" value="" />第八章 </label>
            <a href="#" class="confirm">确定</a>
            <a href="#" class="cancel">取消</a>
        </div>
    </div>
</div>
<div class="content-wrap">
    <p href="#" class="bread-crumb">请选择自测题类型</p>
    <div class="content">

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
<script src="/info/Public/Home/Js/exercise.js"></script>
<!--让IE8支持媒体查询-->
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
</body>
</html>