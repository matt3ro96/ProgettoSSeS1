<?php
session_start(); 
  if(!isset($_SESSION['username'])){
          header('location:../../index.php?error=1');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

                <!-- App Favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- App title -->
        <title>3GM</title>

        <!-- DataTables -->
        <link href="../assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!--Chartist Chart CSS -->
        <link rel="stylesheet" href="../assets/plugins/chartist/dist/chartist.min.css">

        <!-- App CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <!--[endif]-->

        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="#" class="logo"><span>3<span>GM</span></span><i class="zmdi zmdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title">Tabella Impianti</h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="zmdi zmdi-notifications-none"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


          <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="../../img/utente.jpg" alt="user-img" title="User" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        
                       <!--Visualizza l'username-->
                       
                       <?php
                       session_start();
                       $user= $_SESSION['username'];
                       echo $user;
                       ?>
                     
                        <ul class="list-inline">

                            <li>
                               <a href="../log_out.php">
            						<span class="glyphicon glyphicon-log-out"></span>
       						   </a>
                            </li>
                        </ul>
                      
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                      <li class="text-muted menu-title">Menu</li>
					  <li><a href="../info.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Informazioni Personali</span> </a></li> 
                         <li><a href=# class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Informazione Impianti </span> </a></li>
                         <li><a href="gestione_permessi_impianti.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Gestisci i Permessi Utenti</span> </a></li>
                   <li><a href="permessiApp.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Gestisci i Permessi Applicazioni</span> </a></li>
                         <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Gestisci gli Impianti </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aggiungi_impianto.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span>Aggiungi un Impianto</span> </a></li>
                                    <li><a href="modifica_impianto.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span>Modifica un Impianto</span> </a></li>
                                </ul>
                          </li>
                          
                          <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Gestisci le Applicazioni </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aggiungi_applicazione.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span>Aggiungi un'Applicazione</span> </a></li>
                                    <li><a href="modifica_applicazione.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span>Modifica un'Applicazione</span> </a></li>
                                </ul>
                          </li>
                          <li class="has_sub">
                       			<a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Gestisci la Struttura degli Impianti </span> <span class="menu-arrow"></span></a>
                        		<ul class="list-unstyled">
                        			<li><a href="aggiungi_sensoreImpianto.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span>Aggiungi un Sensore all'Impianto</span> </a></li>
                        			<li><a href="rimuovi_sensoreImpianto.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span>Rimuovi un Sensore dall'Impianto</span> </a></li>
                        		</ul>
                        	</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->
            
            <div class="content-page">
            	<div class="content">
                            <div class="container">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <div class="dropdown pull-right">
                                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Impostazioni</a></li>
                                                </ul>
                                            </div>

                                            <h4 class="header-title m-t-0 m-b-30">Dati</h4>
                                            
                                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Codice Impianto</th>
                                                        <th>Nome Impianto</th>
                                                        <th>Tipo Impianto</th>
                                                        <th>Data Creazione</th>
                                                        <th>Azienda Associata</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                  //include il file php dei dati
                                                  include('getImpiantiGestoreShow.php');
                                                 ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->


                               

                           

				</div>
            </div>
        </div>
        <!-- END wrapper -->
	</div>


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <!-- Datatables-->
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="../assets/plugins/datatables/jszip.min.js"></script>
        <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="../assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "../assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>

    </body>
</html>