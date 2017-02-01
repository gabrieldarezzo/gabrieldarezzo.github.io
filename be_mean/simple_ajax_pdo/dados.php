<?php

/*
CREATE database angulartest;
use angulartest;

CREATE table trabalhos(
	 id int(8) primary key auto_increment
	,nome varchar(50) not null
	,tipo_cadastro_id int(8) not null
);

INSERT INTO trabalhos (nome, tipo_cadastro_id) VALUES 
	 ('Programador', 1)
	,('Equipe de Programador', 2)
	
	,('Design', 1)
	,('Equipe de Design', 2)
	
	,('Marido de Aluguel/Severino', 1)
	,('Equipe de Manutenção', 2)
;
*/


header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');  
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');  
header('Access-Control-Allow-Headers: *');  
header('Access-Control-Max-Age: 86400');


$db = new PDO("mysql:host=localhost;dbname=angulartest", 'root', '');  
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$db->exec("set names utf8"); //Garante UTF em versão < 5.3

$stmt = $db->query("select * from trabalhos");
$trabalhos = $stmt->fetchAll();

print json_encode($trabalhos);
