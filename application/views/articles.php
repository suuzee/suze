<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>测试文章 - SU_ZE__</title>
        <base href="<?php echo site_url();?>" />
        <link rel="stylesheet" href="assets/front/css/style.css" />
        <link rel="stylesheet" href="assets/front/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/front/css/single.css" />
        <link rel="shortcut icon" href="assets/front/img/favicon.ico" />
        <link rel="stylesheet" href="assets/front/prettify/prettify.css" />
    </head>
    <body>
        <?php include("sidebar.php");?>
        <div class="container" >
            <?php include("header.php");?>
            <p class="zan-add nodisp">赞 + 1</p>
            <div class="article">
                <h1 class="article-title"><?php echo $article -> article_title;?></h1>
                <p class="article-info">
                    <span class="article-time"><?php echo $article -> article_date;?></span>
                    &nbsp;
                    <span><?php echo $article -> article_views;?>&nbsp;次阅读</span>&nbsp;
                    <span class="zan-num" ><?php echo $article -> article_zan;?>&nbsp;个赞</span>
                </p>
                <p class="article-content">
                	<?php echo $article -> article_content;?>
                </p>
                <div class="zan">
                    <i class="fa fa-heart fa-3"></i>
                </div>
            </div>
        </div>
        <?php include("footer.php");?>
        <script src="assets/front/js/jquery-1.11.2.min.js"></script>
        <script src="assets/front/js/common.js"></script>
        <script src="assets/front/prettify/prettify.js"></script>
        <script src="assets/front/js/sidebar.js"></script>
        <script>
            $(function(){
                var someHeight = $(".article").css("height");
                $(".rightbar").height((parseInt(someHeight) + 51) + "px");
                
                // 点赞
                $(".zan").on("click", function(){
                	$.get("welcome/zan", {article_id: "<?php echo $article -> article_id;?>"},function(data){
                		if(data == "success"){
                			$(".zan-num").text("").text("<?php echo $article -> article_zan;?> 个赞");
                			$(".zan-add").fadeIn(1000).fadeOut(1000);
                		}
                	});
                });
            });
        </script>
    </body>
</html>