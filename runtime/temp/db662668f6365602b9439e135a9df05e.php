<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\www\www.twothink.com\public/../application/home/view/default/notice\list.html";i:1542167133;s:83:"D:\www\www.twothink.com\public/../application/home/view/default/base\bootstrap.html";i:1542077680;s:77:"D:\www\www.twothink.com\public/../application/home/view/default/base\var.html";i:1496373782;}*/ ?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>

    <!-- Bootstrap -->
    <link href="__PUBLIC__/home/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/home/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .main{margin-bottom: 60px;}
        .indexLabel{padding: 10px 0; margin: 10px 0 0; color: #fff;}
    </style>
    
    <!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
    <?php echo hook('pageHeader'); ?>
</head>
<body>

<div class="main">
    <!--导航部分-->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid text-center">
            <div class="col-xs-3">
                <p class="navbar-text"><a href="/" class="navbar-link">首页</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="fuwu.html" class="navbar-link">服务</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="faxian.html" class="navbar-link">发现</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="<?php echo url('User/login/index'); ?>" class="navbar-link">我的</a></p>
            </div>
        </div>
    </nav>
    <!--导航结束-->

    <div class="container-fluid">
        <!-- 视图内容-->
        
<body>
<div class="main">
    <!--导航部分-->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid text-center">
            <div class="col-xs-3">
                <p class="navbar-text"><a href="index.html" class="navbar-link">首页</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">服务</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">发现</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">我的</a></p>
            </div>
        </div>
    </nav>
    <!--导航结束-->

    <div class="container-fluid">
        <div class="blank"></div>
        <h3 class="noticeDetailTitle"><strong><?php echo $list['title']; ?></strong></h3>
        <div class="noticeDetailInfo">发布者:<?php echo get_username($list['uid']); ?></div>
        <div class="noticeDetailInfo">发布时间：<?php echo date('Y-m-d H:i',$list['create_time']); ?></div>
        <div class="noticeDetailContent">
            <?php echo $content['content']; ?>
        </div>
    </div>
</div>

    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="__PUBLIC__/home/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__PUBLIC__/home/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "__ROOT__", //当前网站地址
		"APP"    : "__APP__", //当前项目地址
		"PUBLIC" : "__PUBLIC__", //项目公共目录地址
		"DEEP"   : "<?php echo config('URL_PATHINFO_DEPR'); ?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo config('URL_MODEL'); ?>", "<?php echo config('URL_CASE_INSENSITIVE'); ?>", "<?php echo config('URL_HTML_SUFFIX'); ?>"],
		"VAR"    : ["<?php echo config('VAR_MODULE'); ?>", "<?php echo config('VAR_CONTROLLER'); ?>", "<?php echo config('VAR_ACTION'); ?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget'); ?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
    
</div>
</body>
</html>
