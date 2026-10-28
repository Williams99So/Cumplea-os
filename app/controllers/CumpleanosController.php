<?php
declare(strict_types=1);

final class CumpleanosController extends Controller
{
    private CumpleanosModel $modelo;

    public function __construct()
    {
        $this->modelo = new CumpleanosModel();
    }

    /** Experiencia completa: bienvenida → inicio → galería → personajes → carta → final. */
    public function index(): void
    {
        $this->render('cumpleanos/experiencia', [
            'titulo'    => 'Para mi niña hermosa ❤️',
            'carta'     => $this->modelo->carta(),
            'fotos'     => $this->modelo->fotos(),
            'zonas'     => $this->modelo->zonas(),
            'mensajes'  => $this->modelo->mensajesCorazones(),
            'musica'    => $this->modelo->musica(),
        ]);
    }
}
