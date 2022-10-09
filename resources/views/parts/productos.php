<?php if (isset($_SESSION['usuario'])) : ?>
    <div class="row">
        <p>
            <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Crear producto
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="javascript:void(0)" method="post" id="formProducto" class="row" enctype="multipart/form-data">
                    <div class="col-md-4">
                        <label for="">Producto: </label> <input type="text" name="producto" id="producto" class="form-control" placeholder="Nombre del producto">
                    </div>
                    <div class="col-md-3">
                        <label for="">Stock: </label> <input type="number" name="stock" id="producto" class="form-control" placeholder="Cantidad">
                    </div>
                    <div class="col-md-3">
                        <label for="">Imagen: </label> <input type="file" name="imagen" id="producto" class="form-control" accept="image/*">
                    </div>
                    <div class="col-md-2"><br>
                        <input type="hidden" name="metodo" value="crearProducto">
                        <button class="btn btn-success"><b>+</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div><br>
<?php endif; ?>
<div class="row">
    <?php foreach ($_POST['productos'] as $productos) : ?>
        <div class="col-md-4">
            <div class="card mx-auto shadow" style="width: 18rem;">
                <img width="296px" height="170px" src="http://localhost/catalogo/public/images/<?php echo $productos['producto'] ?>.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $productos['producto']; ?></h5>
                    <p class="card-text"><b>Stock: </b><?php echo $productos['stock']; ?></p>
                    <?php if (isset($_SESSION['usuario'])) : ?>

                        <div class="row">
                            <div class="col-md-6">
                                <a data-id="<?php echo $productos['id']; ?>" href="#" class="editar btn btn-primary">Editar</a>
                            </div>
                            <div class="col-md-6">
                                <a data-id="<?php echo $productos['id']; ?>" href="#" class="eliminar btn btn-danger">Eliminar</a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>