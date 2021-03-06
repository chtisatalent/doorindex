<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<?php $this->_compileInclude('menu'); ?>
		</div>
		<div class="span10" id="datacontent">
			<ul class="breadcrumb">
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>
				<li><a href="index.php?user-master-user">用户管理</a> <span class="divider">/</span></li>
				<li class="active">添加用户</li>
			</ul>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">添加用户</a>
				</li>
				<li class="pull-right">
					<a href="index.php?user-master-user">用户列表</a>
				</li>
			</ul>
			<form action="?user-master-user-add" method="post" class="form-horizontal">
				<fieldset>
					<div class="control-group">
					</div>
					<div class="control-group">
						<label for="username" class="control-label">用 户 名</label>
						<div class="controls">
							<input name="args[username]" id="username" type="text" value="" needle="needle" datatype="username" max="40" alt="请输入用户名称"  msg="用户名必须为长度不少于3的中英文字符"/>
							<span class="help-block">请输入用户名称</span>
						</div>
					</div>
					<div class="control-group">
						<label for="password1" class="control-label">密   码</label>
						<div class="controls">
							<input type="password" id="password1" needle="needle" datatype="password" min="6" max="20" msg="密码应为长度在6-20位之间，不为空格的字符" name="args[userpassword]"/>
							<span class="help-block">密码应为长度在6-20位之间，不为空格的字符</span>
						</div>
					</div>
					<div class="control-group">
						<label for="password2" class="control-label">重复密码</label>
						<div class="controls">
							<input type="password" id="password2" equ="password1" needle="needle" datatype="password" msg="重复密码必须和之前的密码一致" name="args[userpassword2]"/>
							<span class="help-block">重复密码必须和之前的密码一致</span>
						</div>
					</div>
					<div class="control-group">
						<label for="email" class="control-label">电子邮箱</label>
						<div class="controls">
							<input type="text" id="email" needle="needle" datatype="email" name="args[useremail]" msg="请输入正确格式的电子邮箱，如abc@163.com"/>
							<span class="help-block">请输入正确格式的电子邮箱，如abc@163.com</span>
						</div>
					</div>
					<div class="control-group">
						<label for="modules" class="control-label">模型</label>
						<div class="controls">
							<select id="modules" class="combox" name="args[usergroupid]" needle="needle" msg="您必须为这个用户选择一个模型" target="groupid" refUrl="index.php?user-master-ajax-getActorsByModule&moduleid={value}">
								<option value="">请选择模型</option>
								<?php $mid = 0;
 foreach($this->tpl_var['modules'] as $key => $module){ 
 $mid++; ?>
								<option value="<?php echo $module['moduleid']; ?>"><?php echo $module['modulename']; ?></option>
								<?php } ?>
							</select>
							<span class="help-block">为这个用户选择一个模型</span>
						</div>
					</div>
					<div class="control-group">
						<label for="groupid" class="control-label">角色</label>
						<div class="controls">
							<select id="groupid" name="args[usergroupid]" needle="needle" msg="您必须为这个用户选择一个角色" autocomplete="off" default="请先选择模型">
								<option value="">请先选择模型</option>
							</select>
							<span class="help-block">为这个用户选择一个角色</span>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button class="btn btn-primary" type="submit">提交</button>
							<input type="hidden" name="insertUser" value="1"/>
							<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
							<?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>
							<input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
							<?php } ?>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</body>
</html>