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
				<li><a href="index.php?core-master">全局</a> <span class="divider">/</span></li>
				<li class="active">首页</li>
			</ul>
			<div class="row-fluid">
				<div class="span6">
					<div class="well">
						<h5>
							开发者信息
						</h5>
						<p>
						 管理员可以在模块管理中对其余模块进行设置。
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>