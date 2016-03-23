<?php

header ('Content-type: application/json; charset=UTF-8');

try {
	
	$nome = @$_POST['nome'];
	
	
	// Exemplo de validações...
	if (!isset($_POST['nome']) || $_POST['nome'] == ""){
		//Caso validação esteja errada joga no Trow
		throw new Exception("Informe uma mensagem.");
	}
	
	if (!isset($_POST['email']) || $_POST['email'] == "" ){
		throw new Exception("Informe uma mensagem.");
	}
	
	
	
	//Fim das validações
	
	
	if( $_SERVER['SERVER_NAME'] == 'localhost'){
		//Insert dos dados
		$server = "localhost"; 
		$user = "root"; 
		$senha = ""; 
		$base = "lucasviadao"; 
		$conexao = mysqli_connect($server, $user, $senha, $base);
	} else {
		die('fixit');
		
		//Insert dos dados
		$server = "localhost"; 
		$user = ""; 
		$senha = ""; 
		$base = ""; 
		$conexao = mysqli_connect($server, $user, $senha, $base);
		
	}

	mysqli_select_db($conexao, $base); 

	if ($nome == '') { 
		$sql = "SELECT * FROM Contato"; 
	} else { 
		$sql = "SELECT * FROM Contato WHERE nome like '%{$nome}'"; 
	} 
	
	$result = mysqli_query($conexao, $sql); 
	$cont = mysqli_affected_rows($conexao); 

	// Verifica se a consulta retornou linhas 

	if ($cont > 0) { 
		$ret = array();
		while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
			$ret[] = $linha;
		}
	}
	
	print json_encode(array('status' => true,'dados' => $ret));
	
	die();
	
} catch(Exception $ex){
	print json_encode(
		array(
			 'status' 	=> false
			,'msg' 		=> $ex->getMessage()
		));
	die();
}


/*

//header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response


//print_r($_GET);die();
//print_r($_POST);die();

//$_GET = $_POST;


if (isset($_GET["txtnome"])) { 


$nome = $_GET["txtnome"];

//echo $nome;die();

// Conexao com o banco de dados 

$server = "localhost"; 
$user = "newle062_root"; 
$senha = "camelo666"; 
$base = "newle062_agenda"; 
$conexao = mysqli_connect($server, $user, $senha, $base);

mysqli_select_db($conexao, $base); 

// Verifica se a variável está vazia 

if (empty($nome)) { 

	$sql = "SELECT * FROM Contato"; 
} 	else { 

		$nome .= "%"; 
		$sql = "SELECT * FROM Contato WHERE nome like '$nome'"; 

	} 

	//sleep(1); 

	$result = mysqli_query($conexao, $sql); 
	$cont = mysqli_affected_rows($conexao); 

// Verifica se a consulta retornou linhas 

if ($cont > 0) { 

// Atribui o código HTML para montar uma tabela 

	$tabela = "<table border='1'> <thead> <tr> <th>NOME</th> <th>TELEFONE</th> <th>CELULAR</th> <th>EMAIL</th> </tr> </thead> <tbody> <tr>"; $return = "$tabela"; 

	// Captura os dados da consulta e inseri na tabela HTML 

	while ($linha = mysqli_fetch_array($result)) { 

		$return.= "<td>" . utf8_encode($linha["NOME"]) . "</td>"; $return.= "<td>" . utf8_encode($linha["FONE"]) . "</td>"; 
		$return.= "<td>" . utf8_encode($linha["CELULAR"]) . "</td>"; 
		$return.= "<td>" . utf8_encode($linha["EMAIL"]) . "</td>"; 
		$return.= "</tr>"; } 

		echo $return.="</tbody></table>"; 
	} else { 

	// Se a consulta não retornar nenhum valor, exibi mensagem para o usuário 

		echo "Não foram encontrados registros!"; 

	} 

}
*/