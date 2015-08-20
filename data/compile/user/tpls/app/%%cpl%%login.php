<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="row-fluid">
	<div class="container-fluid logcontent">
		<div class="logbox exambox">
			<form class="form-horizontal logform" method="post" action="index.php?user-app-login">
				<fieldset>
					<legend>用户登录</legend>
					<div class="logcontrol">
						<div class="control-group">
							<label class="control-label" for="inputEmail">用户名：</label>
							<div class="controls">
								<input class="input-xlarge" type="text" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" value=""/><span>请输入您的用户名</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">密码：</label>
							<div class="controls">
								<input class="input-xlarge" type="password" name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" value=""/><span>密码长度6位以上，数字、字母或其他字符</span>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<input type="hidden" value="1" name="userlogin"/>
								<button class="btn btn-info logbtn" type="submit"><a href="index.php?">登录</a></button>
								<button onclick="javascript:window.location='index.php?user-app-register';" type="button" class="btn logbtn">注册</button>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								
<p style ="color:red;font-size:20px;">出现了bug，在输入正确用户名密码点击"登录"之后，请手动刷新或返回主页，自动进入登录用户视图</p><p>提供一个普通用户<br/>用户名：aaa<br/>密码:111111<br/>为了网站安全，管理员账号请在邮件里面查收！</p><p>请输入正确的用户名和密码登录　如果您还没有帐号，请在此<a href="index.php?user-app-register">注册</a></p>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="logbotm"></div>
	</div>
</div>
<?php $this->_compileInclude('foot'); ?>
</body>
</html>