<?php
if (isset($_POST["cursos"])){
	if ($_POST['cursos'] == 'php'){
		echo 'voce selecionou php'; 
	} elseif ($_POST['cursos'] == 'css'){
		echo 'voce selecionou css'; 
	} 
}