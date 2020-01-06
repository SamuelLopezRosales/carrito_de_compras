
<?php if(isset($_SESSION['identity'])): ?>
    <h1>Hacer pedido</h1>
    <p>
    <a href="<?=base_url?>Carrito/index">Ver los productos y el precio del pedido</a>
   </p>

   <br/>

   <h3>Dirección para el envio:</h3>
   <form action="<?=base_url.'Pedido/add'?>" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required />

        <label for="localidad">Cuidad</label>
        <input type="text" name="localidad" required/>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required/>

        <input type="submit" value="confirmar pedido" />
</form>
<?php else: ?>
    <h1>Necesitas estar identificado</h1>
    <p>necesitas estar logueado en la web para realizar tu pedido</p>
<?php endif; ?>