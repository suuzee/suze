$(function() {
    // 标识符
    var bFlag1 = {"b1": true};
    var bFlag2 = {"b1": true};
    var bFlag3 = {"b1": true};
    // 缓存元素
    $hideBar = $(".hide-bar");
    $hideBarSearchBox = $(".hide-bar-search-box");
    $hideBarAllTags = $(".hide-bar-all-tags");

    // click事件
    $(".footer-menu").on("click", function() {
        myToggle($hideBar, bFlag1, "translateX", "translateX1", 300);
    });
    $(".hide-bar-search").on("click", function() {
        myToggle($hideBarSearchBox, bFlag2, "scaleX", "scaleX1", 300);
    });
    $(".hide-bar-tags").on("click", function(){
        myToggle($hideBarAllTags, bFlag3, "scaleX", "scaleX1", 300);
    });

    // myToggle方法
    function myToggle(element, bFlag, class1, class2, time){
        if (bFlag.b1) {
            element.removeClass(class2).addClass(class1);
            setTimeout(function() {
                bFlag.b1 = false;
                console.log(bFlag.b1);
            }, time);
        } else {
            element.removeClass(class1).addClass(class2);
            setTimeout(function() {
                bFlag.b1 = true;
            }, time);
        }
    }
});