<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<?php $this->_compileInclude('menu'); ?>
		</div>
		<div class="span10">
			<ul class="breadcrumb">
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>
				<li class="active">用户管理</li>
			</ul>
			<div class="row-fluid">
				<div class="span6">
					<div class="well">
						<h5>
							用户管理
						</h5>
						<p>
							管理员在用户管理中添加新的用户帐号，赋予其不同权限。
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>