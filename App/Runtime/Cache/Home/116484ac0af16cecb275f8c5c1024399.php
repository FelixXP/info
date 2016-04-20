<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>信息论-视频录像</title>
    <link href="/info/Public/Home/Css/video.css" rel="stylesheet" type="text/css">
    <script src="/info/Public/Common/Js/jquery-2.2.3.min.js"></script>
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
            <li><a href="http://localhost/info/index.php/Home/Index/showIndex" class="current">首页</a></li>
            <li><a href="http://localhost/info/index.php/Home/Index/showVideo">教学录像</a></li>
            <li><a href="#">自测训练</a></li>
            <li><a href="#">交流讨论</a></li>
            <li><a href="#">课程介绍</a></li>
            <li><a href="#">资源下载</a></li>
            <li><a href="#">评价反馈</a></li>
        </ul>
    </div>
</div>

<div class="video-wrap">
    <div class="video">
        <video src="/info/Public/Common/Video/test.mp4" controls="controls">
            您的浏览器不支持 video 标签。
        </video>
        <div class="video-list">
            <h1>相关视频</h1>
            <p class="subTitle">Related Video</p>
            <ul>
                <li>
                    <div class="list-item">
                        <a href="#">
                            <img src="/info/Public/Common/Img/list-item1.jpg">
                            <span>视频1</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="list-item">
                        <a href="#">
                            <img src="/info/Public/Common/Img/list-item2.jpg">
                            <span>视频2</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="list-item">
                        <a href="#">
                            <img src="/info/Public/Common/Img/list-item3.jpg">
                            <span>视频3</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="comment">
    <h1>评论</h1>
    <p class="subTitle">comment</p>
    <form action="#">
        <textarea rows="4" cols="100" id="comment-submit" ></textarea>
        <input type="submit" value="提交评论" />
    </form>
    <div class="comment-box">
        <div class="comment-title">
            <strong><img src="/info/Public/Common/Img/logo-info.png" title="logo">评论列表</strong>
            <label for="comment-submit"><img src="">我要评论</label>
        </div>
        <ul class="comment-list">
            <li class="comment-row">
                <img src="/info/Public/Common/Img/list-item1.jpg">
                <p class="comment-row-title">
                    <strong>Felix</strong><span>2016-04-06 21:54:50</span>
                </p>
                <p>神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代</p>
            </li>
            <li class="comment-row">
                <img src="/info/Public/Common/Img/list-item1.jpg">
                <p class="comment-row-title">
                    <strong>Felix</strong><span>2016-04-06 21:54:50</span>
                </p>
                <p>神明之胄动画全集这是一个图腾崇拜的时代</p>
            </li>
        </ul>

        <div class="page">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">跳转到</a>
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
</body>
</html>