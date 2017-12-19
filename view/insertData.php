
  <script type="text/javascript" src="js/bootstrap-timepicker.js"></script>
   <link type="text/css" href="css/timepicker.less" />
<div>
	<ol class="breadcrumb">
		<li><a href="?pg=home" title="Ir para inicio">Home </a></li>
		<li>Base de dados </li>
		<li>Inserir Dados</li>
	</ol>

	<div class="panel-body ng-binding">
		<div class="navbar" style="margin-bottom:0">
		  <div class="navbar-left">
			<button id="novo" class="btn btn-primary ng-binding" onclick="novoRegistro()" data-loading-text="San..." data-toggle="tooltip" data-placement="top" title="Tooltip on top">  <span class="glyphicon glyphicon-file"></span>    
			  Novo
			</button>
			
			<div id="salvar" class="btn-group">
			  <button class="btn btn-success" data-loading-text="Salvando...">  <span class="glyphicon glyphicon-floppy-disk"></span>
				Salvar
			  </button>
					
			  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
			  </button>
					  
			  <ul class="dropdown-menu">
				<li>
				  <a href="#">Salvar e Fechar</a>
				</li>
			  </ul>
			</div>
								  
			<button id="editar" type="button" id="btn-editar" data-toggle="tooltip" data-placement="bottom" title="Editar esse cadastro" class="btn btn-default">
			  <span class="glyphicon glyphicon-wrench"></span>
				Editar
			</button>
				   
			<button id="limpar" onclick="limparInsercao()" class="btn btn-primary">  <span class="glyphicon glyphicon-erase"></span>
			  Limpar
			</button>

			<button id="remover" class="btn btn-danger">  <span class="glyphicon glyphicon-floppy-remove">  </span>
			  Remover
			</button>
			
			<button id="cancelar" onclick="cancelarInsercao()" class="btn btn-danger">  <span class="glyphicon glyphicon-floppy-remove">  </span>
			  Cancelar
			</button>
			
			<button id="localizar" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
			  Localizar
			</button>
			
			
		  </div> <!-- end navbar - left-->
		  <div class="navbar-right">
			<form class="navbar-form navbar-left ng-pristine ng-valid" accesskey="27">
			  <div class="form-group">
				<button type="button" class="btn btn-default">
				  <span class="glyphicon glyphicon-menu-left"></span>
				</button>
				
				<input name="cont-registro" readonly="readonly" class="form-control ipt-pp" size="3" value="0" type="text">
				
				<button type="button" class="btn btn-default">
				  <span class="glyphicon glyphicon-menu-right"></span>
				</button>
			  </div>
			</form>
		  </div><!-- end navbar - right -->
		</div> <!-- end navbar -->


		<div class="jumbotron">
			<form class="">
				<div class="row">
					<div class="col-lg-2">
						<div class="form-group input-group-sm">
							<label for="=eventDate">Data</label>
							<input class="form-control" id="eventDate" name="eventDate" placeholder="" type="text" >
						</div>
					
					</div>

					<div class="col-lg-2">
						<div class="form-group input-group-sm">
							<label for="=eventTime">Hora</label>
							<input class="form-control" id="eventTime" name="eventTime" placeholder="" type="text" >
						</div>
					
					</div>

	<!--				<div class="col-lg-2">
						<div class="form-group input-group-sm">
							<label for="=cep">C E P</label>
							<input onblur="buscaCEP()" class="form-control" id="cep" name="cep" placeholder="" type="number" alt="Somente número">
						</div>
					</div> -->
				</div>
				<div class="row">  
				<!--
					<div class="col-lg-2">
						<div class="form-group input-group-sm">
							<label for="log">Log</label>
							<input class="form-control" id="log" name="log" placeholder="" type="text" title="Tipo de logradouro">
						</div>
					</div>

					<div class="col-lg-3">
						<div class="form-group input-group-sm">
							<label for="endereco">Endere&ccedil;o</label>
							<input class="form-control ng-pristine ng-untouched ng-valid" id="endereco" name="endereco" placeholder="" type="text">
						</div>
					</div>
				  
				  -->
					<div class="col-lg-3">
						<div class="form-group input-group-sm">
							<label for="bairro">Bairro</label>
							<input class="form-control ng-pristine ng-untouched ng-valid" id="bairro" name="bairro" placeholder="" type="text">
						</div>
					</div>
				  
					<div class="col-lg-3">
						<div class="form-group input-group-sm">
							<label for="cidade">Cidade</label>
							<input type="text" class="form-control" id="cidade" name="cidade" value="Belo Horizonte" readonly="readonly" placeholder="">
						</div>
					</div>
					
					<div class="col-lg-5">
						<div class="form-group input-group-sm">
							<label for="regional">Regional</label>
							<select class="form-control" id="regional">
								<option></option>
								<option value="Barreiro">Barreiro</option>
								<option value="Nordeste">Nordeste</option>
								<option value="Noroeste">Noroeste</option>
								<option value="Pampulha">Pampulha</option>
								<option value="Centro-sul">Centro-sul</option>
								<option value="Leste">Leste</option>
								<option value="Oeste">Oeste</option>
								<option value="Venda">Venda Nova</option>
								<option value="Norte">Norte</option>
								<option value="RMBH">RMBH</option>
							</select>
						</div>
					</div>

				</div><!-- /.row -->
			</form>
		</div>
	  
	</div>


