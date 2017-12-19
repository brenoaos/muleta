<?php
$exibedetalhes = false;
$imgcheck = '<img src="check.png" width="15" height="15" alt="check" style="margin:3px"></br>';
$imgdel = '<img src="del.png" width="15" height="15" alt="check" style="margin:3px"></br>';

if($_POST['validar']){	
	//tratamento de caracteres	
	$chAcesso = $_POST['chaveacesso'];
	$caracter = array(",",".","/","-","+","]","?",")","("," ");
	$chaveAcesso = str_replace($caracter,"",$chAcesso);
	
	if(strlen($chaveAcesso) <> 44){
	$msg = "A chave de acesso deve conter 44 posições";	
	}
	else{
		
	$dado = str_split($chaveAcesso);
	
	$f1 = $dado[42] * 2;
	$f2 = $dado[41] * 3;
	$f3 = $dado[40] * 4;
	$f4 = $dado[39] * 5;
	$f5 = $dado[38] * 6;
	$f6 = $dado[37] * 7;
	$f7 = $dado[36] * 8;
	$f8 = $dado[35] * 9;
	$f9 = $dado[34] * 2;
	$f10 = $dado[33] * 3;
	$f11 = $dado[32] * 4;
	$f12 = $dado[31] * 5;
	$f13 = $dado[30] * 6;
	$f14 = $dado[29] * 7;
	$f15 = $dado[28] * 8;
	$f16 = $dado[27] * 9;
	$f17 = $dado[26] * 2;
	$f18 = $dado[25] * 3;
	$f19 = $dado[24] * 4;
	$f20 = $dado[23] * 5;
	$f21 = $dado[22] * 6;
	$f22 = $dado[21] * 7;
	$f23 = $dado[20] * 8;
	$f24 = $dado[19] * 9;
	$f25 = $dado[18] * 2;
	$f26 = $dado[17] * 3;
	$f27 = $dado[16] * 4;
	$f28 = $dado[15] * 5;
	$f29 = $dado[14] * 6;
	$f30 = $dado[13] * 7;
	$f31 = $dado[12] * 8;
	$f32 = $dado[11] * 9;
	$f33 = $dado[10] * 2;
	$f34 = $dado[9] * 3;
	$f35 = $dado[8] * 4;
	$f36 = $dado[7] * 5;
	$f37 = $dado[6] * 6;
	$f38 = $dado[5] * 7;
	$f39 = $dado[4] * 8;
	$f40 = $dado[3] * 9;
	$f41 = $dado[2] * 2;
	$f42 = $dado[1] * 3;
	$f43 = $dado[0] * 4;
	
	$somaDado = $f1+$f2+$f3+$f4+$f5+$f6+$f7+$f8+$f9+$f10+$f11+$f12+$f13+$f14+$f15+$f16+$f17+$f18+$f19+$f20+$f21+$f22+$f23+$f24+$f25+$f26+$f27+$f28+$f29+$f30+$f31+$f32+$f33+$f34+$f35+$f36+$f37+$f38+$f39+$f40+$f41+$f42+$f43;
	
	$modDV = $somaDado % 11;
	
	if($modDV == 1 or $modDV == 0){
		$DV = 0;
	}else{
		
		$DV = 11 - $modDV;
	}
	
	
	if($DV == $dado[43])
	{
	$msg = "Esta chave é valida".$imgcheck;
	$chAcesso = chunk_split($chaveAcesso, 4, " ");
	$referenciaA	= $dado[2].$dado[3];
	$referenciaM	= $dado[4].$dado[5];
	$modelo		= $dado[20].$dado[21];
	$serie		= $dado[22].$dado[23].$dado[24];
	$nfe		= chunk_split($dado[25].$dado[26].$dado[27].$dado[28].$dado[29].$dado[30].$dado[31].$dado[32].$dado[33],3," ");
	$nfeserie	= $nfe . " " . $serie;
	$cnpj		= $dado[6].$dado[7].".".$dado[8].$dado[9].$dado[10].".".$dado[11].$dado[12].$dado[13]."/".$dado[14].$dado[15].$dado[16].$dado[17]."-".$dado[18].$dado[19];
	
	// validação
	
	$x = $cnpj;
	$r = array("/","*","-","+",".",")","(","=",",","?","!","@","´"," ");
	$c = str_replace($r,"",$x);
	
	
	$pj = str_split($c);
		
		$f1 = $pj[11] * 2;		$f2 = $pj[10] * 3;		$f3 = $pj[9] * 4;		$f4 = $pj[8] * 5;		$f5 = $pj[7] * 6;		$f6 = $pj[6] * 7;		$f7 = $pj[5] * 8;		$f8 = $pj[4] * 9;		$f9 = $pj[3] * 2;		$f10 = $pj[2] * 3;		$f11 = $pj[1] * 4;		$f12 = $pj[0] * 5;
		$sf = $f1 + $f2 + $f3 + $f4 + $f5 + $f6 + $f7 + $f8 + $f9 + $f10 + $f11 + $f12 ;
		
		if(($sf % 11) < 2 ){		
			$DVP = 0;
		}
		else{
			$DVP = (11-($sf % 11));
		}
		$fx = $DVP * 	 2;		$f1 = $pj[11] *  3;		$f2 = $pj[10] * 4;		$f3 = $pj[9] *  5;		$f4 = $pj[8] *  6;		$f5 = $pj[7] *  7;		$f6 = $pj[6] *  8;		$f7 = $pj[5] *  9;		$f8 = $pj[4] *  2;		$f9 = $pj[3] *   3;		$f10 = $pj[2] *  4;		$f11 = $pj[1] *  5;		$f12 = $pj[0] * 6;
		$sf = $f1 + $f2 + $f3 + $f4 + $f5 + $f6 + $f7 + $f8 + $f9 + $f10 + $f11 + $f12 + $fx ;
		
		if(($sf % 11) < 2 ){
			$DVS = 0;
		}
		else{
			$DVS = (11-($sf % 11));
		}
	
		if($DVP.$DVS === $pj[12].$pj[13] ){
			
			$vcnpj =  "<br>Esse CNPJ é válido" . $imgcheck;

		}
		else{
			$vcnpj = "<br>Esse CNPJ é inválido" . $imgdel;
		}
	
	switch($referenciaM){

		case 01 : $mes = "Janeiro";break;
		case 02 : $mes = "Fevereiro";break;
		case 03 : $mes = "Março";break;
		case 04 : $mes = "Abril";break;
		case 05 : $mes = "Maio";break;
		case 06 : $mes = "Junho";break;
		case 07 : $mes = "Julho";break;
		case 8 : $mes = "Agosto";break;
		case 9 : $mes = "Setembro";break;
		case 10 : $mes = "Outubro";break;
		case 11 : $mes = "Novembro";break;
		case 12 : $mes = "Dezembro";break;

	}

	if($referenciaA > 50){
		$ano = "19".$referenciaA;
	}
	else{
		$ano = "20".$referenciaA;
	}	
	
	switch($dado[34]){
	case 1: $tpemissao = 'Emissão normal (não em contingência)'; break;	
	case 2: $tpemissao = 'Contingência FS-IA'; break;	
	case 3: $tpemissao = 'Contingência SCAN'; break;	
	case 4: $tpemissao = 'Contingência DPEC'; break;	
	case 5: $tpemissao = 'Contingência FS-DA'; break;	
	case 6: $tpemissao = 'Contingência SVC-AN'; break;	
	case 7: $tpemissao = 'Contingência SVC-RS'; break;	
	case 9: $tpemissao = 'Contingência off-line da NFC-e'; break;	
	}
	
	
	switch($dado[0].$dado[1]){
				case 12: $estado = 'Acre'; break;
                case 27: $estado = 'Alagoas'; break;
                case 16: $estado = 'Amapá'; break;
                case 13: $estado = 'Amazonas'; break;
                case 29: $estado = 'Bahia'; break;
                case 23: $estado = 'Ceará'; break;
                case 53: $estado = 'Brasília'; break;
                case 32: $estado = 'Espírito Santo'; break;
                case 52: $estado = 'Goiás'; break;
                case 21: $estado = 'Maranhão'; break;
                case 51: $estado = 'Mato Grosso'; break;
                case 50: $estado = 'Mato Grosso do Sul'; break;
                case 31: $estado = 'Minas Gerais'; break;
                case 15: $estado = 'Pará'; break;
                case 25: $estado = 'Paraíba'; break;
                case 26: $estado = 'Pernambuco'; break;
                case 22: $estado = 'Piauí'; break;
                case 24: $estado = 'Rio Grande do Norte'; break;
                case 43: $estado = 'Rio Grando do Sul'; break;
                case 33: $estado = 'Rio de Janeiro'; break;
                case 11: $estado = 'Rondônia'; break;
                case 14: $estado = 'Roraima'; break;
                case 42: $estado = 'Santa Catarina'; break;
                case 35: $estado = 'São Paulo'; break;
                case 28: $estado = 'Sergipe'; break;
                case 17: $estado = 'Tocantins'; break;		
	}
	
	
	$exibedetalhes = true;
	
	}else{
		
		$msg = "Chave de acesso invalida" . $imgdel;
	}
	
		
	}


	/*//tratativa dos dados recebidos
	$caracter = array(",",".","/","-","+","]","?",")","(");
	$cabeca = str_replace($caracter,"", $_POST['cUF'] . $_POST['ano'] . $_POST['mes']);
	$cnpj = str_replace($caracter,"",$_POST['cnpj']);
	$serie = str_replace($caracter,"",$_POST['serie']);
	$nfe = str_replace($caracter,"",$_POST['nfe']);
	$fcon = str_replace($caracter,"",$_POST['fcon']);

	while(strlen($cnpj) <> 14){
	$cnpj = "0".$cnpj;
	}
	
	while(strlen($serie) <> 3){
	$serie = "0".$serie;
	}
	
	while(strlen($nfe) <> 9){
	$nfe = "0".$nfe;
	}
	
	$chaveAcesso = $cabeca.$cnpj."55".$serie.$nfe.$fcon.rand(99999999, 12345678);
	
	$dado = str_split($chaveAcesso);
	
	$f1 = $dado[42] * 2;
	$f2 = $dado[41] * 3;
	$f3 = $dado[40] * 4;
	$f4 = $dado[39] * 5;
	$f5 = $dado[38] * 6;
	$f6 = $dado[37] * 7;
	$f7 = $dado[36] * 8;
	$f8 = $dado[35] * 9;
	$f9 = $dado[34] * 2;
	$f10 = $dado[33] * 3;
	$f11 = $dado[32] * 4;
	$f12 = $dado[31] * 5;
	$f13 = $dado[30] * 6;
	$f14 = $dado[29] * 7;
	$f15 = $dado[28] * 8;
	$f16 = $dado[27] * 9;
	$f17 = $dado[26] * 2;
	$f18 = $dado[25] * 3;
	$f19 = $dado[24] * 4;
	$f20 = $dado[23] * 5;
	$f21 = $dado[22] * 6;
	$f22 = $dado[21] * 7;
	$f23 = $dado[20] * 8;
	$f24 = $dado[19] * 9;
	$f25 = $dado[18] * 2;
	$f26 = $dado[17] * 3;
	$f27 = $dado[16] * 4;
	$f28 = $dado[15] * 5;
	$f29 = $dado[14] * 6;
	$f30 = $dado[13] * 7;
	$f31 = $dado[12] * 8;
	$f32 = $dado[11] * 9;
	$f33 = $dado[10] * 2;
	$f34 = $dado[9] * 3;
	$f35 = $dado[8] * 4;
	$f36 = $dado[7] * 5;
	$f37 = $dado[6] * 6;
	$f38 = $dado[5] * 7;
	$f39 = $dado[4] * 8;
	$f40 = $dado[3] * 9;
	$f41 = $dado[2] * 2;
	$f42 = $dado[1] * 3;
	$f43 = $dado[0] * 4;
	
	$somaDado = $f1+$f2+$f3+$f4+$f5+$f6+$f7+$f8+$f9+$f10+$f11+$f12+$f13+$f14+$f15+$f16+$f17+$f18+$f19+$f20+$f21+$f22+$f23+$f24+$f25+$f26+$f27+$f28+$f29+$f30+$f31+$f32+$f33+$f34+$f35+$f36+$f37+$f38+$f39+$f40+$f41+$f42+$f43;
	
	$modDV = $somaDado % 11;
	
	if($modDV == 1 or $modDV == 0){
		$DV = 0;
	}else{
		
		$DV = 11 - $modDV;
	}
	
	echo 
	'<div align="center"><input type="text" id="chave" name="chave" value="'.$chaveAcesso.$DV.'" style="
    width: 600px;
    height: 35px;
    border: 2px #000 solid;
    border-radius: 10px;
    color: blue;
    font-size: x-large;
"><br><em>Pressione <i>ctrl-c</i></div>';
	
	*/
}
else{

	echo "Insira as informações para gerar uma Chave de acesso de NFE.";	
	
}
?>


