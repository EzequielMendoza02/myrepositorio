<?php 
    include './conexion.php';
    $conexion = conexion();
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $sql = "INSERT INTO productos (
                        modelo,
                        precio,
                        marca) 
        VALUES ('$modelo',
                '$precio',
                '$marca')";
    //Ejecutamos el sql
    $result = mysqli_query($conexion,$sql);
    if ($result){
        header ('location:../index.php');
    }else{
        echo 'No se pudo :(';
    }
?>