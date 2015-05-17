<nav class="navbar navbar-default">
	<ul class="nav navbar-nav">
		<?php foreach ($menus as $menu): ?>
			<li><a href="<?php echo $menu->slug ?>"><?php echo $menu->nome ?></a></li>		
		<?php endforeach ?>
	</ul>
</nav>