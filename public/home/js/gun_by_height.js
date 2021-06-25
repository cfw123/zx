//滚动到与顶端指定距离的位置
function gun_by_height(height) { 
	$('html, body').animate({scrollTop:height}, 'slow'); 
	return false; 
}