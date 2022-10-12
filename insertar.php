
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Insertar Nuevo Producto
</button>
<br>

<!-- Modal -->
<form action="./servidor/insertar.php" method="post">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Guardar Nueva Persona</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" placeholder="Marca" required class="form-control">
                
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" placeholder="Modelo" required class="form-control">

                <label for="precio">Precio</label>
                <input type="text" name="precio" placeholder="Precio" required class="form-control">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary">Insertar</button>
        </div>
        </div>
    </div>
</div>
</form>