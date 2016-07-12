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
				<li class="active">首页</li>
			</ul>
			<div class="row-fluid">
				<div class="span6">
					<div class="well">
						<h5>
						 组织考试流程：
						</h5>
						<table>
						<tr>
                            <td>1、</td>
                            <td>在考试设计->科目管理中添加或设置科目。</td>
                        </tr>
                        <tr>
                            <td>2、</td>
                            <td>在试题管理中录入试题。</td>
                        </tr>
						<tr>
                            <td>3、</td>
                            <td>在试卷管理中添加试卷。</td>
                        </tr>
                        <tr>
                            <td valign="top">4、</td>
                            <td>在考试设计->考场列表中开通新考场，添加一张480*300像素的图片作为首页显示的考场图片，并对其进行关联试题等详细设置。</td>
                        </tr>
					    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>