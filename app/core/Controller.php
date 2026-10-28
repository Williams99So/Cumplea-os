<?php
declare(strict_types=1);

/**
 * Controlador base: renderiza vistas dentro de un layout.
 */
abstract class Controller
{
    /**
     * @param string $vista  Ruta de la vista dentro de app/views (sin .php)
     * @param array  $datos  Variables disponibles en la vista
     */
    protected function render(string $vista, array $datos = [], string $layout = 'layouts/main'): void
    {
        $archivoVista = APP_PATH . "/views/$vista.php";
        $archivoLayout = APP_PATH . "/views/$layout.php";

        if (!is_file($archivoVista) || !is_file($archivoLayout)) {
            http_response_code(500);
            echo 'Vista no encontrada.';
            return;
        }

        header('Content-Type: text/html; charset=utf-8');
        header('X-Robots-Tag: noindex, nofollow');

        // El layout imprime $contenido
        $contenido = $this->capturar($archivoVista, $datos);
        extract($datos, EXTR_SKIP);
        require $archivoLayout;
    }

    private function capturar(string $archivo, array $datos): string
    {
        extract($datos, EXTR_SKIP);
        ob_start();
        require $archivo;
        return (string) ob_get_clean();
    }
}
