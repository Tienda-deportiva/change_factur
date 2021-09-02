<div class="bg-light p-5 rounded-lg m-4 mt-3">
    <h3 style="margin-left: 20px">Registrar Lista</h3>
</div>
<form action="<?php echo getUrl("Carrito","Carrito","postInsert")?>" method="post">
    <div class="row">
        <div class="col-md-4" style="margin-left: 20px">
            <label for="my-input" style="margin-left: 20px">Productos</label>
                <table class="mt-3 table table-striped table-hover">
                    <thead>
                        <th>ID Detalle</th>
                        <th>ID Factura</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total Producto</th>
                    </thead>
                    <tbody>
                        <td><input type="number" name="cod_fact_prod" readonly value="<?php echo $_POST['cod_fact_prod'];?>"></td>
                        <td><input type="number" name="cod_fact" readonly value="<?php echo $_POST['cod_fact'];?>"></td>
                        <input type="hidden" name="cod_inv" readonly value="<?php echo $_POST['cod_inv'];?>">
                        <td><input type="text" name="nom_prod_inv" value="<?php echo $_POST['nom_prod_inv'];?>"></td>
                        <td><input type="number" name="cant_vendida" readonly value="<?php echo $_POST['cant_vendida'];?>"></td>
                        <td><input type="number" name="precio_prod_inv" readonly value="<?php echo $_POST['precio_prod_inv'];?>"></td>                       
                        <td><input type="number" name="total_prod" readonly value="<?php echo $_POST['total_prod'];?>"></td>                    
                    </tbody>
                </table>
                <div class="row">
                    <div class="form-group col-md-pull-4" style="margin-left: 40px;">
                        <input type="submit" value="Enviar" class="btn btn-success col-md-3 limp">
                    </div>
                </div>
        </div>
    </div>
</form>