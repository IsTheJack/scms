<div class="container-fluid">
	<div class="table-responsive">
		<ul class="list-group">
			<li class="list-group-item active">
				<div class="row">
					<div class="col-xs-2"><input type="checkbox"></div>
					<div class="col-xs-2">Ordem</div>
					<div class="col-xs-4">Nome</div>
					<div class="col-xs-4">Slug</div>
				</div>
			</li>
		</ul>
		<ul class="list-group">
			<?php foreach ($paginas as $pagina): ?>
				<li class="list-group-item">
					<div class="row">
						<div class="col-xs-2"><input type="checkbox"></div>
						<div class="col-xs-2"><?php echo $pagina->ordem; ?></div>
						<div class="col-xs-4"><?php echo $pagina->nome; ?></div>
						<div class="col-xs-4"><?php echo $pagina->slug; ?></div>	
					</div>
				</li>	
			<?php endforeach ?>
		</ul>		
	</div>
</div>