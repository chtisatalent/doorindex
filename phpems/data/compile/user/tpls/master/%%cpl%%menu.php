<ul class="nav nav-tabs nav-stacked">
	<li<?php if($this->tpl_var['method'] == 'index'){ ?> class="active"<?php } ?>>
		<a href="index.php?user-master">首页</a>
	</li>
	<li<?php if($this->tpl_var['method'] == 'user'){ ?> class="active"<?php } ?>>
		<a href="index.php?user-master-user">用户管理</a>
	</li>
	<li<?php if($this->tpl_var['method'] == 'actor'){ ?> class="active"<?php } ?>>
		<a href="index.php?user-master-actor">角色管理</a>
	</li>
	<li<?php if($this->tpl_var['method'] == 'module'){ ?> class="active"<?php } ?>>
		<a href="index.php?user-master-module">模型管理</a>
	</li>
</ul>