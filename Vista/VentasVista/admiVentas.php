<?php
    include "../../Controller/VentasControlador/ControladorVentas.php";
    $listarVentas = $ControladorVentas -> listarVentas();
    $listarCate = $ControladorVentas -> listarCategoria();
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MADA || Administrador</title>
        <link href="../css/style.css" rel="stylesheet" />
        <link href="../css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Administrador</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                </li>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#!">Settings</a>
                    <a class="dropdown-item" href="#!">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div >
                                <h2>MADA</h2>
                                <div class="small">Panel de control</div>
                                
                            </div>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Usuarios
                            </a>
                            <a class="nav-link" href="../ClientesVista/admiClientes.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Clientes
                            </a>
                            <a class="nav-link" href="admiVentas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                Pedidos
                            </a>
                            <a class="nav-link" href="admiVentasEnviadas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                Ventas
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Administrador MADA</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>   
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                                DataTable Example
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="sampleTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Subtotal</th>
                        <th>Total Iva</th>
                        <th>Total</th>
                        <th>Id Estado</th>
                        <th>Documento Usuario</th>
                        <th>Botones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listarVentas as $ventas) {
                        ?>
                        <tr>
                            <td><?php echo $ventas['IdPedido'];?></td>
                            <td><?php echo $ventas['FechaPedido'];?></td>
                            <td><?php echo $ventas['Subtotal'];?></td>
                            <td><?php echo $ventas['TotalIva'];?></td>
                            <td><?php echo $ventas['Total'];?></td>
                            <td>
                                <?php if($ventas['IdEstadoPedido']==1){
                                        echo '<span class="badge bg-warning">Pendiente</span>';
                                    }else if($ventas['IdEstadoPedido']==2){
                                        echo '<span class="badge bg-success">En proceso</span>';
                                    }else if($ventas['IdEstadoPedido']==3){
                                        echo '<span class="badge bg-danger">Cancelado</span>';
                                    }else{
                                        echo '<span class="badge bg-primary">Enviado</span>';
                                    }
                                ?> 
                                
                            </td>
                            <td><?php echo $ventas['Documento'];?></td>
                            <td>
                                <form action="../../Controller/VentasControlador/ControladorVentas.php" method="POST" accept-charset="utf-8">
                                    <input type="hidden" name="IdPedido" value="<?php echo $ventas['IdPedido'];?>">

                                    <button type="submit" id="verDetalleVenta" name="verDetalleVenta" class="btn btn-primary">Ver Detalle</button>

                                    <!-- <button type="submit" id="eliminarUsuario"  name="eliminarUsuario" class="btn btn-warning">Eliminar</button> -->
 
                                </form>
                                
                            </td>

                        </tr>
                    <?php   
                    }
                    ?>
                    
                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    <script src="../js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="../js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    </body>
</html>




