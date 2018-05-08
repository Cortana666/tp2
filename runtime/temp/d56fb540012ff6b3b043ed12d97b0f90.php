<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/public/../application/admin/view/conf/conf.htm";i:1524213056;s:88:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/application/admin/view/public/top.htm";i:1522757993;s:89:"/Volumes/HighSierraFile/HighSierraFile/www/new/tp2/application/admin/view/public/left.htm";i:1524143272;}*/ ?>
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
										<a href="<?php echo url('article/lst'); ?>">
												<span class="menu-text">
														文章列表                                    </span>
												<i class="menu-expand"></i>
										</a>
								</li>
						</ul>
				</li>

				<li>
						<a href="#" class="menu-dropdown">
								<i class="menu-icon fa fa-chain"></i>
								<span class="menu-text">友情链接</span>
								<i class="menu-expand"></i>
						</a>
						<ul class="submenu">
								<li>
										<a href="<?php echo url('link/lst'); ?>">
												<span class="menu-text">
														链接列表                                    </span>
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
										<a href="<?php echo url('conf/conf'); ?>">
												<span class="menu-text">
														配置项                                   </span>
												<i class="menu-expand"></i>
										</a>
								</li>
								<li>
										<a href="<?php echo url('conf/lst'); ?>">
												<span class="menu-text">
														配置列表                                   </span>
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
                                        <li class="active">系统</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <form class="" action="" method="post">
											<table class="table table-bordered table-hover">
													<thead class="">
															<tr>
																	<th class="text-center">配置名称</th>
																	<th class="text-center">配置值</th>
															</tr>
													</thead>
													<tbody>
														<?php
															foreach($confres as $k => $v){
														?>
															<tr>
																	<td align="center"><?php echo $v['cnname']; ?></td>
																	<td align="center">
																		<?php
																			if($v['type'] == 1){
																		?>
																		<input class="form-control" type="text" name="<?php echo $v['enname']; ?>" value="<?php echo $v['value']; ?>">
																		<?php
																			}elseif($v['type'] == 2){
																		?>
																		<textarea name="<?php echo $v['enname']; ?>" class="form-control"><?php echo $v['value']; ?></textarea>
																		<?php
																			}elseif($v['type'] == 3){
																		
																				$values = explode(",",$v['values']);
																				for($i=0;$i<count($values);$i++){
																		?>
																		<label style="margin-right:15px;">
																			<input value="<?php echo $values[$i]; ?>" <?php if($v['value'] == $values[$i]): ?>checked="checked"<?php endif; ?> type="radio" name="<?php echo $v['enname']; ?>" class="basic">
																			<span class="text"><?php echo $values[$i]; ?></span>
																		</label>
																		<?php
																				}
																			}elseif($v['type'] == 4){
																		?>
																		<label style="margin-right:15px;">
																			<input type="checkbox" name="<?php echo $v['enname']; ?>" <?php if($v['value'] == $v['values']): ?>checked="checked"<?php endif; ?> value="<?php echo $v['values']; ?>">
																			<span class="text"><?php echo $v['values']; ?></span>
																		</label>
																		<?php
																			}elseif($v['type'] == 5){
																				$values = explode(",",$v['values']);
																		?>
																		<select class="" name="<?php echo $v['enname']; ?>">
																		<?php
																				for($i=0;$i<count($values);$i++){
																		?>
																		<option <?php if($v['value'] == $values[$i]): ?>selected="selected"<?php endif; ?> value="<?php echo $values[$i]; ?>"><?php echo $values[$i]; ?></option>
																		<?php
																				}
																		?>
																		</select>
																		<?php
																			}
																	 	?>
																	</td>
															</tr>
															<?php
																}
															?>
															<tr>
																<td colspan="2"><div class="form-group">
																		<div class="col-sm-offset-2 col-sm-10">
																				<button type="submit" class="btn btn-default">保存信息</button>
																		</div>
																</div></td>
															</tr>
													</tbody>

											</table>
                    </form>
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
