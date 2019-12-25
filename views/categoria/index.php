<h1>Gestión de categorías</h1>

<a href="<?=base_url?>Categoria/crear" class="button button-small">
Crear categoría
</a>
<table>
<tr>
    <th>ID</th>
    <th>NOMBRE</th>
</tr>
<?php while($cat = $categorias->fetch_object()): ?>
<tr>
    <td><?=$cat->id;?></td>
    <td><?=$cat->nombre;?></td>
</tr>
<?php endwhile; ?>
</table>