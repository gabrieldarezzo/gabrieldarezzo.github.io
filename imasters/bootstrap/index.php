<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="bootstrap.min.css" />
</head>
<body>
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">DataTables Advanced Tables</div>
					<!-- /.panel-heading -->

					<div class="panel-body">

						<div class="dataTable_wrapper">

							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">

								<thead>
									<tr>
										<th>Id</th>
										<th>Nome</th>
										<th>Email</th>
										<th>Senha</th>
										<th>Nivel</th>
										<th>Alterar</th>
										<th>Excluir</th>
									</tr>
								</thead>

								<tbody>

									<?php 
									
									$registros = array(
										array(
											'id'	=> 1
											,'nome'	=> 'Gabriel'
											,'email'	=> 'teste@teste.com'
											,'senha'	=> 'xxx'
											,'nivel'	=> 2
										) 
										,array(
											'id'	=> 2
											,'nome'	=> 'Johnn'
											,'email'	=> 'teste@teste.com'
											,'senha'	=> 'aaa'
											,'nivel'	=> 1
										)
									
									
									);
									
									
									foreach ($registros as $registro):
									?>
									<tr class="odd gradeX">
										<td><?php echo $registro['id'] ?></td>
										<td><?php echo $registro['nome'] ?></td>
										<td><?php echo $registro['email'] ?></td>
										<td class="center"><?php echo $registro['senha'] ?></td>
										<td class="center"><?php echo $registro['nivel'] ?></td>
										<td>                     
											<a href="alterar.php?id=<?php $registro['id'] ?>">
												<font color="#1571CD">Alterar 
											</a>
										</td>
										<td>
											<a href="excluir.php?id=<?php $registro['id'] ?>"
											onclick="return confirm('Confirmar exclusão de registro?');"><font
												color="#1571CD">Excluir 
										
										</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
						
						</div>
						<!-- /.table-responsive -->

					</div>
					<!-- /.panel-body -->


				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	
</body>
</html>