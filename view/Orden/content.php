<body>

    
    <div class="container">
        
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre del producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                            while($orden=mysqli_fetch_assoc($ordenes)){
                                echo "<tr>";
                                    echo "<td>".$orden['nom_prod_inv']."</td>";
                                    echo "<td>".$orden['precio_prod_inv']."</td>";
                                    echo "<td>".$orden['cant_vendida']."</td>";
                                    echo "<td>".$orden['total_prod']."</td>";
                                echo "</tr>";
                            }
                       ?>
                    </tbody>
                    
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h3>Detalles del comprador</h3>
                <p>a</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
            </div>
            
        </div>
        
      
        
    </div>
    

</body>