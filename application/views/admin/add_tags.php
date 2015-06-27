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
        <style>
        	form{
        		height: 405px;
        	}
        	.control-group{
        		
        	}
        	.control-group label{
        		
        	}
        	#tags{
        		
        	}
        	#tags select{
        		
        	}
        	#content{
        		
        	}
        	#submit{
        		margin-top: 25px;
        	}
        </style>
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
                                    <i class="fa fa-dashboard"></i> 文章
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
	                    <div class="col-lg-12">
	                    	<form action="admin/save_tags" method="post" class="form-horizontal">
                                <div class="control-group col-lg-8">
                                    <label>标签名称</label>
                                    <input class="form-control" name="tag_name">
                                </div>
                                <input type="submit" class="btn btn-default" id="submit" name="add_tags" value="添加标签" />
                            </form>
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