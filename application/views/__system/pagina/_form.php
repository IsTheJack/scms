<!-- Campos para a definição da página -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
			<div class="form-group">
				<label for="nome">Nome da Página *</label>
				<input class="form-control" name="nome" type="text" value="<?php echo set_value('nome') ?>" required>
			</div>

			<div class="form-group">
				<label for="titulo">Título da Página *</label>
				<input class="form-control" name="titulo" type="text" value="<?php echo set_value('titulo') ?>" required>
			</div>

			<div class="form-group">
				<label for="pai">Pertence a(o) *</label>
				<select class="form-control" name="pai" id="#pai">
					<option value="0">* Principal *</option>
					<option value="1">Listar Menus</option>
				</select>
			</div>

			<div class="form-group">
				<label for="description">Descrição da Página</label>
				<textarea class="form-control" name="description" placeholder="Insira a descrição conteúdo"></textarea>
			</div>
		</div>

		<!-- Campos para o SEO e idioma -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<div class="form-group">
				<label for="slug">Slug *</label>
				<input class="form-control" name="slug" type="text">
			</div>

			<div class="form-group">
				<label for="idioma">Idioma</label>
				<select class="form-control" name="idioma" id="#idioma">
					<option value="1">Português</option>
					<option value="2">English</option>
				</select>
			</div>

			<div class="form-group">
				<label for="ordem">Ordem *</label>
				<input class="form-control" name="ordem" type="number" required>
			</div>

			<div class="form-group">
				<label for="robots">Robots</label>
				<select class="form-control" name="robots" id="#robots">
					<option value="index, follow">Indexar / Seguir</option>
					<option value="index, nofollow">Indexar / Não Seguir</option>
					<option value="noindex, follow">Não Indexar / Seguir</option>
					<option value="noindex, nofollow">Não Indexar / Não Seguir</option>
				</select>
			</div>

			<div class="form-group">
				<label for="bloqueado">Deseja bloquear esta página?</label>
				<select class="form-control" name="bloqueado" id="#bloqueado">
					<option value="1">Sim</option>
					<option value="0" selected="selected">Não</option>
				</select>
			</div>
		</div>

		<!-- Editor -->
		<div class="col-xs-12">
			<div class="form-group">
				<label for="conteudo">Conteúdo da Página</label>
                <textarea name="conteudo" class="form-control" id="ckeditor" name="ckeditor" rows="10" cols="80"></textarea>                        
			</div>
		</div>