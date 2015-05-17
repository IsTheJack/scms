<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Páginas</title>
</head>
<body>
	<center><h1>Index Páginas:</h1></center>
	<table border="1" width="100%">
		<tr>
			<td>Nome</td>
			<td>Slug</td>
			<td>Conteúdo</td>
		</tr>
		<?php foreach ($paginas as $pagina): ?>
			<tr>
				<td><?php echo $pagina->nome; ?></td>
				<td><?php echo $pagina->slug; ?></td>
				<td><?php echo $pagina->conteudo; ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>