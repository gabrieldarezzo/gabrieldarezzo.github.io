<?php


$retornoDoDb = array(
	array(
		 'id'		=> 1
		,'title'	=> 'Como virar desenvolvedor JavaScript'
		,'article'	=> '<h3>Para executar um Ajax é easy...</h3>Primeiro se precisa manjar de JS, tem um curso aqui: <a href="https://github.com/gabrieldarezzo/helpjs-ravi">JS-Curso</a>'
		,'link'		=> 'https://github.com/gabrieldarezzo/helpjs-ravi'
	)
	,array(
		 'id'		=> 2
		,'title'	=> 'Como executar um Ajax'
		,'article'	=> 'Caso você já conhece JS-Vanilla é só seguir esse passo a passo: <a href="https://github.com/gabrieldarezzo/desafiosInternos/tree/master/ajax">Guia definitivo AJAX</a>'
		,'link'		=> 'https://github.com/gabrieldarezzo/desafiosInternos/tree/master/ajax'		
	)
	,array(
		 'id'		=> 3
		,'title'	=> 'O que é um WebService'		
		,'article'	=> 'Web service é uma solução utilizada na integração de sistemas e na comunicação entre aplicações diferentes. Com esta tecnologia é possível que novas aplicações possam interagir com aquelas que já existem e que sistemas desenvolvidos em plataformas diferentes sejam compatíveis. Os Web services são componentes que permitem às aplicações enviar e receber dados em formato XML. Cada aplicação pode ter a sua própria "linguagem", que é traduzida para uma linguagem universal, um formato intermediário como XML, Json, CSV, etc.'
		,'link'		=> 'https://pt.wikipedia.org/wiki/Web_service'
	)
);


header('Content-Type: application/json; charset=utf-8');
print json_encode($retornoDoDb);