var isPhone = function(){
	if (window.matchMedia("(max-width:768px)").matches) {
		return true;
	}
	else return false;
}

var isTerblet = function(){
	if (window.matchMedia("(max-width:1000px)").matches) {
		return true;
	}
	else return false;
}

var urldecode=function(str){
	if (typeof str!="string"){
		return str;
	} 
	return decodeURIComponent(str.replace(/\+/g, ' '));
}