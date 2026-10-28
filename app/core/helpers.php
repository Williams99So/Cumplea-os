<?php
declare(strict_types=1);

/** Escapa texto para HTML. */
function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** URL de un recurso dentro de /public. */
function asset(string $ruta): string
{
    return BASE_URL . '/' . ltrim($ruta, '/');
}
