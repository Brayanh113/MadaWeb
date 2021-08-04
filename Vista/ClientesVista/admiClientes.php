<?php
    include "../../Controller/ClientesControlador/ControladorUsuarios.php";
    $listarCliente = $ControladorUsuarios -> listarCliente();
    
    
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
                            <a class="nav-link" href="admiClientes.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Clientes
                            </a>
                            <a class="nav-link" href="../VentasVista/admiVentas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                Pedidos
                            </a>
                            <a class="nav-link" href="../VentasVista/admiVentasEnviadas.php">
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

                            <i class="fas fa-table mr-4"></i>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> -->
							  <!-- Nuevo Cliente -->
							<!-- </button> -->
                            Clientes
                        </div>
                        <div>
                        	
                        </div>
                        <div class="card-body">

                   
                   <!-- Button trigger modal -->
				

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Registrar Cliente</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				      	<form class="form" action="../Controlador/ControladorUsuarios.php" method="POST" accept-charset="utf-8">
				      		<div class="form-row">
				      			<div class="form-group col-md-6">
				      				<label for="Nombre">Nombre: </label>
									<input type="text" class="form-control" name="Nombre" id="Nombre">
					      		</div>
					      		<div class="form-group col-md-6">
					      			<label for="Apellido">Apellido: </label>
									<input type="text" class="form-control" name="Apellido" id="Apellido">
					      		</div>
					      		<div class="form-group col-md-6">
					      			<label for="Documento">Documento: </label>
									<input type="text" class="form-control" name="Documento" id="Documento">
					      		</div>
					      		<div class="form-group col-md-6">
					      			<label for="Direccion">Dirección: </label>
									<input type="text" class="form-control" name="Direccion" id="Direccion">
					      		</div>
					      		<div class="form-group col-md-6">
					      			<label for="Telefono">Telefono: </label>
									<input type="number" class="form-control" name="Telefono" id="Telefono">
					      		</div>
					      		<div class="form-group col-md-6">
					      			<label for="Correo">Correo: </label>
									<input type="email" class="form-control" name="Correo" id="Correo">
					      		</div>
					      		<div class="form-group col-md-6">
					      			<label for="Contrasena">Contraseña: </label>
									<input type="password" class="form-control" name="Contrasena" id="Contrasena">
					      		</div>
					      		<div class="form-group col-md-4">
					      			<label for="Estado">Estado: </label>
									<select class="form-control" name="Estado" id="Estado" class="camposInputs">
										<option value="">Seleccione</option>
										<option value="1">Activo</option>
										<option value="0">Inactivo</option>
									</select>
					      		</div>
				      		<div >
								<input type="hidden" class="form-control" name="IdRol" id="IdRol" value="1" placeholder="Cliente" readonly>
				      		</div>
				      			
				      		</div>

							
						</form>
				      </div>
				      <div class="modal-footer">
				      	<button type="submit"  class="btn btn-primary btn-lg active" id="registrarUsuario" name="registrarUsuario">Registrar</button>

				        <button type="button" class="btn btn-secondary btn-lg active" data-dismiss="modal">Cerrar</button>
				        
				      </div>
				    </div>
				  </div>
				</div> 


                    	
                    <div class="row">
                    <div class="col-md-12">
                      <div class="tile">
                        <div class="tile-body">
                          <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">      
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Documento</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listarCliente as $cliente) {
                            ?>
                            <tr>
                                <td><?php echo $cliente['IdUsuario'];?></td>
                                <td><?php echo $cliente['Nombre'];?></td>
                                <td><?php echo $cliente['Apellido'];?></td>
                                <td><?php echo $cliente['Documento'];?></td>
                                <td><?php echo $cliente['Direccion'];?></td>
                                <td><?php echo $cliente['Telefono'];?></td>
                                <td><?php echo $cliente['Correo'];?></td>
                                <td>
                                    <?php if($cliente['Estado']!=1){
                                            echo '<span class="badge bg-danger">Inactivo</span>';
                                        }else{
                                            echo '<span class="badge bg-success">Activo</span>';
                                        }
                                    ?>    
                                </td>
                                <td>
                                    <button type="button" id="actualizarUsuario" name="actualizarUsuario" class="btn btn-primary" onclick="actualizarUsuario()">Cambar Estado</button>
                                </td> 
                            </tr>
                                <?php   
                                }
                                ?>
                        
                                    </tbody>
                                </table>
                              </table>
                            </div>
                            </div>
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
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/sweetalert2@11.js"></script>

    <script src="../js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="../js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>


    <script>
        function actualizarUsuario(IdUsuario,Estado){

            var formData = new FormData();
            formData.append('actualizarUsuario','');
            formData.append('IdUsuario',IdUsuario);
            formData.append('Estado',Estado);
                

                Swal.fire({
                title: 'Cambiar estado del cliente',
                text: "Se va a cambiar estado del cliente ¿Seguro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, cambiar estado!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {

                    $estado = null;
                    if (Estado == 0) {
                        $estado = 1; 
                    }else{
                        $estado = 0;
                    }

                    Estado = $estado;
                    
                    var formData = new FormData();
                    formData.append('actualizarUsuario','');
                    formData.append('IdUsuario',IdUsuario);
                    formData.append('Estado',Estado);

                    $.ajax({
                        url: '../../Controller/ClientesControlador/ControladorUsuarios.php',
                        type: 'post',
                        data:formData,
                        contentType:false,
                        processData:false,
                        success: function(response){
                            // alert(response);
                            Swal.fire({
                              title: 'El estado se ha cambiado',
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
                })
        }


    </script>



    </body>
</html>




