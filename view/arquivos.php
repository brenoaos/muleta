<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div id="tela" class="panel panel-default" ng-app>
  
  <div class="panel-heading">
    Arquivos

	<div id="mensagem" style="float: right;">
				
	</div>
  </div> 
  
	<div class="panel-body">
		<div class="navbar" id="buttonBar">
			<div style="padding: 5px;" class="navbar-left">
				<button id="novo" class="btn btn-primary" onclick="started()">  <span class="glyphicon glyphicon-file"></span>    
					Novo
				</button>
        
				<button id="salvar" class="btn btn-success" onclick="salvarArquivo()">  <span class="glyphicon glyphicon-floppy-disk"></span>
					Salvar
				</button>
                                              
				<button type="button" id="editar" data-toggle="tooltip" onclick="editarRegistro()" data-placement="botton" title="Editar esse cadastro" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span>
					Editar
				</button>
               
				<button id="limpar" class="btn btn-primary">  <span class="glyphicon glyphicon-erase"></span>
				  Limpar
				</button>

				<button id="apagar" class="btn btn-danger" >  <span class="glyphicon glyphicon-floppy-remove">  </span>
				  Remover
				</button>
				
				<button id="cancelar" class="btn btn-danger" onclick="started()" >  <span class="glyphicon glyphicon-floppy-remove">  </span>
				  Cancelar
				</button>
				
		
			</div> <!-- end navbar - left-->
      
			<div class="navbar-right">
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<button type="button" class="btn btn-default">
							<span class="glyphicon glyphicon-menu-left"></span>
						</button>
				
						<input type="text" name="cont-registro" id="cont-registro" readonly="readonly" class="form-control ipt-pp" size="3" value="0">
				
						<button type="button" class="btn btn-default">
							<span class="glyphicon glyphicon-menu-right"></span>
						</button>
					</div>
				</form>
			</div><!-- end navbar - right -->
		</div> <!-- end navbar -->
		<div class="jumbotron">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs nav-justified" role="tablist">
        
				<li role="presentation" class="active">
				  <a href="#basico" aria-controls="basico" role="tab" data-toggle="tab">
					Arquivos
				  </a>
				</li>
				
				<li role="presentation">
				  <a href="#localizar" aria-controls="localizar" role="tab" data-toggle="tab" title="Localizar programas relacionados ao arquivo">
					Localizar
				  </a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="basico">
          
					<form class="">

						<div class="row"><!-- Primeira linha -->
							<div class="col-lg-2">
								<div class="form-group input-group-sm">
									<label for="nome">Nome</label>
								<!--	<input type="text" onblur="consultaArquivo()" class="form-control" placeholder="Nome do arquivo" id="nome"> -->
									<input type="text" onkeypress="return enter(event,1)" title="Digite o nome do arquivo e pressione ENTER" class="form-control" placeholder="Nome do arquivo" id="nome">
									
								</div>
							</div>

							<div class="col-lg-2">
								<div class="form-group input-group-sm">
									<label for="=externo">Nome externo</label>
									<input type="text" class="form-control" id="externo" placeholder="Nome externo do arquivo">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="form-group input-group-sm">
									<label for="diretorio">Diretorio</label>
									<input type="text" class="form-control" id="diretorio" placeholder="Local do arquivo" >
								</div>
							</div>
							
						</div>
						<div class="row"><!-- segunda linha -->
							<div class="col-lg-12">
								<div class="form-group input-group-sm">
									<label for="descricao">Descriao</label>
									<textarea style="height: 10%;" class="form-control" rows="4" id="descricao" placeholder="Descrição do arquio"></textarea>
								</div>
							</div>

						</div><!-- /.row segunda linha-->
						

					</form>
		  
				</div><!-- end primeira tab -->
				
				<div role="tabpanel" class="tab-pane fade" id="localizar">
					
					<div class="row">
						<div class="col-lg-8">
							<div class="form-group input-group-sm">
								
								<label for="localiza"></label>
								
								<input type="text" class="form-control" id="localiza" onkeypress="return enter(event,2)" placeholder="Digite aqui o que procura">
							
							</div>
						</div>
					</div>
					
					
					<hr>
					
					<div class="row" id="resultLocaliza">
						<table id="tabela" class="table">
							<tbody>
								<td class="col-lg-1">#</td>
								<td class="col-lg-2">Nome</td>
								<td class="col-lg-2">Externo</td>
								<td class="col-lg-3">Caminho</td>
								<td class="col-lg-4">Descrição</td>
							</tbody>
							
						</table>
					</div>
				</div><!-- end segunda tab -->
				
				<div role="tabpanel" class="tab-pane fade" id="financeiro">Financeiro</div>
				<div role="tabpanel" class="tab-pane fade" id="compra">Compra</div>
				<div role="tabpanel" class="tab-pane fade" id="venda">Venda</div>
			</div>
		</div>  
	</div>
</div>

<div id="search" class="col-lg-12" hidden="hidden">
	<div class="panel-heading">
		Localizar
	</div> 
	
	<div id="row">
		<div class="col-lg-8">
			<div class="form-group input-group-sm">
				
				<label for="diretorio"></label>
				
				<input type="text" class="form-control" id="diretorio" placeholder="Digite aqui o que procura">
			
			</div>
		</div>
	</div>
	
</div>


<script src="js/arquivos.js"></script>
