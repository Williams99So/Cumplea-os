<?php
declare(strict_types=1);

/**
 * Router mínimo: asocia un nombre de ruta (?r=nombre) con [Controlador, acción].
 * Cualquier ruta desconocida lleva a la experiencia principal.
 */
final class Router
{
    /** @var array<string, array{0:class-string,1:string}> */
    private array $rutas = [];

    public function get(string $nombre, array $manejador): void
    {
        $this->rutas[$nombre] = $manejador;
    }

    public function despachar(string $nombre): void
    {
        $manejador = $this->rutas[$nombre] ?? $this->rutas['inicio'];
        [$clase, $accion] = $manejador;
        (new $clase())->$accion();
    }
}
