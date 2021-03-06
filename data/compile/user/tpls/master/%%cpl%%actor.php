<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<?php $this->_compileInclude('menu'); ?>
		</div>
		<div class="span10" id="datacontent">
<?php } ?>
			<ul class="breadcrumb">
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>
				<li class="active">角色管理</li>
			</ul>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">角色列表</a>
				</li>
				<li class="pull-right">
					<a href="index.php?user-master-actor-add">添加角色</a>
				</li>
			</ul>
            
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>角色名</th>
						<th>默认注册为该角色</th>
						<th>绑定模型</th>
						<th>角色描述</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
             
					<?php $gid = 0;
 foreach($this->tpl_var['actors']['data'] as $key => $group){ 
 $gid++; ?>
					<tr>
						<td><?php echo $group['groupid']; ?></td>
						<td><?php echo $group['groupname']; ?></td>
						<td><?php if($group['groupdefault']){ ?><a class="icon-ok"></a><?php } else { ?><a class="icon-remove ajax" href="index.php?user-master-actor-selectactor&groupid=<?php echo $group['groupid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>"></a><?php } ?></td>
						<td><?php echo $this->tpl_var['modules'][$group['groupmoduleid']]['modulename']; ?></td>
						<td><?php echo $group['groupdescribe']; ?></td>
						<td>
							<div class="btn-group">
								<a class="btn" href="index.php?user-master-actor-modifyactor&groupid=<?php echo $group['groupid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" title="修改角色"><em class="icon-edit"></em></a>
								<a class="btn ajax" href="index.php?user-master-actor-delactor&groupid=<?php echo $group['groupid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" title="删除角色"><em class="icon-remove"></em></a>
							</div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
           
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
</body>
</html>
<?php } ?>