<!-- aside-->
<aside id="aside">
                <div id="login" class="block_aside">

                <?php if(!isset($_SESSION['identity'])): ?>
                    <h3>Entrar a la web </h3>
                    <form action="<?=base_url?>Usuario/login" method="post">
                        <label for="email">Email: </label>
                        <input type="email" name="email">
                        <label for="password">Password: </label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar"/>
                    </form>
                <?php else: ?>
                    <h3><?=$_SESSION['identity']->nombre?></h3>
                <?php endif; ?>
                <ul>
                    
                    <?php if(isset($_SESSION['admin'])): ?>
                    <li><a href="#">Gestionar Categorias</a></li>
                    <li><a href="#">Gestionar Productos</a></li>
                    <li><a href="#">Gestionar Pedidos</a></li>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['identity'])): ?>
                    <li><a href="#">Mis pedidos</a></li>
                    <li><a href="<?=base_url?>Usuario/logout">Cerrar sessión</a></li>
                    <?php endif; ?>
                </ul>

            
                </div>
            </aside>

            <!-- contenido central -->
            <div id="central">