<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>账户管理中心 - 登录</title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="css/signin.css"/>
		<link rel="stylesheet" type="text/css" href="Font-Awesome-3.2.1/css/font-awesome.min.css" />
		<title></title>
	</head>
	<body>
		<div class="signinwrap">
			<div class="layout">
				<div class="login-content">
					<a href="javascript:void(0)" class="ercode" id="qrcode-trigger"></a>
					<div class="pt-logo-area">
						<a href="index.html">
							<img src="img/logo_putao_large.png"/>
						</a>
					</div>
					<div class="pt-login-frame">
						<form action="" method="post">
							<div><input type="text" name="user" class="inputtxts" id="user" value="" placeholder="输入您注册的手机号码/邮箱" /></div>
							<div class="password-container"><input type="password" class="inputtxts" name="pass" id="pass" value="" placeholder="输入账号密码"/></div>
							<div class="errorTips">手机号或者密码格式不对!</div>
							<input type="submit" name="" id="submit" value="登录" />
							<div class="other_login_type">
								<div class="oth_type_tit">
									<div class="hr"></div>
									<p>其他登录方式</p>
								</div>
								<div class="oth_type_links">
									<a href="" class="icon-github-alt"></a>
									<a href="" class="icon-pinterest"></a>
									<a href="" class="icon-twitter-sign"></a>
								</div>
							</div>
							<div class="logintxts">
								<a href="">注册新账户</a>
								<span class="mary-color">|</span>
								<a href="">忘记密码?</a>
							</div>
						</form>
					</div>
				</div>
				<div class="ercode_area">
					<a href="javascript:void(0)" class="erform" id="qrcode-trigger1"></a>
					<div class="pt-logo-area">
						<a href="index.html">
							<img src="img/logo_putao_large.png"/>
						</a>
					</div>
					<div class="pt-login-frame">
						<img src="img/wchatma.png"/>
						<h3 class="code-tips">请使用葡萄纬度APP扫描登录</h3>
						<div class="other_login_type">
							<div class="oth_type_tit">
								<div class="hr"></div>
								<p>其他登录方式</p>
							</div>
							<div class="oth_type_links">
								<a href="" class="icon-github-alt"></a>
								<a href="" class="icon-pinterest"></a>
								<a href="" class="icon-twitter-sign"></a>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="account-footer">
				<p>版权所有© 2014-2016 葡萄科技</p>
			</div>
		</div>
		
		<script src="js/jquery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/signin.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
