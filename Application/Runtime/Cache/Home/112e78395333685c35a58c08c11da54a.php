<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html ng-app='home'>
<head>
<meta charset="UTF-8">
<title>星星公众号管理平台</title>
<link type="text/css" rel="stylesheet"
	href="../../../Public/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet"
	href="../../../Public/Css/User/login.css">
<script  src="../../../Public/angular/angular.min.js"></script>
<script src ="../../../Public/Js/Plugin/jquery-2.2.0.min.js"></script>
<script  src="../../../Public/Js/Controller/Home/UserController.js"></script>

</head>
<body ng-controller='UserController'>
	<div class='container'>
		<div class="row">
			<div class="col-xs-12 login">
				<div>
					<h1 id="login-title">注册星星公众号管理通行证</h1>
					
					<hr>
					<div class="login-box">
						<div class="form-horizontal">
							<input class='login-text' type='text' ng-focus="errorHide()" ng-model="username" placeholder='邮箱/手机'>
							<div class="vcode-box">
							<input class='vcode-text' type='text' ng-focus="errorHide()" ng-focus="" ng-model="vcode" placeholder="验证码">
							<span><button class="vcode-btn" >获取验证码</button></span>
							</div>
					       <input class='login-text' type='password' ng-focus="errorHide()" ng-model="password"  placeholder='设置密码'>
						<div class="error-tip" style="display: block;color:red;"></div>
						<div class="submit-btn">
									<button  ng-click="register()" class="btn btn-success btn-lg">立即注册</button>
					   </div>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>