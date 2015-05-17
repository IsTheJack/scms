<?php 
    $url = function($sub_url) {
        return base_url('__system/' . $sub_url);
    };
?>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="//avatars2.githubusercontent.com/u/7907666?v=3&s=460" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Olá, Roberto</p>

                    <a href="#"><i class="fa fa-circle text-warning"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="<?php echo $url(''); ?>">
                        <i class="fa fa-home"></i> <span>Principal</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                        <span>Páginas</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $url('pagina') ?>"><i class="fa fa-angle-double-right"></i>Mostrar Páginas</a></li>
                        <li><a href="<?php echo $url('pagina/novo') ?>"><i class="fa fa-angle-double-right"></i>Nova Página</a></li>
                    </ul>
                </li>
        </section>
        <!-- /.sidebar -->
    </aside>