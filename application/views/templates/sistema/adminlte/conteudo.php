<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $modulo_titulo; ?>
            <small><?php echo $acao_titulo; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> (Estático) Módulo</a></li>
            <li class="active">(Estático) Página</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php if (isset($html_msg)) echo $html_msg; ?>
        <?php echo $conteudo; ?>
    </section><!-- /.content -->
</aside><!-- /.right-side -->