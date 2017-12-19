<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div id="tela" class="panel panel-default" ng-app>
  
  <div class="panel-heading">
    Gerar chave de acesso

	<div id="mensagem" style="float: right;">
				
	</div>
  </div> 
  
	<div class="panel-body">
	<form method="post" action="?id=1">
     		
            <select data-mini="true" data-inline="true" name="cMod" required >
            	<option value="55">Nota Fiscal Eletr&ocirc;nica</option>
                <option value="56">Nota Fiscal de Servi&ccedil;o Eletr&ocirc;nica</option>
                <option value="57">Conhecimento de Transporte Eletr&ocirc;nico</option>
                <option value="58">Manifesto Eletr&ocirc;nico de Documento</option>
                <option value="59">Cupom Fiscal Eletr&ocirc;nico</option>
                <option value="65">Nota Fiscal de Consumidor Eletr&ocirc;nico</option>
            </select>
            
            <select data-mini="true" data-inline="true" name="cAmb" required >
            	<option value="1">Produção</option>
                <option value="2">Homologação</option>
            </select>
            
            <select data-mini="true" data-inline="true" name="cUF" required >
            
            	<option value="12">Acre</option>
                <option value="27">Alagoas</option>
                <option value="16">Amapá</option>
                <option value="13">Amazonas</option>
                <option value="29">Bahia</option>
                <option value="23">Ceará</option>
                <option value="53">Brasília</option>
                <option value="32">Espírito Santo</option>
                <option value="52">Goiás</option>
                <option value="21">Maranhão</option>
                <option value="51">Mato Grosso</option>
                <option value="50">Mato Grosso do Sul</option>
                <option value="31" selected >Minas Gerais</option>
                <option value="15">Pará</option>
                <option value="25">Paraíba</option>
                <option value="26">Pernambuco</option>
                <option value="22">Piauí</option>
                <option value="24">Rio Grande do Norte</option>
                <option value="43">Rio Grando do Sul</option>
                <option value="33">Rio de Janeiro</option>
                <option value="11">Rondônia</option>
                <option value="14">Roraima</option>
                <option value="42">Santa Catarina</option>
                <option value="35">São Paulo</option>
                <option value="28">Sergipe</option>
                <option value="17">Tocantins</option>
            </select>
			
			 <select data-mini="true" data-inline="true" name="mes" required>
            	
            	<option value="01" <?php if(date('m') == 01){ echo "selected='selected'";} ?>>Jan</option>
                <option value="02" <?php if(date('m') == 02){ echo "selected='selected'";} ?>>Fev</option>
                <option value="03" <?php if(date('m') == 03){ echo "selected='selected'";} ?>>Mar</option>
                <option value="04" <?php if(date('m') == 04){ echo "selected='selected'";} ?>>Abr</option>
                <option value="05" <?php if(date('m') == 05){ echo "selected='selected'";} ?>>Mai</option>
                <option value="06" <?php if(date('m') == 06){ echo "selected='selected'";} ?>>Jun</option>
                <option value="07" <?php if(date('m') == 07){ echo "selected='selected'";} ?>>Jul</option>
                <option value="08" <?php if(date('m') == '08'){ echo "selected='selected'";} ?>>Ago</option>
                <option value="09" <?php if(date('m') == '09'){ echo "selected='selected'";} ?>>Set</option>
                <option value="10" <?php if(date('m') == 10){ echo "selected='selected'";} ?>>Out</option>
                <option value="11" <?php if(date('m') == 11){ echo "selected='selected'";} ?>>Nov</option>
                <option value="12" <?php if(date('m') == 12){ echo "selected='selected'";} ?>>Dez</option>
            </select>
            <select data-mini="true" name="ano" data-inline="true" required>
           		 
            	<option value="05" >2005</option>
                <option value="06">2006</option>
                <option value="07">2007</option>
                <option value="08">2008</option>
                <option value="09">2009</option>
                <option value="10">2010</option>
                <option value="11">2011</option>
                <option value="12">2012</option>
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15" <?php if(date('Y') == 2015){ echo "selected='selected'";} ?>>2015</option>
                <option value="16"<?php if(date('Y') == 2016){ echo "selected='selected'";} ?>>2016</option>
                <option value="17"<?php if(date('Y') == 2017){ echo "selected='selected'";} ?>>2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                
            </select>
			<select data-mini="true" name="fcon" data-inline="true" required>
            	<option value="1">Homologação</option>
              	<option value="1" selected="selected">Emissão normal (não em contingência)</option>
                <option value="2">Contingência FS-IA</option>
                <option value="3">Contingência SCAN</option>
                <option value="4">Contingência DPEC</option>
                <option value="5">Contingência FS-DA</option>
                <option value="6">Contingência SVC-AN</option>
                <option value="7">Contingência SVC-RS</option>
                <option value="9">Contingência off-line da NFC-e</option>
               
			   
              </select>
			  
			<div data-role="fieldcontain">
				<label>CNPJ</label>
				<input data-mini="true" value="<?php echo $_POST['cnpj']; ?>" type="number" maxlength="number" min="9" placeholder="CPF / CNPJ" name="cnpj" aria-autocomplete="list" maxlength="18"  required/>
			</div>
			<div data-role="fieldcontain">
				<label>Numero NFE</label>
				<input data-mini="true" value="<?php echo $_POST['nfe'] ?>" data-inline="true" size="9" maxlength="9" type="number" name="nfe"  maxlength="9" required placeholder="Nº NFE" />
			</div>  
			<div data-role="fieldcontain">
				<label>Serie</label>
				<input data-mini="true" type="number" placeholder="Série" name="serie" aria-autocomplete="list" maxlength="18"  required/>
			</div>
			
			<div data-mini="true" data-role="fieldcontain" data-inline="true" align="center" >
			<input  data-inline="true" data-mini="true" type="submit" name="GerarCNFe" value="GERAR" />
            <input  data-inline="true" data-mini="true" type="reset" value="Limpar" />
            </div>
            </form>
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
