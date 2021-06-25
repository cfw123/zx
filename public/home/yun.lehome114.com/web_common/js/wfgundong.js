function wfgundong(id,id1,id2,speed){
	//无缝滚动
	//speed数字越大速度越慢
	var obj = document.getElementById(id)
	var obj1 = document.getElementById(id1)
	var obj2 = document.getElementById(id2)
	obj2.innerHTML=obj1.innerHTML; //克隆demo1为demo2
	function Marquee(){
	if(obj2.offsetHeight-obj.scrollTop<=0)//当滚动至demo1与demo2交界时
	obj.scrollTop-=obj1.offsetHeight //demo跳到最顶端
	else{
	obj.scrollTop++
	}
	}

	var MyMar=setInterval(Marquee,speed);
	obj.onmouseover=function() {clearInterval(MyMar)};//鼠标移上时清除定时器达到滚动停止的目的
	obj.onmouseout=function() {MyMar=setInterval(Marquee,speed)};//鼠标移开时重设定时器
}