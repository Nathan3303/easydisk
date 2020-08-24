<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>Easydisk 用户登陆</title>
	<!-- 定义当前操作关键词 -->
	<script type="text/javascript"> currentOp="login"; </script>
	<!-- 引入JQ和入口文件 -->
	<script type="text/javascript" src="/easydisk/javascript/jquery.js"></script>
	<script type="text/javascript" src="/easydisk/javascript/verify.js"></script>
</head>
<body>
	<!-- 注册框 -->
	<main class="main_wrap">

		<!-- 标题div -->
		<div class="wrap_title">—— 用户登陆 ——</div>

		<!-- 用户名输入框容器 -->
		<div class="wrap_input input_account">
			<!-- 输入框和输入框icon -->
			<i class="icon-account input_icon"></i>
			<input type="text" id="account" class="inputbox" placeholder="请输入账户名" maxlength="20"/>

			<!-- 操作框 -->
			<div class="input_op op_account">
				<i href="account" class="icon-delete input_op_icon"></i>
			</div>
		</div>

		<!-- 密码输入框容器 -->
		<div class="wrap_input input_password">
			<!-- 输入框和输入框icon -->
			<i class="icon-password input_icon"></i>
			<input type="password" id="password" class="inputbox" placeholder="请输入账户密码" maxlength="20"/>

			<!-- 操作框 -->
			<div class="input_op op_password">
				<i href="password" class="icon-eyes-close input_op_icon input_show"></i>
				<i href="password" class="icon-delete input_op_icon"></i>
			</div>

			<!-- 提示框 -->
			<div class="rule_info password_rule"></div>
		</div>

		<!-- 验证码输入框容器 -->
		<div class="wrap_input input_verifycode">
			<!-- 输入框和输入框icon -->
			<i class="icon-verify input_icon"></i>
			<input type="text" id="verifycode" class="inputbox" placeholder="验证码" maxlength="5"/>
			<!-- 验证码图片 -->
			<img class="verify_img" src="/easydisk/imagecode.php" title="点击刷新" />

			<!-- 提示框 -->
			<div class="rule_info verifycode_rule"></div>
		</div>

		<!-- 记住我和忘记密码操作div -->
		<div class="loginop_wrap">
			<a class="rememberme_btn" ack="0" href="">
				<i class="icon-check-box btn_icon"></i><span class="btn_font">记住我</span>
				<input type="checkbox" class="rememberme_mark" />
			</a>
			<a href="#" class="forgetpwd">忘记密码</a>
		</div>

		<!-- 表单提交按钮div -->
		<div class="wrap_submit">
			<a class="submit_btn" href="#">登陆<i class="icon-loading"></i></a>
		</div>

		<!-- 登录注册切换按钮 -->
		<div class="switch_btn">
			<a href="/signup">去注册页面</a>
		</div>
	</main>
</body>
</html><?php /**PATH /opt/website/laravel/resources/views/easydisk/signin.blade.php ENDPATH**/ ?>