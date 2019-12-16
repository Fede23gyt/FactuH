<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Herlein S.R.L - Repuestos y Servicios </title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- LE pongo la ruta de donde esta el theme adminlte -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/dist/css/AdminLTE.min.css')}}">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

  <!-- FORMATEA CUIT -->
  <script type="text/javascript">

    jQuery(function($){
      $("#cuit_f").mask("99-99999999-9");
    });

  </script>
  </head>

  <body class="hold-transition skin-blue fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!--inicio header-->
      @include("themes/adminlte/header")
      <!--fin header-->
      <!--inicio aside-->
      @include("themes/adminlte/aside")
      <!--fin aside-->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <section class="content">
            @yield('contenido')
          <!--<div class="box">

            <div class="box-header with-border">

              <h3 class="box-title">@yield('titulo')</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                  <p>jajajaaa</p>
              </div>

            </div>
          </div>
        -->
        </section>

      </div>

      <!-- inicio footer -->
      @include("themes/adminlte/footer")
      <!-- fin footer -->
    </div>

    <!-- jQuery 3 -->
    <script src="{{asset('assets/adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/adminlte/dist/js/adminlte.min.js')}}"></script>

    <script src="{{asset('js\jquery-validation\jquery.validate.min.js')}}"></script>
    <script src="{{asset('js\jquery-validation\localization\messages_es_AR.min.js')}}"></script>

    <script src="{{asset('js\jquery-maskedinput\jquery.maskedinput.min')}}"></script>
    

    <!-- AdminLTE or demo purposes -->
    <script src="{{asset('assets/adminlte/dist/js/demo.js')}}"></script>

  </body>
</html>
