<div class="container-fluid">
	<form action="#">
		<!-- Campos para a definição da página -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
			<div class="form-group">
				<label for="nome">Nome da Página *</label>
				<input class="form-control" name="nome" type="text" required>
			</div>

			<div class="form-group">
				<label for="titulo">Título da Página *</label>
				<input class="form-control" name="titulo" type="text" required>
			</div>

			<div class="form-group">
				<label for="ordem">Ordem *</label>
				<input class="form-control" name="ordem" type="number" required>
			</div>

			<div class="form-group">
				<label for="description">Descrição da Página</label>
				<textarea class="form-control" name="description" placeholder="Insira a descrição conteúdo"></textarea>
			</div>
		</div>

		<!-- Campos para o SEO -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<div class="form-group">
				<label for="slug">Slug</label>
				<input class="form-control" name="slug" type="text">
			</div>

			<div class="form-group">
				<label for="robots">Robots</label>
				<select class="form-control" name="robots" id="#robots">
					<option value="index/follow">index/follow</option>
				</select>
			</div>

			<div class="form-group">
				<label for="bloqueado">Deseja bloquear esta página?</label>
				<select class="form-control" name="bloqueado" id="#bloqueado">
					<option value="sim">Sim</option>
					<option value="nao" selected="selected">Não</option>
				</select>
			</div>
		</div>

		<!-- Editor -->
		<div class="col-xs-12">
			<div class="form-group">
				<label for="conteudo">Conteúdo da Página</label>
				<div class="form-group">
                    <textarea id="editor" name="editor" rows="10" cols="80">
                        This is my textarea to be replaced with CKEditor.
                    </textarea>                        
				</div>
			</div>
		</div>

		<div>
			<div class="col-xs-6"><input class="btn btn-primary btn-lg" type="submit" value="Salvar"></div>
			<div class="col-xs-6"><input class="btn btn-danger btn-lg" type="reset" value="Limpar Valores"></div>
		</div>
	</form>
</div>