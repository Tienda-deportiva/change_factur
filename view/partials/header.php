<header>
	<!-- MAIN HEADER -->
	<div id="header">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- LOGO -->
				<div class="col-md-3">
					<div class="header-logo">
						<a href="#" class="logo">
							<img src="./img/logo3.jpg" style="border-radius:50%;" alt=""> <!--beatriz-->
						</a>
					</div>
				</div>
				<!-- /LOGO -->

				<!-- SEARCH BAR -->
				<div class="col-md-6">
					<div class="header-search">
						<form>
							<select class="input-select">
								<option value="0">Deportes</option> <!--beatriz-->
								<option value="1">Articulos</option> <!--beatriz-->
								<option value="1">Ropa</option> <!--beatriz-->
							</select>
							<input class="input" placeholder="Buscar aquí..."> <!--beatriz-->
							<button class="search-btn" href="<?php echo ""; ?>">Buscar</button> <!--beatriz-->
						</form>
					</div>
				</div>
				<!-- /SEARCH BAR -->

				<!-- ACCOUNT -->
				<div class="col-md-3 clearfix">
					<div class="header-ctn">
						<!-- Wishlist -->
						<!--Yecid-->
						<div>
                            <a href="login.php">
                                <i class="fa fa-user" ></i>          
                            </a>
                            <span style="color: white;" class="text-center"><?php echo @$_SESSION['nombre']?></span>
                            <?php
                                if (isset($_SESSION['id'])) {
                            ?>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cog" style="color: red;"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo "administrador.php" ?>">Administrar Tienda</a></li>
                                    
                                    <li><a href="<?php echo getUrl("Usuarios","Usuarios","getUpdate") ?>">Configuración</a></li>

                                    <li><a href="<?php echo getUrl("Acceso","Acceso","logout") ?>">Cerrar Sesion</a></li>
                                </ul>
			                </div>
                            <?php 
                            }else{
                            ?>
                                <span style="color: white;">Mi cuenta</span>
                            <?php 
                            }
                            ?>
                        </div>
						<!-- /Wishlist -->
						<!--/yecid-->
						<!-- Cart -->
                        <!--juan agrege la url de php para la consulta en php y comento para realizar el carrito abajo de la tarjeta-->
                        <div class="dropdown">
                            <!--juan elimine una class dropdown-toggle, data-toggle dropdown y aria-expanded true para enviar directamente al consult php-->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Carrito</span>
                                <!-- juan comente esta linea de codigo de la linea 52 al 87 para enviar directamente al consult.php -->
                                <!-- <div class="qty" id="cant_prod">0</div> -->
                            </a>
                            <!-- juan comente esta linea de codigo de la linea 58 al 90 para enviar directamente al consult.php -->
                            <div class="cart-dropdown" style="width: 430px;">
                                <!-- <div class="cart-list lista-carrito" id="lista-carrito"> -->                                                           
                                    <!-- <div class="product-widget"> -->
                                        <!--juan aqui empiezo a copiar el form de la lista de carrito -->
                                        <div class="bg-light p-4 rounded-lg m-4 mt-3">
                                            <h3 style="margin-left: 20px">Lista del Carrito</h3>
                                            <form action="<?php echo getUrl("Carrito","Carrito","getInsert"); ?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-4" style="margin-left: 20px">
                                                        <label for="my-input" style="margin-left: 20px">Mis Productos</label>
                                                            <table class="mt-3 table table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Producto</th>
                                                                        <th>Nombre</th>
                                                                        <th>Cantidad</th>
                                                                        <th>Precio</th>
                                                                        <th>Quitar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="tbody">
                                                                    <!-- <tr>
                                                                        <td class="table__productos"><img src=${item.img} alt="" class="img" style="width: 60px"></td>
                                                                        <td><p class="product-name">${item.title}</p></td>
                                                                        <td><input type="number" style="width: 50px" min="1" name="cant_prod" id="cant" class="input__elemento table__cantidad" value=${item.amount}></td>
                                                                        <td>${item.price}</td>
                                                                        <td><button type="button" class="btn btn-danger delete"><i class="fa fa-trash"></i></button></td>
                                                                    </tr> -->
                                                                </tbody>
                                                            </table>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col" style="padding-left: 15px;">
                                                                <h3 class="itemCartTotal">SubTotal: 0</h3>
                                                            </div>
                                                            <div class="col d-flex justify-content-end" style="padding-left: 15px;">
                                                                <input type="submit" value="Comprar" class="btn btn-success">
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- aqui Comento esto para probar con el form de la lista de carrito -->
                                        <!-- <div class="product-img">
                                            <img src="./img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#" id="name_prod" data-id="1">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty" id="cant_prod_selected">1x</span id="prec_prod">$980.00</h4>
                                        </div>
                                        <button class="delete" id="vaciar-carrito"><i class="fa fa-close"></i></button> --> 
                                    <!-- </div> -->
                                    <!-- juan comente esta linea --> 
                                    <!-- <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product02.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div> -->
                                <!-- </div> -->                    
                                <!-- <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5 class="itemCartTotal">Total: 0</h5> 
                                </div>
                                <div class="cart-btns" style="width: 607px;">
                                    <a href="#">View Cart</a>
                                    <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a> 
                                </div> -->                 
                            </div>
                        </div>
                        <!-- /Cart -->

						<!-- Menu Toogle -->
						<div class="menu-toggle">
							<a href="#">
								<i class="fa fa-bars"></i>
								<span>Menu</span>
							</a>
						</div>
						<!-- /Menu Toogle -->
						   <!--Yecid-->
                    <!--/yecid-->
					</div>
				</div>
				<!-- /ACCOUNT -->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>
	<!-- /MAIN HEADER -->
</header>