<?php
require_once('conexion.php');
if(empty($_POST['nom'])|| empty($_POST['art'])){
    echo " porfavor llene los campos";

}else{
    // Guardar la imagen en el servidor
    $nombreImagen = $_FILES['port']['name'];
    $rutaImagen = "imagenes/" . $nombreImagen;
    move_uploaded_file($_FILES['port']['tmp_name'], $rutaImagen);
    //Guardar audio en el servidor
    $nomAudio = $_FILES['aud']['name'];
    $rutaAudio = "imagenes/" . $nomAudio;
    move_uploaded_file($_FILES['aud']['tmp_name'], $rutaAudio);
    //$portada=addslashes(file_get_contents($_FILES['port']['tmp_name']));
    $nombre=$_POST['nom'];
    $artista=$_POST['art'];
    //$audio=addslashes(file_get_contents($_FILES['aud']['tmp_name']));
    $genero=$_POST['gen'];
    
    $fecha=date('Y-m-d H:i:s');
    $query="INSERT INTO musica(portMusic,nomMusic,artMusic,audMusic,genMusic,fecMusic) VALUES('$rutaImagen','$nombre','$artista','$rutaAudio','$genero','$fecha')";
    $resultado=$conexion->query($query);
    if($resultado){
        echo "correcto";
    }else{
        echo "error de insercion";
    }
}




?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registrar Musica</title>
        <link rel="stylesheet" type="text/css" href="styles/busqueda.css">
    </head>
    <body>
    <div>
        <h1>Ingresar Datos</h1>
        <form method="POST" enctype="multipart/form-data">
             <label>Portada</label>
            <input type="file" name="port" required=""><br><br>
            <label>Nombre de la musica</label>
            <input type="text" name="nom"><br><br>
            <label>Nombre del artista</label>
            <input type="text" name="art"><br><br>
            <label>Audio</label>
            <input type="file" name="aud" required=""><br><br>
            <label>Genero de la musica</label>
            <input type="text" name="gen"><br><br>
           
            <input type="submit" name="Guardar" values="Guardar">
            <button><a href="consulta.php">Consultar</a></button>
        </form>
    </div>
    </body>
</html>