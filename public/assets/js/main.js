function cadastro(){}

function login(){}

function link(id){
	window.location = "./"+id+".html";
}

function formatImg(){
	for(i=1;document.getElementById("row"+i) != null;i++){
		let img = document.getElementById("img"+i).clientHeight;
		let row = document.getElementById("row"+i).clientHeight;
		let conta = (row - img) / 2;
		document.getElementById("img"+i).style = "padding-top:"+conta+";padding-bottom:"+conta;

	}
}

function formatArrow(){
	let info = document.getElementById("info").clientHeight;
	for(i=1;document.getElementById("arrow"+i) != null;i++){
		let arrow = document.getElementById("arrow"+i).clientHeight;
		let conta = (info - arrow) / 3;
		document.getElementById("arrow"+i).style = "margin-top:"+conta+";margin-bottom:"+conta*2;
	}
}

function buttonmenu(){
	let img = document.getElementById("img_button");
	if(img == null){
		setTimeout(function(){document.getElementById("titulo_menu").style.opacity=0;}, 1);
		document.getElementById("btn_menu").className = 'rd-navbar-toggle toggle-original';
		document.getElementById("btn_menu").innerHTML = '<img class="fadding" id="img_button" src="css/imgs/x.png" style="opacity:0%;"></img>';
		setTimeout(function(){document.getElementById("img_button").style.opacity=1;}, 1);
	}else{
		setTimeout(function(){document.getElementById("img_button").style.opacity=0;}, 1);
		setTimeout(function(){document.getElementById("titulo_menu").style.opacity=1;}, 1);
		document.getElementById("btn_menu").innerHTML = '<span></span>';
		document.getElementById("btn_menu").className = 'rd-navbar-toggle toggle-original active';
	}
}