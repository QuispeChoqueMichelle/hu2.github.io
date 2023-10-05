
<!DOCTYPE html>
<html>
    <head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel con Bootstrap</title>
    <!-- Agrega los enlaces a Bootstrap y jQuery -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles/busqueda.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
    <body>
        <br>
        <br>
        <div class="container">
			<div class="search-input-box">
				<input onkeypress="buscar_ahora($('#buscar_1').val());"type="text" class="form-control" id="buscar_1" name="buscar_1" placeholder="¿Qué quieres buscar?" />
				
                
			</div>
            <div class="card">
                
                    
                <div id="datos_buscador" class="container">
    
            </div>
    </div>
		</div>
        <script type="text/javascript">
            function buscar_ahora(buscar){
                var parametros={"buscar":buscar};
                $.ajax({
                    data:parametros,
                    type:'POST',
                    url:'buscador.php',
                    success:function(data){
                        document.getElementById("datos_buscador").innerHTML=data;

                    }
                });
            }
        </script>
 
        
        <!-- Carrusel -->
            <div class="container mt-4">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <!-- Agrega las flechas de navegación -->
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </a>
                    
                    <!-- Agrega los slides del carrusel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="row">
                            <h2  style="text-align:center">Musicas Nuevas</h2>
    
                            <?php
                                require_once('conexion.php');
                                $query="SELECT * FROM musica ORDER BY idMusic DESC LIMIT 3";
                                $execute=mysqli_query($conexion,$query) or die(mysqli_error ($conexion));
                                while($fila= mysqli_fetch_array($execute)){
                                ?>
                                <div class="col-sm-4">
                                    <div class="card" >
                                    <img src="<?php echo $fila['portMusic']?>" class="card-img-top" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="font-family: 'Times New Roman', serif; font-size: 20px;">
                                    <h3><?php echo $fila['nomMusic']?></h3>
                                    <p><?php echo $fila['artMusic']?></p>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal">boton 1 </button>
                                    </div>
                                    </div>
                                </div>
                                <?php }?>
                        </div>
                           
                        </div>

                        <div class="carousel-item">
                        <div class="row">
                        <h2 style="text-align:center">Musicas Romanticas</h2>
                            <?php
                                require_once('conexion.php');
                                $query="SELECT * FROM musica WHERE genMusic='Romantico'ORDER BY idMusic DESC LIMIT 3";
                                $execute=mysqli_query($conexion,$query) or die(mysqli_error ($conexion));
                                while($fila= mysqli_fetch_array($execute)){
                                ?>
                                <div class="col-sm-4">
                                <div class="card" >
                                    <img src="<?php echo $fila['portMusic']?>" class="d-block w-100" alt="Slide 2">
                                    <div class="carousel-caption d-none d-md-block" style="font-family: 'Times New Roman', serif; font-size: 20px;">
                                    <h3><?php echo $fila['nomMusic']?></h3>
                                    <p><?php echo $fila['artMusic']?></p>
                                    <button>boton 1 </button>
                                    </div>
                                </div>
                                </div>
                                <?php }?>
                        <!-- Agrega más slides según necesites -->
                        </div>
                        </div>

                        <div class="carousel-item">
                        <div class="row">
                        <h2 style="text-align:center">Musicas Latinas</h2>
                            <?php
                                require_once('conexion.php');
                                $query="SELECT * FROM musica WHERE genMusic='Romantico'ORDER BY idMusic DESC LIMIT 3";
                                $execute=mysqli_query($conexion,$query) or die(mysqli_error ($conexion));
                                while($fila= mysqli_fetch_array($execute)){
                                ?>
                                <div class="col-sm-4">
                                <div class="card" >
                                    <img src="<?php echo $fila['portMusic']?>" class="d-block w-100" alt="Slide 2">
                                    <div class="carousel-caption d-none d-md-block" style="font-family: 'Times New Roman', serif; font-size: 20px;">
                                    <h3><?php echo $fila['nomMusic']?></h3>
                                    <p><?php echo $fila['artMusic']?></p>
                                    <button>boton 1 </button>
                                    </div>
                                </div>
                                </div>
                                <?php }?>
                        </div>
                        </div>
                </div>
            </div>
<!-- ventana modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
            </button>
        
            <!-- Modal -->
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>

           
    </body>
</html>