//判断号码格式,格式正确则返回true,错误则返回false
function checkTel(tel){
    var isPhone = /^([0-9]{3,4}-)?[0-9]{7,8}$/;
    var isMob=/^1\d{10}$/;
    if(isMob.test(tel)||isPhone.test(tel)){
        return true;
    }
    else{
        return false;
    }
}

//判断是否为空,不为空则返回true,为空则返回false
function checkNull(str) {
	if (str !== null && str !== undefined && str !== '') {
　　	return true;
　　} else {
		return false;
	}
}

//判断是否含有空格,没有空格则返回true,有空格则返回false
function checkkg(str) {
	if (str.indexOf(" ") == -1) {
    	return true;
	} else {
	    return false;
	}
}

//拷贝文字到剪贴板
function copy_str(str){
    var save = function(e){
        e.clipboardData.setData('text/plain', str);
        e.preventDefault();
    }
    document.addEventListener('copy', save);
    document.execCommand('copy');
    document.removeEventListener('copy',save);
}