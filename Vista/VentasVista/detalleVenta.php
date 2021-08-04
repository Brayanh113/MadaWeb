<?php
    include "../../Controller/VentasControlador/ControladorVentas.php";
    $detalle = $ControladorVentas->listarDetalleVenta($_GET['IdPedido']);
    $detalleV = $ControladorVentas->listarProductosVendidos($_GET['IdPedido']);

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
                            <li class="breadcrumb-item active">Detalle Venta</li>
                        </ol>
                    
                        <h3 align="center">Detalle de la venta</h3>
                        <br>

                        <div class="row">
                                <div class="form-group col-md-12">
                                    <h3>Cliente asociado a la venta</h3>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Nombre">Nombre: </label>
                                    <input type="text" class="form-control" name="Nombre" id="Nombre" readonly value="<?php echo $detalle['Nombre'];?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Apellido">Apellido: </label>
                                    <input type="text" class="form-control" name="Apellido" id="Apellido" readonly value="<?php echo $detalle['Apellido'];?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Documento">Documento: </label>
                                    <input type="text" class="form-control" name="Documento" id="Documento" readonly value="<?php echo $detalle['Documento'];?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Direccion">Dirección: </label>
                                    <input type="text" class="form-control" name="Direccion" id="Direccion" readonly value="<?php echo $detalle['Direccion'];?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Telefono">Telefono: </label>
                                    <input type="number" class="form-control" name="Telefono" id="Telefono" readonly value="<?php echo $detalle['Telefono'];?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Correo">Correo: </label>
                                    <input type="email" class="form-control" name="Correo" id="Correo" readonly value="<?php echo $detalle['Correo'];?>">
                                </div>

                                <br>
                                <br>


                                <div class="form-group col-md-12">
                                    <h3 align="center">Productos</h3>
                                </div>
                                
                                <table class="table table-striped table-hover" id="tabla">
                                  <thead>
                                    <tr>
                                      <th scope="col">Producto</th>
                                      <th scope="col">Color</th>
                                      <th scope="col">Talla</th>
                                      <th scope="col">Cantidad</th>
                                      <th scope="col">Valor Unitario</th>
                                      <!-- <th scope="col">Anulado</th> -->
                                      <th scope="col">Acciones</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                        foreach ($detalleV as $deta) {
                                    ?>
                                    <tr>
                                      <td><?php echo $deta['NombreProducto'];?></td>
                                      <td><?php echo $deta['Color'];?></td>
                                      <td><?php echo $deta['Talla'];?></td>
                                      <td><?php echo $deta['Cantidad'];?></td>
                                      <td>$<?php echo $deta['ValorUnitario'];?></td>
                                      <!-- <td><?php echo $deta['Anulado'];?></td> -->
                                      <td>
                                            <?php
                                            if ($deta['IdEstadoPedido']<3) {
                                            ?>
                                                <button type="button" id="anularProductoVenta" onclick="anularProductoVenta(<?php echo $deta['IdDetallePedido'];?>,<?php echo $deta['ValorUnitario'];?>,<?php echo $deta['TotalIva'];?>,<?php echo $detalle['Total'];?>,<?php echo $detalle['TotalIva'];?>,<?php echo $detalle['Subtotal'];?>,<?php echo $deta['IdPedido'];?>,<?php echo $deta['Cantidad'];?>,<?php echo $deta['IdDetalleProducto'];?>,<?php echo $deta['Stock'];?>);" name="anularProductoVenta" class="btn btn-primary">Anular</button>
                                            <?php    
                                            } else if($deta['IdEstadoPedido']==3) {
                                                echo '<span class="badge bg-danger">Cancelado</span>';
                                            }else if($deta['IdEstadoPedido']==4){
                                                echo '<span class="badge bg-primary">Enviado</span>';
                                            }
                                            ?>
                                          
                                      </td>
                                    </tr>
                                    <?php   
                                        }
                                    ?>
                                  </tbody>
                                </table>
                                <div class="form-group col-md-3">
                                    <label for="Subtotal">SubTotal: </label>
                                    <input type="number" class="form-control" name="Subtotal" id="Correo" readonly value="<?php echo $detalle['Subtotal'];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="Iva">Total Iva: </label>
                                    <input type="number" class="form-control" name="Iva" id="Correo" readonly value="<?php echo $detalle['TotalIva'];?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Total">Total: </label>
                                    <input type="text" class="form-control" name="Total" id="Correo" readonly value="<?php echo $detalle['Total'];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="Fecha">Fecha de la venta: </label>
                                    <input type="text" class="form-control" name="Fecha" id="Correo" readonly value="<?php echo $detalle['FechaPedido'];?>">
                                </div>


                                <!-- Factuta -->
                                <div class="form-group col-md-3">

                                	<form action="../../Controller/VentasControlador/ControladorVentas.php" method="POST" accept-charset="utf-8">
                                    <input type="hidden" name="IdPedido" value="<?php echo $detalle['IdPedido'];?>">

                                    <button type="submit" id="factura" name="factura" class="btn btn-success">Generar Factura</button>
 
                                </form>
                                	
                                    <!-- <button type="button" class="btn btn-success" id="factura" name="factura" onclick="factura(<?php echo $detalle['IdPedido'];?>)">Generar Factura</button> -->
                                     
                                </div>
                                <!-- Factura -->


                                <div class="form-group col-md-2">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                      Cambiar Estado
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Cambiar Estado Pedido</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-row">
                                                <form action="detalleVenta_submit" method="get" accept-charset="utf-8">
                                               
                                                <div class="form-group col-md-10">
                                                    <?php
                                                    if ($deta['IdEstadoPedido']<3) {
                                                    ?>
                                                        <label for="Estado">Cambiar Estado: </label>
                                                        <select class="form-control" name="idEstadoPedido" id="idEstadoPedido" class="camposInputs">
                                                            <option value="">Seleccione</option>
                                                            <option value="1">Pendiente</option>
                                                            <option value="2">En proceso</option>
                                                            <option value="3">Cancelado</option>
                                                            <option value="4">Enviado</option>
                                                        </select>
                                                        <input type="hidden" name="idPedido" id="idPedido" value="<?php echo $detalle['IdPedido'];?>">
                                                    <?php           
                                                    } else {
                                                        echo'<div class="alert alert-danger" role="alert">
                                                              ¡El estado no se puede cambiar!
                                                            </div>';
                                                        
                                                    }
                                                    ?>

                                                
                                            </div>
                                            <div class="form-group col-md-10">
                                                <label for="Estado">Estado Actual: </label>
                                                <?php if($deta['IdEstadoPedido']==1){
                                                    echo '<span class="badge bg-warning">Pendiente</span>';
                                                }else if($deta['IdEstadoPedido']==2){
                                                    echo '<span class="badge bg-success">En proceso</span>';
                                                }else if($deta['IdEstadoPedido']==3){
                                                    echo '<span class="badge bg-danger">Cancelado</span>';

                                                }else if($deta['IdEstadoPedido']==4){
                                                    echo '<span class="badge bg-primary">Enviado</span>';
                                                }
                                                ?>
                                                
                                                
                                            </div>

                                                
                                            </div>
                                            
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerar</button>
                                            <button onclick="cambiarEstado(<?php echo $deta['IdDetalleProducto'];?>,<?php echo $deta['Stock'];?>);" type="button" class="btn btn-primary">Guardar</button>
                                          </div>
                                                </form>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Modal -->

                                </div>        
                        </div>


                    </div>

                
                </main>
            </div>
           





        <script src="../js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/sweetalert2@11.js"></script>

        <script src="../js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="../js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>


        <script>

        	function saludo(){
        		alert("Hola, mundo");
        	}
            function anularProductoVenta(IdDetallePedido,ValorUnitario,TotalIvaIndi,Total,TotalIva,SubTotal,IdPedido,Cantidad,IdDetalleProducto,Stock){
                
                Swal.fire({
                title: 'Anular Producto',
                text: "Se va a naular el producto ¿Seguro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, anular!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {

                    var resIva = TotalIva-TotalIvaIndi;
                    TotalIva = resIva;
                    var resTotal = SubTotal - (ValorUnitario*Cantidad);
                    SubTotal = resTotal;

                    Total = TotalIva + SubTotal;

                    var TotalStock = Cantidad+Stock;

                    var formData = new FormData();
                    formData.append('anularProductoVenta','');
                    formData.append('IdDetallePedido',IdDetallePedido);
                    formData.append('TotalIva',TotalIva);
                    formData.append('SubTotal',SubTotal);
                    formData.append('Total',Total);
                    formData.append('IdPedido', IdPedido);
                    formData.append('TotalStock', TotalStock);
                    formData.append('IdDetalleProducto', IdDetalleProducto);
                    $.ajax({
                        url: '../../Controller/VentasControlador/ControladorVentas.php',
                        type: 'post',
                        data:formData,
                        contentType:false,
                        processData:false,
                        success: function(response){
                            // alert(response);

                            Swal.fire({
							  title: 'El producto ha sido Anulado.',
							  icon: 'success',
							  confirmButtonText: `OK`,

							}).then((result) => {
							  /* Read more about isConfirmed, isDenied below */
							  if (result.isConfirmed) {
							    location.reload(); 
							  }
							})
                        }

                    });
                    
                    
                  }
                })
            }

            // function factura(IdPedido){
            // 	alert(IdPedido)

            //     var formData = new FormData();
            //     formData.append('factura','');
            //     formData.append('IdPedido',IdPedido);
            //     $.ajax({
            //             url: '../../Controller/VentasControlador/ControladorVentas.php',
            //             type: 'post',
            //             data:formData,
            //             contentType:false,
            //             processData:false,
            //             success: function(response){
            //                 // alert(response);
            //                 // Swal.fire(
            //                 // 'Anulado!',
            //                 // 'El producto ha sido Anulado.',
            //                 // 'success'
            //                 // );
            //                 // location.reload();
            //             }

            //         });

            // }

            function cambiarEstado(){

                var IdEstadoPedido = document.getElementById("idEstadoPedido").value;
                var IdPedido = document.getElementById("idPedido").value;

                var TotalStock = Cantidad+Stock;

                var formData = new FormData();
                formData.append('cambiarEstado','');
                formData.append('IdEstadoPedido',IdEstadoPedido);
                formData.append('IdPedido',IdPedido);
                formData.append('TotalStock', TotalStock);
                formData.append('IdDetalleProducto', IdDetalleProducto);
                
                $.ajax({
                        url: '../../Controller/VentasControlador/ControladorVentas.php',
                        type: 'post',
                        data:formData,
                        contentType:false,
                        processData:false,
                        success: function(response){
                            // alert(response);
                            $('#exampleModal').modal('hide');

                             Swal.fire({
							  title: 'El estado fue cambiado.',
							  icon: 'success',
							  confirmButtonText: `OK`,

							}).then((result) => {
							  /* Read more about isConfirmed, isDenied below */
							  if (result.isConfirmed) {
							    location.reload(); 
							  }
							})



                        }
                        

                    });
                

                // 
            }

            
        </script>
        


    </body>
</html>




