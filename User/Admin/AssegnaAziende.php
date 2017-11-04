<!DOCTYPE html>
<?php
session_start(); 
  if(!isset($_SESSION['username'])){
          header('location:..\..\index.php?error=1');
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="È un software distribuito da IOT System.">
        <meta name="author" content="SS&S">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>3GM</title>
        
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
                                <h4 class="page-title">Associa azienda</h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
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
                            <img src="../../img/utente.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
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

                            <li><a href=" info.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Informazioni Personali</span> </a></li> 
                            <li><a href="AggiungiUtente.php" class="waves-effect"> <i class="zmdi zmdi-view-list"></i> <span> Aggiungi Utenti</span> </a></li>
                            <li><a href="ModificaUtente.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Modifica Utenti </span> </a></li>
                            <li><a href="AggiungiAzienda.php" class="waves-effect"> <i class="zmdi zmdi-view-list"></i> <span> Aggiungi azienda</span> </a></li>
                            <li><a href="RimuoviAzienda.php" class="waves-effect"> <i class="zmdi zmdi-view-list"></i> <span> Rimuovi azienda</span> </a></li>
                            <li><a href="AssegnaAziende.php" class="waves-effect"> <i class="zmdi zmdi-view-list"></i> <span> Associa azienda</span> </a></li>
                        </ul>
                   
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->
            
            <!-- ============================================================== -->
       <!-- Start right Content here -->
            <!-- ============================================================== -->
             <div class="content-page">
                <!-- Start content -->
                <div class="content">
                <?php
                if(($_GET['success']) == 1){
                echo "Associazione Inserita Con Successo";
                }
                ?>
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <h4 class="header-title m-t-0 m-b-30">Associazioni Amministratori Impianto</h4>
									
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                       <tbody>
  								<tr>
    				            <th>Amministratore impianto</th>
                                <th>Azienda</th>
                                <th>Azione</th>
  								</tr>
                                <?php
                                include('getAssociazioniAzAmimm.php');
                                ?>
                           
                                       </tbody>
                                    </table>
                                    
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
						<div class="container">
                        	<div class="row">
								<div class="col-sm-12">
                       
								</div>
							</div>
						</div>
                    </div> <!-- container -->

                </div> <!-- content -->

                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <h4 class="header-title m-t-0 m-b-30">Effettua L'associazione</h4>
                                    <form action="associare.php" method="POST">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                       <tbody>
                                           <tr><th>Azienda</th><td>
                                              <select name="myAzienda" >
                                                     <?php
                                                     include('getAziendeAssociazione.php');
                                                     ?> 
                                                    </select>
                                            </td></tr>
                                            <tr><th>Amministratore Impianto</th><td>
                                              <select name="myAmmImp" >
                                                     <?php
                                                     include('getAmmImpAssociazione.php');
                                                     ?> 
                                                    </select>
                                            </td></tr>
                                            <tr><td colspan="2"><input type="Submit" value="Associa"></td></tr>
                                       </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>

                        <!-- end row -->


                       

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2017 © SS&S.
                </footer>

            </div>
            
		</div>
  <!-- end right content here-->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ============================================================== -->
       

  <!-- end-->
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
