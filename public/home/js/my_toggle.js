var a = ['nav_bg1.jpg', 'nav_bg2.jpg', 'nav_bg3.jpg', 'nav_bg21.jpg'];
var b = ['top1_w1200.jpg', 'top2_w1200.jpg', 'top3_w1200.jpg', 'top21_w1200.jpg'];

// console.log(src);
$('.my_a').find('a').click(function () {
    var i = $(this).index();
    console.log(i);
    console.log($(this).find('img').attr("src"));

    $('.templet-top').css('background-image', 'url("http://127.0.0.1:8000/home/template/default/mfty/mfty_2/images/' + a[i]  + '")');
    $('.banner_img').css('background-image', 'url("http://127.0.0.1:8000/home/template/default/mfty/mfty_2/images/' + b[i]  + '")');
    $(this).addClass('active').siblings().removeClass('active');
});