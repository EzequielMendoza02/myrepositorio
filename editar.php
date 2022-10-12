<?php

    include "./servidor/conexion.php";
    $conexion = conexion();
    $idProducto = $_POST['id'];
    $sql ="SELECT * FROM productos WHERE id='$idProducto'";
    $result = mysqli_query($conexion, $sql);
    $datos = mysqli_fetch_array($result);
    
?>
<?php include "./header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h2>Editar Producto</h2>
        <form action="./servidor/actualizar.php" method="post">
        <input type="text" name="id" value="<?php echo $datos['id']; ?>" hidden>

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" placeholder="Marca" required class="form-control" value="<?php echo $datos['marca']?>">
        
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" placeholder="Modelo" required class="form-control" value="<?php echo $datos['modelo']?>">
        
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" placeholder="Precio" required class="form-control" value="<?php echo $datos['precio']?>">
        
        <br>
        <button class="btn btn-warning">Actualizar</button>
        <a href="./index.php" class="btn btn-info">Regresar</a>
    </form>
        </div>
    </div>
</div>

<?php include "./footer.php"; ?>