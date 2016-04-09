<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	

<table width="803" class="table" id="myTable">
	<thead>
	<tr>
		<th width="80">ID</th>
		<th width="110">Status</th>
		<th width="82">Sub Item</th>
		<th width="113"> EAN</th>
		<th width="83">Referencia</th>
		<th width="113">Descrição </th>
		<th width="113">Fornecedor</th>
		<th width="120">CNPJ Fornecedor</th>
		<th width="80">Visualizar</th>
		<th width="80">Editar</th>
		<th width="80">Apagar</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>1</td>
		<td><font color=#00FF00>Atualizado</td></font>
		<td>6520</td>
		<td>9517</td>
		<td>09517</td>
		<td>Mulher 15 DE NOVEMBRO KG MINAS</td>
		<td>15 DE NOVEMBRO</td>
		<td></td>        
		<td> 
			<a href='administrativo.php?link=5&id=1'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
		</td>
		<td>
			<a href='administrativo.php?link=4&id=1'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
		</td>
		
		<td>
			<a href='processa/proc_apagar_produtos.php?id=1'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</td>
	</tr>
	<?php foreach(array(1,2,3,4) as $row){
		echo "
		
		<tr>
		<td>1</td>
		<td><font color=#00FF00>Atualizado</td></font>
		<td>6520</td>
		<td>9517</td>
		<td>09517</td>
		<td>QUEIJO 15 DE NOVEMBRO KG MINAS</td>
		<td>15 DE NOVEMBRO</td>
		<td></td>        
		<td> 
			<a href='administrativo.php?link=5&id=1'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
		</td>
		<td>
			<a href='administrativo.php?link=4&id=1'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
		</td>
		
		<td>
			<a href='processa/proc_apagar_produtos.php?id=1'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</td>
	</tr>
	";
		
		
	}
	?>
	
	
</tbody>
</table>
	
	
	<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.css"/> 
	<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.js"></script>
	  
	<script type="text/javascript">
		$(document).ready(function(){
			$('#myTable').DataTable();
		});
	</script>
	  
</body>
</html>