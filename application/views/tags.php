<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SU_ZE__' Blog</title>
        <base href="<?php echo site_url();?>" />
        <link rel="stylesheet" href="assets/front/css/style.css" />
        <link rel="stylesheet" href="assets/front/css/index.css" />
        <link rel="stylesheet" href="assets/front/css/font-awesome.min.css" />
        <link rel="shortcut icon" href="assets/front/img/favicon.ico" />
    </head>
    <body>
        <?php include("sidebar.php");?>
        <?php include("header.php");?>
        <div class="container">
            <div class="article-list">
                <ul class="tags">
                    <li class="active"><a href="">ALL</a></li>
                    <?php
                        foreach($five_tags as $five_tag){
                    ?>
                        <li><a href="tags/<?php echo $five_tag -> tag_id;?>"><?php echo $five_tag -> tag_name;?></a></li>
                    <?php
                        }
                    ?>
                </ul>
                <div class="clearfix"></div>
                <ul class="blog-list">
                    <?php
                        if(count($articles) != 0){
                            foreach($articles as $article){
                                $this -> load -> model("tag_model");
                    ?>
                                <li class="blog-item">
                                    <a href="articles/<?php echo $article -> article_id;?>" class="blog-title">
                                        <?php echo $article -> article_title;?>
                                    </a>
                                    <a href="articles/<?php echo $article -> article_id;?>" class="blog-content">
                                        <?php echo $article -> article_content;?>
                                    </a>
                                    <div class="blog-info">
                                        <div class="blog-views"><?php echo $article -> article_views;?>&nbsp;<i class="fa fa-eye"></i></div>
                                        <div class="blog-zan"><?php echo $article -> article_zan;?>&nbsp;<i class="fa fa-heart" style="color: #e78170;"></i></div>
                                        <div class="blog-time"><?php echo $article -> article_date;?></div>
                                            <?php
                                                $tags = $this -> tag_model -> get_tags_by_article_id($article -> article_id);
                                                if(count($tags) != 0 ){
                                                    foreach($tags as $tag){
                                            ?>
                                                        <a href="tags/<?php echo $tag -> tag_id;?>" class="blog-tags" ><?php echo $tag -> tag_name;?></a>
                                            <?php
                                                    }
                                                }
                                            ?>
                                    </div>
                                </li>
                    <?php
                            }
                        } else{
                    ?>
                    <p class="no-article">
                        这个标签没有文章╮(╯▽╰)╭    
                    </p>
                    <?php
                        }
                    ?>
                </ul>
                <?php
                    if(count($articles) >= 5 ){
                ?>
                    <button type="" class="blog-more" >点击查看更多</button>
                <?php
                    } else{
                ?>  
                    <button type="" class="blog-more" >更多内容敬请期待...</button>
                <?php
                    }
                ?>
            </div>
        </div>
        <?php include("footer.php");?>
        <script src="assets/front/js/jquery-1.11.2.min.js"></script>
        <script src="assets/front/js/common.js"></script>
        <script src="assets/front/js/sidebar.js"></script>
        <script>
            $(function(){
                var someHeight = $(".article-list").css("height");
                $(".rightbar").height((parseInt(someHeight) + 51) + "px");
            });
        </script>
    </body>
</html>