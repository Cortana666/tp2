<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:96:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/public/../application/admin/view/cate/lst.htm";i:1523279156;s:88:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/application/admin/view/public/top.htm";i:1522757993;s:89:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/application/admin/view/public/left.htm";i:1522761448;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://tp2.com/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://tp2.com/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://tp2.com/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://tp2.com/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://tp2.com/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://tp2.com/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://tp2.com/public/static/admin/style/animate.css" rel="stylesheet">

</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
	<div class="navbar-inner">
			<div class="navbar-container">
					<!-- Navbar Barnd -->
					<div class="navbar-header pull-left">
							<a href="#" class="navbar-brand">
									<small>
													<img src="http://tp2.com/public/static/admin/images/logo.png" alt="">
											</small>
							</a>
					</div>
					<!-- /Navbar Barnd -->
					<!-- Sidebar Collapse -->
					<div class="sidebar-collapse" id="sidebar-collapse">
							<i class="collapse-icon fa fa-bars"></i>
					</div>
					<!-- /Sidebar Collapse -->
					<!-- Account Area and Settings -->
					<div class="navbar-header pull-right">
							<div class="navbar-account">
									<ul class="account-area">
											<li>
													<a class="login-area dropdown-toggle" data-toggle="dropdown">
															<div class="avatar" title="View your public profile">
																	<img src="http://tp2.com/public/static/admin/images/adam-jansen.jpg">
															</div>
															<section>
																	<h2><span class="profile"><span><?php echo \think\Session::get('name'); ?></span></span></h2>
															</section>
													</a>
													<!--Login Area Dropdown-->
													<ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
															<li class="username"><a>David Stevenson</a></li>
															<li class="dropdown-footer">
																	<a href="<?php echo url('admin/logOut'); ?>">
																					退出登录
																			</a>
															</li>
															<li class="dropdown-footer">
																	<a href="<?php echo url('admin/edit',array('id'=>\think\Session::get('id'))); ?>">
																					修改密码
																			</a>
															</li>
													</ul>
													<!--/Login Area Dropdown-->
											</li>
											<!-- /Account Area -->
											<!--Note: notice that setting div must start right after account area list.
													no space must be between these elements-->
											<!-- Settings -->
									</ul>
							</div>
					</div>
					<!-- /Account Area and Settings -->
			</div>
	</div>
</div>


	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
		<!-- Page Sidebar Header-->
		<div class="sidebar-header-wrapper">
				<input class="searchinput" type="text">
				<i class="searchicon fa fa-search"></i>
				<div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
		</div>
		<!-- /Page Sidebar Header -->
		<!-- Sidebar Menu -->
		<ul class="nav sidebar-menu">
				<!--Dashboard-->
				<li>
						<a href="#" class="menu-dropdown">
								<i class="menu-icon fa fa-user"></i>
								<span class="menu-text">管理员</span>
								<i class="menu-expand"></i>
						</a>
						<ul class="submenu">
								<li>
										<a href="<?php echo url('admin/lst'); ?>">
												<span class="menu-text">
														管理列表                                    </span>
												<i class="menu-expand"></i>
										</a>
								</li>
						</ul>
				</li>

				<li>
						<a href="#" class="menu-dropdown">
								<i class="menu-icon fa fa-folder"></i>
								<span class="menu-text">栏目</span>
								<i class="menu-expand"></i>
						</a>
						<ul class="submenu">
								<li>
										<a href="<?php echo url('cate/lst'); ?>">
												<span class="menu-text">
														栏目列表                                   </span>
												<i class="menu-expand"></i>
										</a>
								</li>
						</ul>
				</li>

				<li>
						<a href="#" class="menu-dropdown">
								<i class="menu-icon fa fa-file-text"></i>
								<span class="menu-text">文档</span>
								<i class="menu-expand"></i>
						</a>
						<ul class="submenu">
								<li>
										<a href="/admin/document/index.html">
												<span class="menu-text">
														文章列表                                    </span>
												<i class="menu-expand"></i>
										</a>
								</li>
						</ul>
				</li>

				<li>
						<a href="#" class="menu-dropdown">
								<i class="menu-icon fa fa-gear"></i>
								<span class="menu-text">系统</span>
								<i class="menu-expand"></i>
						</a>
						<ul class="submenu">
								<li>
										<a href="/admin/document/index.html">
												<span class="menu-text">
														配置                                   </span>
												<i class="menu-expand"></i>
										</a>
								</li>
						</ul>
				</li>

		</ul>
		<!-- /Sidebar Menu -->
</div>

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li class="active">栏目管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<button type="button" tooltip="添加管理员" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">栏目名称</th>
                                <th class="text-center">栏目类型</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>
													<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td align="center"><?php echo $cate['id']; ?></td>
                                <td><?php echo str_repeat('---',$cate['level']) ?><?php echo $cate['catename']; ?></td>
		                            <td align="center">
																	<?php if($cate['type'] == 1): ?>列表
																	<?php else: ?>单页
																	<?php endif; ?>
																</td>
                                <td align="center">
                                    <a href="<?php echo url('edit', array('id'=>$cate['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗？', '<?php echo url('del',array('id'=>$cate['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
													<?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div style="width: 210px;margin: auto;padding-top: 15test.htmlpx;">

                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>
	</div>

	    <!--Basic Scripts-->
    <script src="http://tp2.com/public/static/admin/style/jquery_002.js"></script>
    <script src="http://tp2.com/public/static/admin/style/bootstrap.js"></script>
    <script src="http://tp2.com/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://tp2.com/public/static/admin/style/beyond.js"></script>



</body></html>
