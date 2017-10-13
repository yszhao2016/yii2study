<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    use app\assets\AppAsset;
    AppAsset::register($this);
//    AppAsset::addScript($this,'@web/js/jquery-ui.custom.min.js');
//    AppAsset::addCss($this,'css/site.css');
    
?>
<?php $this->beginPage()?>
<!DOCTYPE HTML>
<html> 
<head>
<title>assets测试</title>
<!-- Custom Theme files -->
<!--<link href="/assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>-->
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="后台登录" />
<!--Google Fonts-->
<!--<link href='css/3b0b400f78724e5a95157a12701f9617.css' rel='stylesheet' type='text/css'>
--><!--Google Fonts-->
<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--header start here-->
<div class="login-form">
			<div class="top-login">
				<span><img src="/assets/picture/group.png" alt=""/></span>
			</div>
			<h1>登录</h1>
			<div class="login-top">
                            <form action="" method="post">
				<div class="login-ic">
					<i ></i>
					<input type="text"  value="用户" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i class="icon"></i>
					<input type="password"  value="密码" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'password';}"/>
					<div class="clear"> </div>
				</div>
			
				<div class="log-bwn">
					<input type="submit"  value="Login" >
				</div>
				</form>
			</div>
			<p class="copy">© 2016 xxxxxxxxxxx</p>
</div>		
<!--header start here-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>