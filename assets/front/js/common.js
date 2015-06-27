// 微信弹层

$(function(){
    $(".follow button").on("click", function(){
        $(".wechat").fadeIn();
    });
    $(".weixin i").on("click", function(){
        $(".wechat").fadeOut();
    });
    $(".wechat").on("click", function(){
        $(".wechat").fadeOut();
    });
});

// 轮播图

$(function(){
    // var aLi = $(".swipe-btn li");
    // var aImg = $(".swipe-img li.active");
    // $(".swipe-img li.active img").css({
        // "height": $(".swipe-img li.active img").height() + 20,
        // "width": $(".swipe-img li.active img").width() + 20,
        // "left": $(".swipe-img li.active img").position().left - 20
    // });
    $(".swipe-img li").hide();
    $(".swipe-img li.active").fadeIn();
    setInterval(function(){
        if($(".swipe-img li").last().hasClass("active")){
            $(".swipe-img li.active").removeClass("active");
            $(".swipe-img li").first().addClass("active");
            $(".swipe-btn li").last().removeClass("active");
            $(".swipe-btn li").first().addClass("active");
        } else{
            $(".swipe-img li.active").removeClass("active").next().addClass("active");
            $(".swipe-btn li.active").removeClass("active").next().addClass("active");
        }
        $(".swipe-img li").fadeOut(1000);
        // $(".swipe-img li.active img").animate({
            // left: "-120",
            // top: "-520",
            // width: "-=20",
            // height: "-=20"
        // }, 5000, function(){
        $(".swipe-img li.active").fadeIn(1000);
        // });
    }, 3000);
    // setInterval(function(){
        // alert($(".swipe-img li.active").removeClass("active").next().addClass("active").html());
    // }, 2000);
    // for(var i = 0; i < aLi.length; i ++){
        // aLi[i].index = i;
        // aLi[i].on("click", function(){
            // switchImg(this.index);
            // index = this.index;
        // });
    // }
    // function switchImg(idx){
        // for(var i = 0; i < aLi.length; i ++){
            // aLi[i].className = "";
            // aImg[i].className = "";
        // }
        // aLi[idx].className = "active";
        // aImg[idx].className = "active";
    // }
    // clearInterval(timer);
    // function auto(){
        // timer = setInterval(function(){
            // index ++;
            // if(index == aLi.length){
                // index = 0;
            // }
            // switchImg(index);
        // }, 2000);
    // }
    // auto();
    
    // var aLi = $(".swipe-btn li");
    // var aImg = $(".swipe-img li");
    // function right(){
//         
    // }
    // function auto(){
        // timer = setInterval(function(){
//             
        // });
    // }
});
