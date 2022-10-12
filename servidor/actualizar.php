<?php 
    include './conexion.php';
    $conexion = conexion();
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $idProducto = $_POST['id'];
    $sql = "UPDATE productos SET marca='$marca',
                        modelo = '$modelo',
                        precio = '$precio'
                        WHERE id='$idProducto'";

    $result = mysqli_query($conexion,$sql);
    if ($result){
        header ('location:../index.php');
    }else{
        echo 'No se pudo :(';
    }
?>