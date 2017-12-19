<div id="tela" class="panel panel-default" ng-app>
  
  <div class="panel-heading">
    Arquivos
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
				
				
				<button id="localizar" class="btn btn-default" onclick="localizar()"><span class="glyphicon glyphicon-search"></span>
				  Localizar
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
					Básico
				  </a>
				</li>
				
				<li role="presentation">
				  <a href="#programa" aria-controls="programa" role="tab" data-toggle="tab" title="Programas relacionados ao arquivo">
					Programas
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
									<input type="text" onblur="consultaArquivo()" class="form-control" placeholder="Nome do arquivo" id="nome">                
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
		  
		  
					<datalist id="modelos">
						<option value=""></option>
					</datalist>
				</div><!-- end primeira tab -->
				<div role="tabpanel" class="tab-pane fade" id="programa">programa</div>
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
