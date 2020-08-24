<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>Easydisk 用户注册</title>
	<!-- 定义当前操作关键词 -->
	<script type="text/javascript"> currentOp="reg"; </script>
	<!-- 引入JQ和入口文件 -->
	<script type="text/javascript" src="/easydisk/javascript/jquery.js"></script>
	<script type="text/javascript" src="/easydisk/javascript/verify.js"></script>
</head>
<body>
	<!-- 注册框 -->
	<main class="main_wrap">

		<!-- 标题div -->
		<div class="wrap_title">—— 用户注册 ——</div>

		<!-- 用户名输入框容器 -->
		<div class="wrap_input input_account">
			<!-- 输入框和输入框icon -->
			<i class="icon-account input_icon"></i>
			<input type="text" id="account" class="inputbox" placeholder="请输入账户名" maxlength="24"/>

			<!-- 操作框 -->
			<div class="input_op op_account">
				<i href="account" class="icon-delete input_op_icon"></i>
			</div>

			<!-- 提示框 -->
			<div class="rule_info account_rule">
				<p>
					<i class="icon-match-false"></i>
					<span>规则：数字和字母组合，可以使用邮箱当做账户名进行注册<br>长度：8-24位</span>
				</p>
			</div>
		</div>

		<!-- 密码输入框容器 -->
		<div class="wrap_input input_password">
			<!-- 输入框和输入框icon -->
			<i class="icon-password input_icon"></i>
			<input type="password" id="password" class="inputbox" placeholder="请输入密码" maxlength="18"/>

			<!-- 操作框 -->
			<div class="input_op op_password">
				<i href="password" class="icon-eyes-close input_op_icon input_show"></i>
				<i href="password" class="icon-delete input_op_icon"></i>
			</div>

			<!-- 提示框 -->
			<div class="rule_info password_rule">
				<p>
					<i class="icon-match-false"></i>
					<span>规则：数字、字母以及部分特殊符号的组合。第一个字符必须为字母<br>长度：8-18位</span>
				</p>
			</div>
		</div>

		<!-- 重复密码输入框容器 -->
		<div class="wrap_input input_passwordc">
			<!-- 输入框和输入框icon -->
			<i class="icon-password input_icon"></i>
			<input type="password" id="passwordc" class="inputbox" placeholder="重复输入密码" maxlength="20"/>

			<!-- 操作框 -->
			<div class="input_op op_passwordc">
				<i href="passwordc" class="icon-eyes-close input_op_icon input_show"></i>
				<i href="passwordc" class="icon-delete input_op_icon"></i>
			</div>

			<!-- 提示框 -->
			<div class="rule_info passwordc_rule">
				<p>
					<i class="icon-match-false"></i>
					<span>规则：重复输入密码</span>
				</p>
			</div>
		</div>

		<!-- 用户昵称输入框容器 -->
		<div class="wrap_input input_nickname">
			<!-- 输入框和输入框icon -->
			<i class="icon-nickname input_icon" style="top:14px;"></i>
			<input type="text" id="nickname" class="inputbox" placeholder="请输入用户名称" maxlength="12"/>

			<!-- 操作框 -->
			<div class="input_op op_nickname">
				<i href="nickname" class="icon-delete input_op_icon"></i>
			</div>

			<!-- 提示框 -->
			<div class="rule_info nickname_rule">
				<p>
					<i class="icon-match-false"></i>
					<span>规则：任意字符，允许中文以及留空。留空则会在注册时系统自动生成随机名称<br>长度：留空或4-12个字符</span>
				</p>
			</div>
		</div>

		<!-- 用户手机输入框容器 -->
		<div class="wrap_input input_phone">
			<!-- 输入框和输入框icon -->
			<i class="icon-phone input_icon" style="top:14px;"></i>
			<input type="text" id="phone" class="inputbox" placeholder="请输入手机号码" maxlength="11" onkeypress="return (/[\d]/.test(String.fromCharCode(event.keyCode)))" />

			<!-- 操作框 -->
			<div class="input_op op_phone">
				<i href="phone" class="icon-delete input_op_icon"></i>
			</div>

			<!-- 提示框 -->
			<div class="rule_info phone_rule">
				<p>
					<i class="icon-match-false"></i>
					<span>规则：输入11位的手机号码</span>
				</p>
			</div>
		</div>

		<!-- 验证码输入框容器 -->
		<div class="wrap_input input_verifycode">
			<!-- 输入框和输入框icon -->
			<i class="icon-verify input_icon"></i>
			<input type="text" id="verifycode" class="inputbox" placeholder="验证码" maxlength="5" />
			<!-- 验证码图片 -->
			<img class="verify_img" src="/easydisk/imagecode.php" title="点击刷新" />

			<!-- 提示框 -->
			<div class="rule_info verifycode_rule"></div>
		</div>

		<!-- 表单提交按钮div -->
		<div class="wrap_submit">
			<a class="submit_btn" href="#">
				注册<i class="icon-loading"></i>
			</a>
		</div>

		<!-- 登录注册切换按钮 -->
		<div class="switch_btn">
			<a href="/signin">去登录页面</a>
		</div>
	</main>
</body>
</html><?php /**PATH /opt/website/laravel/resources/views/easydisk/signup.blade.php ENDPATH**/ ?>