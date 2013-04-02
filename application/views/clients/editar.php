<h2>Atualizar noticia</h2>

<?php echo form_open('clients/editar/'.$clients['id']) ?>

	<label for="nome">Nome</label> 
	<input type="input" name="nome" value="<?php echo $clients['nome'] ?>" /><br />

	<label for="city">Cidade</label>
	<textarea name="city"><?php echo $clients['city'] ?></textarea><br />
	
	<input type="submit" name="submit" value="Salvar" /> 

</form>