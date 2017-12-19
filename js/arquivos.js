	function started(){
		//Inibe os botoes da barra de ferramentas
		$("#buttonBar button").css("display","none");
		
		//Permite entrada de dados somente no campo NOME do formulario
		$(".active input").attr("disabled","disabled");
		$(".active textarea").attr("disabled","disabled");
		$("#nome").removeAttr("disabled");
		
		//reseta todos os campos
		$("#nome").val('');
		$("#externo").val('');
		$("#diretorio").val('');
		$("#descricao").val('');
		$("#mensagem").html('');
		

		//barra padrão
		buttonBar();
	}

	function enter(e,option) {
		if (e.keyCode == 13) {
			switch(option){
				case 1 : consultaArquivo();
					 break;
				case 2 : localizar()
					 break;
			}
			$("#mensagem").html("Buscando...");
		}
	}
	
	function enterArquivo(e) {
		if (e.keyCode == 13) {
			consultaArquivo();
		}
	}
	
	function enterLocaliza(e) {
		if (e.keyCode == 13) {
			localizar();
		}
	}
	
	function consultaArquivo(){
		var valueField = "";
		var fileFind = valueField;
		valueField = $("#nome").val();
		
		console.log("valueField: " + valueField);
		console.log("fileFind: " + fileFind);
		if(valueField != fileFind){
			//atualiza o valor de fileFind
			fileFind = valueField;
			var dados = {	
					"type"	: "Find",
					"value"	: fileFind
				};
			console.log(dados);
			$.post("controller/arquivos.php",
			{
				data : dados
			},
			function(data, status){
				if(status == 'success'){
					console.log(data);
					$("#mensagem").html(data.mensagem);
					arquivos(data);
				}
			},
			"json"
			);
		}
		
	}
	
	
	function exportArquivo(extend){
				
		console.log("extend: " + extend);
					
		var dados = {	
				"type"		: "Export",
				"extension"	: extend
			};
		console.log(dados);
		$.post("controller/arquivos.php",
		{
			data : dados
		},
		function(data, status){
			if(status == 'success'){
				console.log(data);
				arquivos(data);
			}
		},
		"json"
		);
	}
	
	
	function arquivos(info){
		
		if(info.code == 0 ){
			console.log(info.mensagem);
			
			$("#cont-registro").val(0);
			$("#externo").val('');
			$("#diretorio").val('');
			$("#descricao").val('');

			var option = confirm("Arquivos não encontrado\nDeseja cadastrar agora?");

			if(option){
				buttonBar(0);
				$(".active input").removeAttr("disabled");
				$(".active textarea").removeAttr("disabled");
				$("#mensagem").html('Inserindo novo registro');
			}
			else{
				$("#nome").val('');
				$("#nome").focus();
			}
		}
		else{
			started();
			$("#cont-registro").val(info.dados.ID);
			$("#nome").val(info.dados.nome);
			$("#externo").val(info.dados.nome_externo);
			$("#diretorio").val(info.dados.caminho);
			$("#descricao").val(info.dados.descricao);
			buttonBar(1);
		}
	
	}

	function salvarArquivo(){
		var codigo	= $("#cont-registro").val();
		var nome 	= $("#nome").val();
		var externo 	= $("#externo").val();
		var pasta	= $("#diretorio").val();
		var desc	= $("#descricao").val();
		var tipo	= "Insert";
		if(nome != "" && pasta != ""){
			if(externo == ""){
				externo = nome;
			}
			
			if(codigo > 0){
				tipo = "Update";
			}
			
			var dados = {	
					"type"	: tipo,
					"codigo": codigo,
					"nome"	: nome,
					"exte"	: externo,
					"path"	: pasta,
					"desc"	: desc
				};
			console.log(dados);
			$.post("controller/arquivos.php",
			{
				data : dados
			},
			function(data, status){
				if(status == 'success'){
					console.log(data);
					consultaArquivo();
				}
			},
			"json"
			);
			
		}
		
		
	}
	
	function editarRegistro(){
		buttonBar(0);
		$(".active input").removeAttr("disabled");
		$(".active textarea").removeAttr("disabled");
		$("#mensagem").html('Editando registro');
		
	}
	
	function buttonBar(modo){
		//reset o menu
		$("#buttonBar button").css("display","none")
		
		switch(modo){
			// 0 - salvar; cancelar
			case 0 	: 	$("#buttonBar #salvar").css("display","");
						$("#buttonBar #cancelar").css("display","");
						break;
			// 1 - novo, alterar
			case 1	:	$("#buttonBar #novo").css("display","");
						$("#buttonBar #editar").css("display","");
						break;
						
			default :   $("#buttonBar #localizar").css("display","");
						$("#buttonBar #exportar").css("display","");
		}
	}
	
	function localizar(){
		var a = $("#localiza").val();
		var dados = {	
					"type"	: "Search",
					"value" : a
				};
		
		console.log(a);
		console.log(a.length);
		
		if(a.length > 0){
			$.post("controller/arquivos.php",
				{
					data : dados
				},
				function(data, status){
					if(status == 'success'){
						resultBusca(data);
					}
				},
				"json"
			);
		}
		
	}
	
	function resultBusca(dados){
	var i=0;
	var include = '<table class="table"><tbody><td class="col-lg-1">#</td><td class="col-lg-2">Nome</td><td class="col-lg-2">Externo</td><td class="col-lg-3">Caminho</td><td class="col-lg-4">Descrição</td></tbody></table>';
	
	if(dados.rows > 0){
		for(i=1;i<= dados.rows; i++){
			include += "<tr> <td>" + i + "</td> <td>" + dados.info[i].nome + "</td> <td>" + dados.info[i].nome_externo + "</td> <td>" + dados.info[i].caminho + "</td> <td> " + dados.info[i].descricao + "</td> </tr>";
		}
	}
	$("#tabela").html(include);
	$("#mensagem").html(dados.mensagem);
}
	
	
	started();

