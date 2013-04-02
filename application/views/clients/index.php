<?php foreach ($clients as $novo_cliente): ?> 


	<h2><?php echo $novo_cliente['nome'] ?></h2>
	<div id="main">
		<?php echo $novo_cliente['city'] ?>
	</div>

	<p><a href="<?php echo site_url('/clients/' . $novo_cliente['id']) ?>">
	Visualizar</a></p>

	<p><a href="<?php echo site_url('/clients/editar/' . $novo_cliente['id']) ?>">
	Editar</a></p>

	<p><a href="<?php echo site_url('/clients/delete/' . $novo_cliente['id']) ?>" onclick = "javascript: return confirm('Você tem certeza que deseja excluir o cliente <?php echo $novo_cliente['nome']?>?')">Deletar</a></p>

<?php endforeach ?>