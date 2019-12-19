<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>

    <body>
    <div id="container">
    <!-- header -->
        <header id="header">
            <div id="logo">
               <img src="assets/img/camiseta.png" alt="camiseta"/> 
               <a href="index.php" >Tienda de camisetas</a>
            </div>
            
        </header>

        <!-- menu -->
        <nav id="nav">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Categoria 1</a></li>
                <li><a href="#">Categoria 2</a></li>
                <li><a href="#">Categoria 3</a></li>
                <li><a href="#">Categoria 4</a></li>
                <li><a href="#">Categoria 5</a></li>
            </ul>
        </nav>

        <!-- contenido -->
        <div id="contenido">
            <!-- aside-->
            <aside id="aside">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web </h3>
                    <form action="#" method="post">
                        <label for="email">Email: </label>
                        <input type="email" name="email">
                        <label for="password">Password: </label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar"/>
                    </form>
                </div>
                <ul>
                <li><a href="#">Mis pedidos</a></li>
                <li><a href="#">Gestionar categorias</a></li>
                <li><a href="#">Gestionar pedidos</a></li>
                </ul>
            </aside>

            <!-- contenido central -->
            <div id="central">
                <h1>Productos destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="camiseta"/>
                    <h2>Camiseta Azul ancha</h2>
                    <p>30 euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" alt="camiseta"/>
                    <h2>Camiseta Azul ancha</h2>
                    <p>30 euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" alt="camiseta"/>
                    <h2>Camiseta Azul ancha</h2>
                    <p>30 euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" alt="camiseta"/>
                    <h2>Camiseta Azul ancha</h2>
                    <p>30 euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
        </div>

    

        <footer id="footer">
            <p>Proyecto desarrollado por Samuel Lopez &copy; <?=date('Y'); ?> </p>
        </footer>
</div>

    </body>
</html>