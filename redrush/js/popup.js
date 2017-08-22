/***************************/
//@Author: Adrian "yEnS" Mato Gondelle
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;

//loading popup with jQuery magic!
function loadPopupBrake(){
	//loads popup only if it is disabled
	if(popupStatus==0){
		$(".backgroundPopup").css({
			"opacity": "0.7"
		});
		$(".backgroundPopup").fadeIn("slow");
		$("#popup-brake").fadeIn("slow");
		popupStatus = 1;
	}
}

function loadPopupKnalpot(){
	//loads popup only if it is disabled
	if(popupStatus==0){
		$(".backgroundPopup").css({
			"opacity": "0.7"
		});
		$(".backgroundPopup").fadeIn("slow");
		$("#popup-knalpot").fadeIn("slow");
		popupStatus = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup(){
	//disables popup only if it is enabled
	if(popupStatus==1){
		$(".backgroundPopup").fadeOut("slow");
		$(".popup").fadeOut("slow");
		popupStatus = 0;
	}
}

//centering popup
function centerPopup(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $(".popup").height();
	var popupWidth = $(".popup").width();
	
	$(".backgroundPopup").css({
		"height": windowHeight
	});
	
}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!
	$("#btn-brake").click(function(){
		//centering with css
		centerPopup();
		//load popup
		loadPopupBrake();
	});
	$("#btn-knalpot").click(function(){
		//centering with css
		centerPopup();
		//load popup
		loadPopupKnalpot();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$(".popup-close").click(function(){
		disablePopup();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus==1){
			disablePopup();
		}
	});

});