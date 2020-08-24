<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Easydisk 我的网盘</title>
	<link rel="stylesheet" type="text/css" href="/easydisk/css/index.css">
	<link rel="stylesheet" type="text/css" href="/easydisk/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/easydisk/css/if-icon.css" />
	<!-- 引入JQ和入口文件 -->
	<script type="text/javascript" src="/easydisk/javascript/jquery.js"></script>
	<script type="text/javascript" src="/easydisk/javascript/index.js"></script>
</head>
<body>
	<!-- 打印用户信息 -->
	<!-- {$userInfo|@print_r} -->

	<!-- 顶部导航栏(navbar) -->
	<nav class="navbar navbar-default">
		<!-- 导航栏头部logo(navbar-head) -->
		<div class="navbar-head">
			<a class="navbar-logo" href="">Easydisk</a>
		</div>

		<!-- 导航栏按钮组(navbar-body) -->
		<div class="navbar-body">
			<!-- 导航栏超链接(body-nav) -->
			<ul class="body-nav">
				<li class="active"><a href="" class="nav-link">网盘</a></li>
				<li><a href="#" class="nav-link">分享</a></li>
				<li><a href="#" class="nav-link">更多</a></li>
			</ul>

			<!-- 导航栏按钮以及用户信息(body-button) -->
			<ul class="body-button">
				<!-- 用户信息下拉框(userinfo-dropdown) -->
				<li class="userinfo-dropdown">
					<a href="#" class="dropdown-toggle dropdown-btn" data-toggle="dropdown" role="button">
						<img class="user_img" src="images/user.jpg" />{$userInfo.name}<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="info-img">
							<img src="images/user.jpg"/>
							<span>{$userInfo.name}</span>
							<span>Lv.7</span>
						</li>
						<li class="menu-btn btn-half"><a href="#">个人资料</a></li>
						<li class="menu-btn btn-half"><a href="#">修改密码</a></li>
						<li class="menu-btn"><a href="#" data-action="logout">退出当前账户(未完成)</a></li>
					</ul>
				</li>

				<!-- 用户消息下拉框(message-dropdown) -->
				<li class="message-dropdown">
					<a href="#" class="icon-message dropdown-toggle dropdown-btn" data-toggle="dropdown" role="button"></a>
					<ul class="dropdown-menu">
						<li class="menu-title"><span>你有 4 条未读信息</span></li>
						<ul class="message-info">
							<li class="each-message">
								<img src="images/user.jpg">
								<span class="subtitle">今天吃饭了没？</span>
								<span class="time">两分钟前 21:03</span>
							</li>
							<li class="each-message">
								<img src="images/user.jpg">
								<span class="subtitle">今天吃饭了没？</span>
								<span class="time">两分钟前 21:03</span>
							</li>
							<li class="each-message">
								<img src="images/user.jpg">
								<span class="subtitle">今天吃饭了没？</span>
								<span class="time">两分钟前 21:03</span>
							</li>
							<li class="each-message">
								<img src="images/user.jpg">
								<span class="subtitle">今天吃饭了没？</span>
								<span class="time">两分钟前 21:03</span>
							</li>
						</ul>
						<li class="menu-btn"><a href="#">查看所有消息</a></li>
					</ul>
				</li>

				<!-- 主题更改下拉框(themes-dropdown) -->
				<li class="themes-dropdown">
					<a href="#" class="icon-theme dropdown-toggle dropdown-btn" data-toggle="dropdown" role="button"></a>
					<ul class="dropdown-menu">
						<li class="menu-title"><span>主题设置</span></li>
						<li>
							<a href="">
								<img src="images/theme1.png">
								<span class="theme-title">主题1</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

	<!-- 页面主要框架(main) -->
	<main>
		<!-- 页面左侧任务栏(main-left) -->
		<div class="main-left">
			<!-- 分类按钮组(list-group) -->
			<div class="list-group">
				<!-- 网盘浏览类型 -->
				<a href="#" class="list-group-item"><i class=""></i>网盘总览</a>
				<a href="" class="list-group-item active"><i class="icon-all-files"></i>全部文件</a>
				<!-- 文件浏览类型 -->
				<a href="#" class="list-group-item"><i class=""></i>图片</a>
				<a href="#" class="list-group-item"><i class=""></i>文档</a>
				<a href="#" class="list-group-item"><i class=""></i>视频</a>
				<a href="#" class="list-group-item"><i class=""></i>种子</a>
				<a href="#" class="list-group-item"><i class=""></i>音乐</a>
				<a href="#" class="list-group-item"><i class=""></i>其他</a>
				<a href="#" class="list-group-item"><i class="icon-share"></i>我的分享</a>
				<a href="#" class="list-group-item"><i class="icon-recycle-bin"></i>回收站</a>
			</div>

			<!-- 网盘信息组(disk-info) -->
			<div class="disk-info">
				<span>网盘容量使用情况：</span>
				<div class="progress">
					<div class="progress-bar" style="width:47.9%;"></div>
				</div>
				<p class="sizedata">
					<span>981MB/2048MB (47.9%)</span>
				</p>
			</div>
		</div>

		<!-- 页面右侧网盘文件浏览区(main-right) -->
		<div class="main-right">
			<!-- 多文件操作和搜索栏 -->
			<div class="panel-heading">
				<!-- 上传按钮(btn-upload-file) -->
				<button class="btn btn-upload-file">
					<i class="icon-upload"></i>上传
				</button>
				
				<!-- 上传栏(upload-input) -->
				<input type="file" name="uploadFiles" id="uploadFiles" class="upload-input" multiple="multiple"/>

				<!-- 新建文件夹按钮(btn-new-folder) -->
				<button class="btn btn-new-folder">
					<i class="icon-folder-plus"></i>新建文件夹
				</button>

				<!-- 文件操作按钮(btn-group) -->
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default">下载</button>
					<button type="button" class="btn btn-default">删除</button>
					<button type="button" class="btn btn-default">重命名</button>
				</div>

				<!-- 排序和视图切换按钮(sort-box) -->
				<div class="sort-box">
					<i class="icon-sort sort-btn dropdown-toggle dropdown-btn" data-toggle="dropdown" role="button"></i>
					<ul class="sort-dropdown dropdown-menu">
						<li><a href="#">文件名</a></li>
						<li class="active"><a href="#">大小</a></li>
						<li><a href="#">修改时间</a></li>
					</ul>
					<i class="icon-display-list sort-btn disabled" disabled="disabled"></i>
				</div>

				<!-- 搜索框(search-box) -->
				<div class="search-box">
					<input type="text" name="" class="search-input" placeholder="搜索您的文件或目录" />
					<i class="icon-search search_btn"></i>
				</div>
			</div>

			<!-- 文件路径和加载信息栏(disk-path) -->
			<div class="panel-heading disk-path">
				<ol class="breadcrumb"><li class="active">全部文件</li></ol>
				<span class="load-info"></span>
			</div>

			<!-- 文件列表显示(files-list) -->
			<div class="files-list">
				<!-- 文件列表头(list-header) -->
				<ul class="list-header">
					<li class="col col-filename">
						<i class="icon-check-box" data-toggle="checkbox" data-checked="0"></i>
						<span>文件名</span>
						<i class="icon-arrow-up sort-icon"></i>
					</li>
					<li class="col-filename-cover">
						<span>已选中<c>3</c>个文件/文件夹</span>
					</li>
					<li class="col col-filesize">
						<span>文件大小</span>
						<i class="icon-arrow-up sort-icon"></i>
					</li>
					<li class="col col-moditime">
						<span>修改/上传日期</span>
						<i class="icon-arrow-up sort-icon"></i>
					</li>
				</ul>

				<!-- 文件列表(list-body) -->
				<div class="list-body">
					<!-- 列表遮罩层(body-mask) -->
					<div class="body-mask">
						<div class="mask mask-loading">正在全力为您加载<i class="icon-loading"></i></div>
						<div class="mask mask-load-failed">加载失败, 请重试</div>
					</div>
					<!-- 文件行 -->
				</div>
			</div>
		</div>
	</main>

	<!-- 弹出层合集(popups) -->
	<div class="popups">
		<!-- 新建文件夹弹出层(mkdir-wrap) -->
		<div class="mkdir-wrap">
			<div class="wrap-header">
				<span class="header-title">新建文件夹</span>
				<i class="icon-delete alert-close"></i>
			</div>
			<div class="wrap-container">
				<input type="text" id="mkdir-name" class="mkdir-input" placeholder="请输入文件夹名" />
			</div>
			<div class="wrap-footer">
				<button class="btn btn-default btn-sm alert-cancel">取消</button>
				<button class="btn btn-primary btn-sm alert-submit" data-target="mkdir">
					新建<i class="icon-loading"></i>
				</button>
			</div>
		</div>
	</div>

	<div class="upload-info">
		
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function () {
		mainController = new $.mainController;	// 调用(main)主类
		cookieSetup = new $.cookieSetup;		// 调用cookie操作类
		fileController = new $.fileController;	// 调用(fileController)类
		fileModel = new $.fileModel;			// 调用(fileModel)类

		$(".main-right").css("padding-left", $('.main-left').css("width"));	// 设置列表padding-left
		/* 控制页面侧边栏高度 */
		var setHeight = setInterval(function () {
			// 获取浏览器窗口大小
			windowWidth  = $(window).width()
			windowHeight = $(window).height();
			$('main').css("height", (windowHeight - 50) + "px");
			$('.main-right').css("max-height", (windowHeight - 50) + "px");
			$('.list-body').css("height", (windowHeight - 183) + "px");
		},0);
	})
</script>
<script type="text/javascript">
	
</script>
</html><?php /**PATH /opt/website/laravel/resources/views/easydisk/index.blade.php ENDPATH**/ ?>