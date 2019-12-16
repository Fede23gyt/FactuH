 <!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu de Navegacion</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li><a href="{{ route('provee') }}"><i class="fa fa-book"></i> 
          <span>Proveedores</span></a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Articulos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../index.html"><i class="fa fa-circle-o"></i>Gestion Articulos</a></li>
            <li><a href="{{ route('categorias') }}"><i class="fa fa-circle-o"></i>Categorias</a></li>
            <li><a href="{{ route('marcas') }}"><i class="fa fa-circle-o"></i>Marcas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Facturacion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i>Facturar</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i>Consulas</a></li>


          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Configuracion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i>Usuarios</a></li>
            <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i>Iva</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i>Bancos</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i>Tipos Factura</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i>Puntos de Venta</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i>Datos Empresa</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
