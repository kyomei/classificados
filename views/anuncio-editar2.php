<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-8">
			<h1>Editar Anúncio</h1>
			<form action="<?php echo BASE_URL;?>anuncios/update" method="POST">
          		<div class="row">
          			<!-- Campo ID -->
					<input type="hidden" class="form-control" name="id" value="<?php echo $anuncio['id']; ?>">	
          			<div class="col-md-4">
						<div class="form-group">
						    <label for="categoria">Categoria:</label>
						    <select name="categoria" class="form-control">
						    	<?php foreach ($categorias as $cat): ?>
						    		<option value="<?php echo $cat['id'];?>" <?php echo ($cat['id'] == $anuncio['id_categoria']) ? 'selected' : ''; ?>><?php echo $cat['nome']; ?></option>
						    	<?php endforeach;?>
						    </select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label for="titulo">Título:</label>
						    <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $anuncio['titulo']; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
						    <label for="valor">Valor:</label>
						    <input type="text" class="form-control" name="valor" id="valor" value="<?php echo $anuncio['valor']; ?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						    <label for="estado">Estado de Conservação:</label>
						    <select name="estado" class="form-control">
								   <option <?php echo ($anuncio['estado'] == 'Ruim') ? 'selected' : ''; ?>>Ruim</option>
								   <option <?php echo ($anuncio['estado'] == 'Bom') ? 'selected' : ''; ?>>Bom</option>
								   <option <?php echo ($anuncio['estado'] == 'Ótimo') ? 'selected' : ''; ?>>Ótimo</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						    <label for="descricao">Descrição:</label>
						    <textarea class="form-control" name="descricao" rows="5"><?php echo $anuncio['descricao']; ?></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>