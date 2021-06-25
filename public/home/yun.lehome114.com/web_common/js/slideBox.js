function slideDoor(a, b,c,d,e) {//a是列表class，b是内容class,c是btn列表的要加的class,d 是true/false控制是否轮播 e是轮播的速度
    var id1 = "#" + a + " ul" + " li";
    $(id1).click(function () {
        $(this).siblings().removeClass(c);//移除同胞元素的active类
        $(this).addClass(c);//添加当前元素的active类
        var num = $(this).index() + 1;//获取按钮的指针
        var class1 = "." + b;//获取class
        $(class1).hide();
        $(class1).each(function (i) {
            if (i == (num - 1))//选择对应的内容div
            { $(this).css('display', 'block'); }
        })
    });
    if (d == "true") {
        var speed = e;
        var time1 = setInterval(hdm, speed);
        $('.case').mousemove(function () {
            clearInterval(time1);
        });
        $('.case').mouseleave(function () {
            time1 = setInterval(hdm, speed);
        });
    }
    var num1 = 1;//获取按钮的指针
    function hdm() {
        var id1 = "#" + a + " ul" + " li";
        var class1 = "." + b;//获取class
        var elementNum = $(class1).length;
        var num = $(id1).index() + 1;//获取按钮的指针
        if (num1 < elementNum) {
            $(id1 + ":eq(" + num1 + ")").siblings('li').removeClass(c);//移除同胞元素的active类
            $(id1 + ":eq(" + num1 + ")").addClass(c);//添加当前元素的active类
            num = num1 + 1;//获取按钮的指针

            $(class1).hide();
            $(class1).each(function (i) {
                if (i == (num1))//选择对应的内容div
                { $(this).fadeIn(100) }
            })
            num1++;
        } else {
            num1 = 0;
        };
    };

}
