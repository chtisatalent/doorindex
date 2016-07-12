<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="row-fluid">
	<div class="container-fluid examcontent">
		<div class="span2 exambox">
			<div class="examform">
				<div>
					<?php $this->_compileInclude('menu'); ?>
				</div>
			</div>
		</div>
		<div class="span10 exambox" id="datacontent">
			<div class="examform">
				<div>
					<ul class="breadcrumb">
						<li><a href="index.php?user-center">用户中心</a> <span class="divider">/</span></li>
						<li class="active">隐私设置</li>
					</ul>
					
						<div class="span3">
							<div class="caption">
								<h3><?php echo $this->tpl_var['_user']['username']; ?></h3>
								<p>注册日期：<?php echo date('Y-m-d',$this->tpl_var['_user']['userregtime']); ?></p>
								<p>注册IP：<?php echo $this->tpl_var['_user']['userregip']; ?></p>
								<p>用户单位：<?php echo $this->tpl_var['_user']['usercompany']; ?></p>
								<p>&nbsp;</p>
								
							</div>
							<div>&nbsp;</div>
						</div>
						<div class="span3">
							<div class="caption">
								<h3>&nbsp;</h3>
								<p>用户组：<?php echo $this->tpl_var['groups'][$this->tpl_var['_user']['usergroupid']]['groupname']; ?></p>
								<p>真实姓名：<?php echo $this->tpl_var['_user']['usertruename']; ?></p>
								<p>手机号码：<?php echo $this->tpl_var['_user']['userphone']; ?></p>
								<p>&nbsp;</p>
							</div>
							<div>&nbsp;</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>