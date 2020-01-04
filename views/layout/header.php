<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css"/>
    </head>

    <body>
    <div id="container">
    <!-- header -->
        <header id="header">
            <div id="logo">
               <img src="<?=base_url?>assets/img/camiseta.png" alt="camiseta"/> 
               <a href="<?=base_url?>" >Tienda de camisetas</a>
            </div>
            
        </header>

        <!-- menu -->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="nav">
            <ul>
                <li><a href="<?=base_url?>">Inicio</a></li>
                <?php while($cat = $categorias->fetch_object()): ?>
                <li><a href="<?=base_url?>Categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a></li>
                <?php endwhile; ?>
            </ul>
        </nav>

        <!-- contenido -->
        <div id="contenido">