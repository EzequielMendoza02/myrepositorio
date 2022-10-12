<?php 
    include './conexion.php';
    $conexion = conexion();
    $idProducto = $_POST['id'];
    $sql = "DELETE FROM productos WHERE id = '$idProducto'";
    $result = mysqli_query($conexion,$sql);
    
    if ($result) {
        header('location:../index.php');
    }else{
        echo 'No se pudo eliminar :(';
    }
?>