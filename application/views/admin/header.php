<?php
	$login_admin = $this -> session -> userdata("login_admin");
	if(!$login_admin){
		echo '<script>alert("请登录!");location.href="admin";</script>';
	}
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="admin/dashboard">SU_ZE' Admin</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $login_admin -> admin_name;?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="admin/logout"><i class="fa fa-fw fa-power-off"></i> 退出登录</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> 主页</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-file-text fa-arrows-v"></i> 文章管理 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="admin/add_article">写文章</a>
                    </li>
                    <li>
                        <a href="admin/articles">文章列表</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/tags"><i class="fa fa-tags fa-wrench"></i> 标签管理</a>
            </li>
        </ul>
    </div>
</nav>