<script>
$(document).ready(function(e) {
    $("#chave").select();
});


</script>


        <form method="post" action="">        
        
        	<input type="text" name="chaveacesso" />
            <input type="submit" value="validar" name="validar" />
        
        </form>

        <?php
		
		if($msg){
		 echo $msg;	
		}
		
		if($exibedetalhes){
echo "<h3>";
	switch($modelo)
{
	case 55 : echo $modelo." - Nota Fiscal Eletr&ocirc;nica";	break;
	case 56 : echo $modelo." - Nota Fiscal de Servi&ccedil;o Eletr&ocirc;nica";	break;
	case 57 : echo $modelo." - Conhecimento de Transporte Eletr&ocirc;nico";	break;
	case 58 : echo $modelo." - Manifesto Eletr&ocirc;nico de Documento";	break;
	case 59 : echo $modelo." - Cupom Fiscal Eletr&ocirc;nico";	break;
	case 65 : echo $modelo." - Nota Fiscal de Consumidor Eletr&ocirc;nico";	break;
	default	: echo "Sucesso!! MODELO(".$modelo.")";

}	
echo "</h3>";
        echo'
		<p>'.$chAcesso.'</p><!-- chave de acesso conforme a receita -->
        <p>NFe:<b> '.$nfe.'</b></p>
		<p>Serie: <b>'.$serie.'</b></p>
        <p>CNPJ Emit: <b>'.$cnpj.$vcnpj.'</b></p>
		<p>Estado: <b>'.$estado.'</b></p>
        <p>Tipo Emis: <b>'.$tpemissao.'</b></p>
		<p><b>Emitida em '.$mes.' de '.$ano.'.</b>
		<a target="_blank" href="https://www.fsist.com.br/baixarxml.aspx?m=WEB&UsuarioID=954437595&cte=0&pub=11&com=434a55544e37&t=visualizar&chave='.$chAcesso.'">Ver Nota</a>
	';
		}
		
		?>
       <!--<form method="post" action="">
        <div>
        	<label>Estado:</label>	<br>
            <select data-inline="true" name="cUF" required >
            
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
            </div>
            <br>
            <div>
        	<label>Referencia(MMAA):</label><br>	
            
            <select data-inline="true" name="mes" required>
            	
            	<option value="01">Jan</option>
                <option value="02">Fev</option>
                <option value="03">Mar</option>
                <option value="04">Abr</option>
                <option value="05" selected>Mai</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Ago</option>
                <option value="09">Set</option>
                <option value="10">Out</option>
                <option value="11">Nov</option>
                <option value="12">Dez</option>
            </select>
            <select name="ano" required>
           		 
            	<option value="05">2005</option>
                <option value="06">2006</option>
                <option value="07">2007</option>
                <option value="08">2008</option>
                <option value="09">2009</option>
                <option value="10">2010</option>
                <option value="11">2011</option>
                <option value="12">2012</option>
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15" selected >2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                
            </select>
            </div>
            <br>
            <div>
            <label>CPF ou CNPJ</label><br />
            <input type="text" name="cnpj" aria-autocomplete="list" maxlength="18" required/>
            </div>
            <br />
            <div>
            <label>NFe e Serie</label><br />
            <input type="text" name="nfe"  maxlength="9" required />
             <input type="text" name="serie" aria-autocomplete="list"  maxlength="3" required/>
             
              </div>
              <br />
              <div>
              <label>Forma Emissão:</label><br />
              <select name="fcon" required>
              	<option value="1" selected="selected">Emissão normal (não em contingência)</option>
                <option value="2">Contingência FS-IA</option>
                <option value="3">Contingência SCAN</option>
                <option value="4">Contingência DPEC</option>
                <option value="5">Contingência FS-DA</option>
                <option value="6">Contingência SVC-AN</option>
                <option value="7">Contingência SVC-RS</option>
                <option value="9">Contingência off-line da NFC-e</option>
               
              </select>
            </div>
            <br />
            <input type="reset" value="Limpar" />
            <input type="submit" name="GerarCNFe" value="GERAR" />-->
