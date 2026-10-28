<?php
/**
 * Vista principal: ensambla las secciones de la experiencia.
 * @var array $carta
 * @var array $fotos
 * @var array $zonas
 */
require __DIR__ . '/bienvenida.php';
?>
<main id="contenido">
    <?php require __DIR__ . '/inicio.php'; ?>
    <?php require __DIR__ . '/galeria.php'; ?>
    <?php require __DIR__ . '/personajes.php'; ?>
    <?php require __DIR__ . '/carta.php'; ?>
    <?php require __DIR__ . '/final.php'; ?>
</main>
