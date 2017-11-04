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

        <!-- Table css -->
        <link href="../assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

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
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

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
					    <li><a href="index_utente.php" class="waves-effect active"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span></a></li> 
                        <li><a href="../info.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Informazioni Personali</span> </a></li> 
                        <li><a href="tables-datatable.php" class="waves-effect"> <i class="zmdi zmdi-view-list"></i> <span> Visualizza i Dati </span> </a></li>
                        <li><a href="tables-responsive.php" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Informazione Impianti </span> </a></li>
                       <?php
                         session_start();
                         $ruolo= $_SESSION['ruolo'];
                         
                         if($ruolo== "g"){
                              echo "<li><a href=\"Gestore/gestione_permessi_impianti.php\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-list\"></i> <span> Gestisci i Permessi</span> </a></li>";
                   
                        echo "<li class=\"has_sub\">";
                        echo  "<a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-chart\"></i><span> Gestisci gli Impianti </span> <span class=\"menu-arrow\"></span></a>";
                        echo " <ul class=\"list-unstyled\">";
                        echo "<li><a href=\"Gestore/aggiungi_impianto.php\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-list\"></i> <span>Aggiungi un Impianto</span> </a></li>";
                        echo  "<li><a href=\"Gestore/modifica_impianto.php\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-list\"></i> <span>Modifica un Impianto</span> </a></li>";
                        echo  "</ul>";
                        echo " </li>";
                        
                             echo "<li class=\"has_sub\">";
                        echo  "<a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-chart\"></i><span> Gestisci i Sensori </span> <span class=\"menu-arrow\"></span></a>";
                        echo " <ul class=\"list-unstyled\">";
                        echo "<li><a href=\" Gestore/aggiungi_sensore.php \" class=\"waves-effect\"><i class=\"zmdi zmdi-view-list\"></i> <span>Aggiungi un Sensore</span> </a></li>";
                        echo  "<li><a href=\" Gestore/modifica_sensore.php \" class=\"waves-effect\"><i class=\"zmdi zmdi-view-list\"></i> <span>Modifica un Sensore</span> </a></li>";
                        echo  "</ul>";
                        echo " </li>";
                        
                             echo "<li class=\"has_sub\">";
                        echo  "<a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-chart\"></i><span> Gestisci le Applicazioni </span> <span class=\"menu-arrow\"></span></a>";
                        echo " <ul class=\"list-unstyled\">";
                        echo "<li><a href=\"Gestore/aggiungi_applicazione.php\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-list\"></i> <span>Aggiungi un Applicazione</span> </a></li>";
                        echo  "<li><a href=\"Gestore/modifica_applicazione.php\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-list\"></i> <span>Modifica un Applicazione</span> </a></li>";
                        echo  "</ul>";
                        echo " </li>";
                               
                         }
                         ?>
                        
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
                    <div class="container">

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">


									<div class="table-rep-plugin">
										<div class="table-responsive b-0" data-pattern="priority-columns">
											<table id="tech-companies-1" class="table  table-striped">
												<thead>
													<tr>
														<th data-priority="3">Codice Impianto</th>
														<th data-priority="1">Nome</th>
														<th data-priority="1">Tipo</th>
														<th data-priority="1">Data Creazione</th>
														<th data-priority="1">Numero Sensori</th>
													</tr>
												</thead>
												<tbody>
													<?php
                                                    include('getDatiImpianto.php');
                                                    ?>
												</tbody>
											</table>
										</div>

									</div>

								</div>
							</div>
						</div>
                        <!-- End row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2017 © SS&S
                </footer>

            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            
        </div>
        <!-- END wrapper -->



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

        <!-- Responsive-table-->
        <script src="../assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

    </body>
</html>