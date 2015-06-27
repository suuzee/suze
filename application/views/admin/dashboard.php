<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SU_ZE__' Admin</title>
        <base href="<?php echo site_url();?>"/>
        <!-- Bootstrap Core CSS -->
        <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/admin/css/sb-admin.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="assets/admin/css/plugins/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <?php include("header.php");?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            控制面板 <small>我的数据</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-dashboard"></i> 控制面板
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="jumbotron" style="background: #e78170; color: #fff;">
	                    <h1 style="font-size: 36px;">Hello, SU_ZE__!</h1>
	                    <p style="font-size: 24px; margin-top: 10px;">现实中做不到的，就让梦去完成。</p>
	                </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>文章</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">查看详情</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tags fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">124</div>
                                            <div>标签</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">查看详情</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-eye fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>来访</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">查看详情</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-heart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">13</div>
                                            <div>赞</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">查看详情</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="assets/admin/js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="assets/admin/js/bootstrap.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="assets/admin/js/plugins/morris/raphael.min.js"></script>
        <script src="assets/admin/js/plugins/morris/morris.min.js"></script>
        <script src="assets/admin/js/plugins/morris/morris-data.js"></script>
    </body>
</html>