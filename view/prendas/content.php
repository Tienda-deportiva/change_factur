<?php 
    include_once '../model/MasterModel.php';
?>
<div class="col-md-4 col-xs-8"> <!--beatriz-->
<br><br>
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/prendas/uniformes.jpg" class="imagen" alt="" height="450px" width="350px"> <!--beatriz-->
                    </div>
                    <div class="shop-body">
                        <h3>Uniformes</h3> <!--beatriz-->
                        <!-- <a href="" class="cta-btn">Compra ahora<i class="fa fa-arrow-circle-right"></i></a> beatriz--> 
                    </div>
                </div>
            </div>
            <!-- /shop -->
            
            <!-- shop -->
            <br><br>
            <div class="col-md-4 col-xs-8"> <!--beatriz-->
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/prendas/busos.jpg" alt="" height="210px" width="350px"> <!--beatriz-->
                    </div>
                    <div class="shop-body">
                        <h3>Busos</h3> <!--beatriz-->
                        <br><br>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-8"> <!--beatriz-->
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/prendas/pantalones.jpg" alt="" class="mt-5" height="210px" width="350px"> <!--beatriz-->
                    </div>
                    <div class="shop-body">
                        <h3>Pantalones</h3> <!--beatriz-->
                        <br><br>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <br><br>
            <div class="col-md-4 col-xs-8"> <!--beatriz-->
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/prendas/zapatos.jpg" alt="" height="210px" width="350px"> <!--beatriz-->
                    </div>
                    <div class="shop-body">
                        <h3>Zapatos</h3> <!--beatriz-->
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <br><br>
            <div class="col-md-4 col-xs-8"> <!--beatriz-->
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/prendas/accesorios.jpg" alt="" height="210px" width="350px"> <!--beatriz-->
                    </div>
                    <div class="shop-body">
                        <h3>Accesorios</h3> <!--beatriz-->
                    </div>
                </div>
            </div>
            <!-- /shop -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

   <!-- section title -->
   <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Productos</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                        <li class="active"><a data-toggle="aereo.php" href="aereo.php">Aereo</a></li>
                            <li><a data-toggle="terrestre.php" href="terrestre.php">Terrestre</a></li>
                            <li><a data-toggle="acuatico.php" href="acuatico.php">Acuático</a></li>
                            <li><a data-toggle="grupal.php" href="grupal.php">Grupal</a></li>
                            <li><a data-toggle="prendas.php" href="prendas.php">Prendas de Vestir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

         
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->
                                <?php 
                                    $obj=new MasterModel();
                                    $sql= "SELECT inv.cod_inv,inv.nom_prod_inv,inv.precio_prod_inv,inv.img_prod_inv, cat.nom_categ 
                                    FROM inventario_productos AS inv, categorias AS cat WHERE inv.cod_categ=cat.cod_categ AND nom_categ='Prendas'
                                    ORDER BY cod_inv";
                                    $productos =$obj->consult($sql);
                                    if(mysqli_num_rows($productos)>0){ 
                                        while($prod = mysqli_fetch_assoc($productos)){
                                ?>
                                <input type="hidden" name="cod_inv" id="codigo" value="<?php echo $prod['cod_inv'] ?>">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="<?php echo $prod['img_prod_inv'];?>" alt="" class="img" style="height:300px;">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $prod['nom_categ']?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $prod['nom_prod_inv']; ?></a></h3>
                                        <h4 class="product-price"><?php echo $prod['precio_prod_inv'];?></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!-- <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div> -->
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn button"><i class="fa fa-shopping-cart"></i>agregar al carrito</button>
                                    </div>
                                </div>
                                <?php } }else{ ?>
                                <p>Producto(s) no existe.....</p>
                                <?php 
                                    }
                                ?>
                                <!-- /product -->

                            </div><br><br>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->