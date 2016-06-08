<?php

//Normalmente a resposta do banco é um array de arrays associativos.
$linguagens = array(
	array(
		 'id'		=> 1
		,'nome'		=> 'PHP'
	)
	,array(
		 'id'		=> 2
		,'nome'		=> 'JavaScript'
	)
	,array(
		 'id'		=> 3
		,'nome'		=> 'C'
	)
	,array(
		 'id'		=> 4
		,'nome'		=> 'C++'
	)
);

/*
foreach($linguagens as $linguagem){
	echo "<option value='" . $linguagem['id'] . "'>" . $linguagem['nome'] . "</option>";
}
Já que você quer JSON, utilize JSON....
*/

//Assim o header HTTP já vai como UTF-8 e é informado que é um JSON. (JSON é necessariamente coding UTF-8, caso esteja trabalhando com ANSI, nada quem um utf8_encode não resolva...
header('Content-type: application/json; charset=utf-8');

echo json_encode($linguagens);

