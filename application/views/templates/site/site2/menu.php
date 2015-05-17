<nav class="navbar navbar-default">
	<ul class="nav navbar-nav">
		<?php foreach ($menus as $menu): ?>
			<li><a href="<?php echo $menu->slug ?>"><?php echo $menu->nome ?></a></li>		
		<?php endforeach ?>
	</ul>
</nav>

<style>
	.nav {background: red !important; width: 100%;}
	.nav a {color: #FFF !important;}
</style>