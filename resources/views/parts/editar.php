<div class="row">
    <form id="actualizarProductos" action="javascript:void(0)" method="post">
        <label for="">Producto:</label>
        <input class="form-control" name="producto" type="text" value="<?php echo $_POST['producto'] ?>">
        <label for="">Stock</label>
        <input class="form-control" name="stock" type="number" value="<?php echo $_POST['stock'] ?>"><br>
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
        <input type="hidden" name="metodo" value="actualizarProductos">
        <button class="btn btn-success">Actualizar</button>
    </form><br>
</div>