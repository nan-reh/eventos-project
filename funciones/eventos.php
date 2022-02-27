<?php

function listar()
    {
        $con = conectar();
        $sql = "SELECT 
                    id, fecha, titulo, 
                    descripcion, imagen, estado 
                FROM event";

         $event = mysqli_query( $con, $sql );
    return $event;
}

function eliminar()
{
        $id = $_POST['id'];
        $con = conectar();
        $sql = "DELETE FROM event 
                WHERE id = ".$id;
        $resultado = mysqli_query( $con, $sql )
                    or die(mysqli_error( $con ));
    return $resultado;
}

function verporid()
{

        $id = $_GET['id'];
        $con = conectar();
        $sql = "SELECT 
                        id, fecha, titulo, 
                        descripcion, imagen, estado 
                    FROM event 
                        WHERE id = ".$id;

        $resultado = mysqli_query( $con, $sql )
                            or die( mysqli_error( $con ) );
        $event = mysqli_fetch_assoc( $resultado );
        return $event;
}

function modificar()
{
                $id = $_POST['id'];
                $fecha = $_POST['fecha'];
                $titulo = $_POST['titulo'];
                $descripcion = $_POST['descripcion'];
                $imagen = subirImagen();
                $estado = $_POST['estado'];
                
                
                $con = conectar();
                $sql = "UPDATE `event` SET  
                                fecha       = '$fecha', 
                                titulo      = '$titulo', 
                                descripcion = '$descripcion',
                                imagen      = '".$imagen."',
                                estado      = '$estado'
                                WHERE id    = ".$id;
                $resultado = mysqli_query( $con, $sql )
                                        or die(mysqli_error( $con ));
                return $resultado;
}

function subirImagen()
{

    //si no enviaron archivo en agregar
    $imagen = 'noDisponible.jpg';

    //si ya tiene imagen en modificar
    if( isset($_POST['imgActual']) ){
        $imagen = $_POST['imgActual'];
    }

    //si enviaron archivo en ambos
    if( $_FILES['imagen']['error'] == 0 ){
        
        //ruta y nombre temporal
        $ruta = 'imagenes\\';
        $tmp = $_FILES['imagen']['tmp_name'];
        $original = $_FILES['imagen']['name'];
        //renombramos archivo: contatenamos time.extension
        //$nTime = time();
        $extension = pathinfo($original, PATHINFO_EXTENSION );
        $imagen = time().'.'.$extension;

        //subimos archivo
        move_uploaded_file( $tmp, $ruta.$imagen );
    }
    return $imagen;
}

function agregarEvento()
{

    //$id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $imagen = subirImagen();
    $estado = $_POST['estado'];
    
    $con = conectar();

        $sql = "INSERT INTO `event` 
                        VALUES(  
                                DEFAULT,
                               '$fecha', 
                               '$titulo', 
                               '$descripcion', 
                               '$imagen', 
                               '$estado' 
                              )";
        $resultado = mysqli_query( $con, $sql )
                            or die( mysqli_error( $con ) );
        return $resultado;
}



/*function grafica()
{
    if(isset($_GET["start"]) && isset($_GET["end"])){
    $con = conectar();
    $sql = "SELECT *,count(*) as cx from event where fecha>=\"$_GET[start]\" and fecha<=\"$_GET[end]\" group by fecha";
     $query  = $con->query($sql);
        $data = array();
       while($r = $query->fetch_object()){
        $data[] = $r;
//print_r($data);

        $resultado = mysqli_query( $con, $sql )
        or die(mysqli_error( $con ));
        return $resultado;
        }
    }
}
}*/


?>