</div>

<script>

$(function () {
	$('[data-toggle="tooltip"]').tooltip();
} );

	$('#eventTime').timepicker();

    $('#eventDate').datepicker({
        format: "@",
	    maxViewMode: 2,
	    todayBtn: "linked",
	    language: "pt-BR",
	    daysOfWeekDisabled: "0",
	    daysOfWeekHighlighted: "0",
	    autoclose: true,
	    todayHighlight: true,
	    toggleActive: true
	    });

	function padrao(){
		$('input').attr("disabled","disabled");
		$('select').attr("disabled","disabled");
		$('#novo').css("display","inline-block");
		$('#salvar').css("display","none");
		$('#editar').css("display","none");
		$('#remover').css("display","none");
		$('#cancelar').css("display","none");
		$('#limpar').css("display","none");
	}
	
	function novoRegistro(){
		$('input').removeAttr("disabled");
		$('select').removeAttr("disabled");
		$('#novo').css("display","none");
		$('#salvar').css("display","inline-block");
		$('#editar').css("display","none");
		$('#remover').css("display","none");
		$('#cancelar').css("display","inline-block");
		$('#limpar').css("display","inline-block");
	}
	
	function limpaCampos(){
		$('input').val('');
		$("#cidade").val('Belo Horizonte')
		
	}
	
	function limparInsercao(){
		var pergunta = confirm("Limpar todo o formulario?");
			if(pergunta){
				limpaCampos();
				$('#eventDate').focus();
			}
	}
	
	function cancelarInsercao(){
			var pergunta = confirm("Deseja realmente cancelar?");
			if(pergunta){
				limpaCampos();
				padrao();
			}
	
	}


	$("#salvar").click(function(){
		var eventDate 	= $("#eventDate").val();
		var eventTime 	= $("#eventTime").val();
		var logradouro 	= $("#log").val();
		var endereco 	= $("#endereco").val();
		var bairro 		= $("#bairro").val();
		var cidade 		= $("#cidade").val();
		var regional 	= $("#regional").val();

		
		var eventDateStamp = new Date(eventDate + ' ' + eventTime).getTime();
		
		
		
		if(eventDate == "" || bairro == "" || regional == "" || eventTime == ""){
			alert('Os campos datam, bairro e regional são dados obrigatorios');
			$('#eventDate').focus();
		}
		else{
			 var $btn = $('#salvar').button('loading');
			
			$.post("//system.hol.es/GDV/api/insertData.php",
				{
				  dat: eventDateStamp,
				  log: logradouro,
				  end: endereco,
				  bai: bairro,
				  cid: cidade,
				  reg: regional
				},
				function(data, status){
					alert("data: " + data);
					if(status == 'success'){
						limpaCampos();
					}
				});
			
			 $btn.button('reset');
		}
		
		
	})
	
	padrao();
	


</script>
