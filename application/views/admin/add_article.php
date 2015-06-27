<?php
	$htmlData = '';
	if (!empty($_POST['article_content'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['article_content']);
		} else {
			$htmlData = $_POST['article_content'];
		}
	}
?>
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
        		position: relative;
        		height: 388px;;
        	}
        	.control-group{
        		margin-bottom: 15px;;
        	}
        	.control-group label{
        		margin-bottom: 15px;;
        	}
        	#tags{
        		position: absolute;
        		top: 0px;
        		right: 80px;
        	}
        	#tags select{
        		height: 285px;
        	}
        	#content{
        		height: 200px;
        	}
        	#submit{
        		position: absolute;
        		right: 95px;
        		bottom: 15px;
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
	                    	<form action="admin/save_article" method="post" class="form-horizontal">
                                <div class="control-group col-lg-8">
                                    <label>标题</label>
                                    <input class="form-control" name="article_title">
                                </div>
                                <div class="control-group col-lg-8">
                                    <label>内容</label>
                                    <textarea class="form-control" id="content" rows="3" style="visibility:hidden;" name="article_content" >
                                    	<?php echo htmlspecialchars($htmlData); ?>
                                    </textarea>
                                </div>
                                <div class="control-group col-lg-3" id="tags" >
                                    <label>标签</label>
                                    <select multiple class="form-control" name="article_tags[]">
                                    	<?php
                                    		foreach($tags as $tag){
                                    	?>
                                        		<option value="<?php echo $tag -> tag_id;?>"><?php echo $tag -> tag_name;?></option>
                                        <?php
											}
                                        ?>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-default" id="submit" name="add_article" value="发表文章" />
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
        <script src="kindeditor/kindeditor.js"></script>
		<script src="kindeditor/lang/zh_CN.js"></script>
		<script src="kindeditor/plugins/code/prettify.js"></script>
	    <script>
	 		KindEditor.ready(function(K) {
				var editor1 = K.create('textarea[name="article_content"]', {
					cssPath : '../kindeditor/plugins/code/prettify.css',
					uploadJson : '../kindeditor/php/upload_json.php',
					fileManagerJson : '../kindeditor/php/file_manager_json.php',
					allowFileManager : true,
					afterCreate : function() {
						var self = this;
						K.ctrl(document, 13, function() {
							self.sync();
							K('form[name=add_article]')[0].submit();
						});
						K.ctrl(self.edit.doc, 13, function() {
							self.sync();
							K('form[name=add_article]')[0].submit();
						});
					}
				});
				prettyPrint();
			});   
	    
	        $(document).ready(function() {
				//* jQuery.browser.mobile will be true if the browser is a mobile device
				(function(a){jQuery.browser.mobile=/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
				//replace themeforest iframe
				if(jQuery.browser.mobile) {
					if (top !== self) top.location.href = self.location.href;
				}
	        });
	    </script>
    </body>
</html>