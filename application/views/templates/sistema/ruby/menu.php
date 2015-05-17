<?php 
    $url = function($sub_url) {
        return base_url('__system/' . $sub_url);
    };
?>
<div id="menu">
    <nav>
        <h2><i class="fa fa-reorder"></i> CMSimples </h2>
        <ul>
            <li>
                <a href="#">Páginas</a>
                <h2>Menu de Páginas</h2>
               <ul>
                    <li>
                        <a href="<?php echo $url('pagina'); ?>">Ver Páginas</a>
                    </li>
                    <li>
                        <a href="#">Nova Página</a>
                    </li>
               </ul>
            </li>
            <li><a href="#">Contatos</a></li>
            <li><a href="#">Newsletter</a></li>
        </ul>
    </nav>
</div>