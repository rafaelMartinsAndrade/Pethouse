function menu(){
	let screenWidth = screen.width;
	if(screenWidth < 992){
		let item = document.getElementsByClassName("rd-nav-link");
		let btn = document.getElementById("btn_menu");
		let div = document.getElementById("div_menu");
		for(let i = 0; i < item.length; i++){
			item[i].addEventListener("click", function() {
			event.preventDefault;
			btn.classList.remove("active");
			div.classList.remove("active");
			});
		}
	}
}

function ponto_juntos(){
	if(screen.width >= 768 && screen.width <= 991){
	}else if(screen.width >= 768){
		document.getElementById("bunner").style = "background-image: url(http://localhost/pethouse/public/assets/css/imgs/inicio_fundo.jpeg); background-size: cover";
	}else{
		 document.getElementById("bunner").style = "background-image: url(css/imgs/inicio_fundo_pequeno.jpg);background-size:cover";
		 document.getElementById("email").style = "padding:0px;";
		 document.getElementById("texto_email").style = "font-size:15px;";
	}
}

function mudar(id){
	window.location.href = id;
}

function adicionar(){
	let titulo = document.getElementById("titulo").value;
	let descricao = document.getElementById("descricao").value;
	let subtitulo = document.getElementById("subtitulo0").value;
	let i = document.getElementById("contagem").value;
	document.getElementById("mais"+i).hidden = true;
	document.getElementById('check'+i).hidden = false;
	del = document.getElementById('deletar'+i);
	if(del != null){
		del.hidden = true;
	}
	row = document.getElementById("adicionar");
	i++;
	let linha = "";
	linha += 	'<div id="tudo'+i+'">'+
				'<div class="col-md-11">'+
				'<h3>Sub-Título:</h3><br>'+
				'</div>'+
				'<div class="col-md-11">'+
				'<div class="input_conteudo" name="subtitulo'+i+'" id="subtitulo'+i+'" contenteditable></div><br><br>'+
				'</div>'+
				'<div class="col-md-1">'+
				'<img src="css/imgs/deletar.png" id="deletar'+i+'" class="adicionar" alt="" style="width: 34px; height: 34px;" onclick="del_inputs()"/><img src="css/imgs/check.png" class="adicionar" alt="" style="width: 34px; height: 34px;" onclick="confirmar()" hidden /><br><br>'+
				'</div>'+
				'<div>'+
				'<div class="col-md-11">'+
				'<h5>Conteúdo:</h5><br>'+
				'</div>'+
				'<div class="col-md-11">'+
				'<div class="input_conteudo" name="conteudo'+i+'" id="conteudo'+i+'" contenteditable></div>'+
				'</div>'+
				'<div class="col-md-1">'+
				'<img src="css/imgs/mais.png" id="mais'+i+'" class="adicionar" alt="" style="width: 34px; height: 34px;" onclick="adicionarmais()" hidden/><img src="css/imgs/check.png" id="check'+i+'" class="adicionar" alt="" style="width: 34px; height: 34px;" onclick="confirmar()" hidden /><br><br>'+
				'</div>'+
				'</div>'+
				'</div>';
				
			row.innerHTML += linha;   
			document.getElementById("contagem").value = i; 
			document.getElementById("descricao").value = descricao;
			document.getElementById("titulo").value = titulo;
			document.getElementById("subtitulo0").value = subtitulo;
	
}		

function confirmar(){
	let i = document.getElementById("contagem").value;
	document.getElementById('mais'+i).hidden = false;
	i--;
	document.getElementById('check'+i).hidden = true;
	
}

function del_inputs(){
	let i = document.getElementById("contagem").value;
	document.getElementById('tudo'+i).remove();
	i--;
	document.getElementById('check'+i).hidden = true;
	document.getElementById("mais"+i).hidden = false;
	let deletar = document.getElementById("deletar"+i);
	if(deletar != null){
		deletar.hidden = false;
	}
	document.getElementById("contagem").value = i;
}

function adicionarmais(){
	let i = document.getElementById("contagem").value;
	document.getElementById("deletar"+i).hidden = true;
	adicionar();
}

function sub(){
	document.getElementById("total").value = "";
	let texto = "";
	let vazio_cont = false;
	let vazio_tit = false;
	let vazio_desc = false;
	let image_name = document.getElementById("imagem").value;
	let imagem_invalida = false;
	if(image_name == ""){
	}else{
		var extencao = $('#imagem').val().split('.').pop().toLowerCase();
		if(jQuery.inArray(extencao, ['gif','png','jpg','jpeg']) == -1){
			imagem_invalida = true;
		}
	}
	if(imagem_invalida == true){
		alert("Arquivo de imagem inválido");
		$('#image').val('');
	}else{
	for(i = 0;document.getElementById("conteudo"+i) != null;i++){
		if(document.getElementById("conteudo"+i).innerHTML == ""){
			vazio_cont = true;
		}
	}
	if(document.getElementById("titulo").value == ""){
		vazio_tit = true;
	}
	if(document.getElementById("descricao").value == ""){
		vazio_desc = true;
	}
	if(vazio_cont == false && vazio_tit == false && vazio_desc == false){
	for(i = 0;document.getElementById("conteudo"+i) != null;i++){
		let texto_sub = document.getElementById("subtitulo"+i).innerHTML;
		let texto_cont = document.getElementById("conteudo"+i).innerHTML;
		if(texto_sub == ""){
		texto +="<p></p><h5><p class='justify'>"+texto_cont+"</p></h5><p></p>";	
		document.getElementById("total").value += texto;
		}else{
		texto += "<h3>"+texto_sub+"</h3><h5><p class='justify'>"+texto_cont+"</p></h5><p></p>";
		document.getElementById("total").value += texto;
		}
	}
	document.getElementById("formulario").submit();
	}else{
		if(vazio_cont == true){
			alert("Preencha todos os campos de conteudo!!");
		}else{
			alert("Preencha o título e/ou a descrição!!");
		}
	}
}
    
}

function hidden(id){
	for(i = 0;i <= 7;i++){
		let campo = document.getElementById("erro"+i);
		if(campo != null){
			campo.hidden = true;
		}
	}
	document.getElementById("erro"+id).hidden = false;
}

function teste(){
	document.getElementById("formulario").submit();
}

function deletar(pagina, id){
	window.location.href = "./gerenciar"+pagina+".php?deletar="+id+"?";
}

function inserir(){
	document.getElementById("formulario").submit();
}