<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Tabla Cliente</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                          
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Tabla</a></li>
                    <li class="active">Tabla Clientes</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Tabla Clientes</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                    
                                                    <th>Latitud</th>
                                                    <th>Longitud</th>
                                                    <th>ubicacion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                    
                                                    <td><strong>Punto 1</strong></td>
                                                    <td>13.705243</td>
                                                    <td>-89.24231</td>
                                                    <td><a href="https://maps.google.com/?q=<?php echo 13.705243.','.-89.24231?>" class="glyphicon glyphicon-map-marker" target="_blanck" data-toggle="tooltip" data-placement="top" title="Ver Ubicación" ></a></td>
                                                        
                                                </tr>
                                                <tr >
                                                    
                                                    <td><strong>Punto 2</strong></td>
                                                    <td>13.696674</td>
                                                    <td>-89.197927</td>
                                                    <td><a href="https://maps.google.com/?q=<?php echo 13.696674.','.-89.197927?>" class="glyphicon glyphicon-map-marker" target="_blanck" data-toggle="tooltip" data-placement="top" title="Ver Ubicación" ></a></td>
                                                        
                                                </tr>
                                                <tr >
                                                    
                                                    <td><strong>Punto 3</strong></td>
                                                    <td>14.692511</td>
                                                    <td>-87.86136</td>
                                                    <td><a href="https://maps.google.com/?q=<?php echo 14.692511.','.-87.86136?>" class="glyphicon glyphicon-map-marker" target="_blanck" data-toggle="tooltip" data-placement="top" title="Ver Ubicación" ></a></td>
                                                        
                                                </tr>
                                                <tr >
                                                    
                                                    <td><strong>Punto 4</strong></td>
                                                    <td>12.022747</td>
                                                    <td>-86.252007</td>
                                                    <td><a href="https://maps.google.com/?q=<?php echo 12.022747.','.-86.252007?>" class="glyphicon glyphicon-map-marker" target="_blanck" data-toggle="tooltip" data-placement="top" title="Ver Ubicación" ></a></td>
                                                        
                                                </tr>
                                                <tr >
                                                    
                                                    <td><strong>Punto 5</strong></td>
                                                    <td>8.103289</td>
                                                    <td>-80.596013</td>
                                                    <td><a href="https://maps.google.com/?q=<?php echo 8.103289.','.-80.596013?>" class="glyphicon glyphicon-map-marker" target="_blanck" data-toggle="tooltip" data-placement="top" title="Ver Ubicación" ></a></td>
                                                        
                                                </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                           

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
    </body>
</html>






