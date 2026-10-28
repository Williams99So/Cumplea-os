<?php
declare(strict_types=1);

/**
 * Modelo: contiene todo el contenido del regalo (sin base de datos, no hace falta).
 * Aquí se pueden editar textos, frases y personajes sin tocar el diseño.
 */
final class CumpleanosModel
{
    /** Carta completa, tal como fue escrita: no resumir ni quitar párrafos. */
    public function carta(): array
    {
        return [
            'Hola, mi amor. ❤️ Feliz cumpleaños, mi niña hermosa. 🥹❤️',
            'Sé que este día es muy importante para ti, y también lo es para mí, porque me hace feliz poder ser parte de tu cumpleaños, aunque no sea de la manera en que me gustaría. No sabes cuánto me duele que por ahora la distancia nos esté separando y no poder estar a tu lado para abrazarte, darte un beso y decirte en persona lo mucho que te amo.',
            'De verdad, quiero pasar contigo todos los cumpleaños que nos quedan por delante, estar a tu lado en tus días especiales y también en los días normales, porque no quiero compartir contigo solamente los momentos bonitos, sino todo lo que la vida nos tenga preparado.',
            'Gracias por permitirme seguir siendo parte de tu vida, por darme un lugar en ella y por dejarme seguir compartiendo momentos contigo. A veces siento que las palabras me quedan cortas para explicarte cuánto te amo y lo importante que eres para mí.',
            'Espero de todo corazón que pronto podamos estar juntitos, que esta distancia deje de separarnos y que pueda darte en persona todos esos abrazos, besos y todo el amor que por ahora solo puedo darte a través de una pantalla.',
            'Hoy quisiera estar ahí contigo, hacerte sentir la chica más feliz del mundo y poder abrazarte hasta que no quieras soltarme. Por ahora, solo me queda desearte un cumpleaños muy bonito y recordarte que, a pesar de la distancia, te llevo conmigo y te amo muchísimo.',
            'Feliz cumpleaños, mi amor. ❤️ Espero poder celebrar muchísimos cumpleaños más contigo y que algún día recordemos esta distancia como una etapa que logramos superar juntos. Te amo muchísimo, mi niña. ❤️',
        ];
    }

    /** Fotografías del álbum (nombres de archivo originales, sin renombrar). */
    public function fotos(): array
    {
        $definicion = [
            ['amor1.jpg', "Mi persona favorita\u{00A0}❤️", 'Mi persona favorita'],
            ['amor2.jpg', "Mi niña traviesa y hermosa\u{00A0}✨", 'Mi niña traviesa y hermosa'],
            ['amor3.jpg', 'Qué bonito es tenerte en mi vida.', 'Qué bonito es tenerte en mi vida'],
            ['amor4.jpg', 'Mi lugar favorito siempre será contigo.', 'Mi lugar favorito siempre será contigo'],
            ['amor5.jpg', "Te llevo conmigo, siempre.\u{00A0}💕", 'Te llevo conmigo, siempre'],
            ['amor6.jpg', 'Mi niña hermosa, hoy y siempre.', 'Mi niña hermosa, hoy y siempre'],
        ];

        $fotos = [];
        foreach ($definicion as $i => [$archivo, $frase, $alt]) {
            $ruta = PUBLIC_PATH . '/img/' . $archivo;
            if (!is_file($ruta)) {
                continue; // nunca mostramos una foto rota
            }
            [$ancho, $alto] = $this->dimensionesVisibles($ruta);
            $fotos[] = [
                'archivo'     => 'img/' . $archivo,
                'frase'       => $frase,
                'alt'         => 'Mi enamorada: ' . $alt,
                'ancho'       => $ancho,
                'alto'        => $alto,
                'orientacion' => $ancho > $alto ? 'horizontal' : 'vertical',
                'numero'      => $i + 1,
            ];
        }
        return $fotos;
    }

    /** Personajes y gustos, agrupados por "zona" del mundo de fantasía. */
    public function zonas(): array
    {
        return [
            [
                'id'     => 'cuentos',
                'titulo' => 'Cuentos y princesas',
                'frase'  => 'Donde los finales felices existen',
                'items'  => [
                    ['id' => 'sofia', 'nombre' => 'Princesa Sofía', 'lema' => 'Princesa de cuento', 'tema' => 'lila',
                     'mensaje' => 'Para mí, tú eres la princesa de mi cuento. Tienes un corazón tan bonito que ilumina todo lo que toca.'],
                    ['id' => 'rapunzel', 'nombre' => 'Rapunzel', 'lema' => 'Luces y sueños', 'tema' => 'dorado',
                     'mensaje' => 'Aunque la distancia nos separe, mi cariño es como esas lucecitas que siempre encuentran el camino hacia ti.'],
                ],
            ],
            [
                'id'     => 'ternura',
                'titulo' => 'Ternura y unicornios',
                'frase'  => 'Abrazos suaves y magia de colores',
                'items'  => [
                    ['id' => 'ositos', 'nombre' => 'Ositos Cariñositos', 'lema' => 'Abrazos apretaditos', 'tema' => 'rosa',
                     'mensaje' => 'Hoy te mando el abrazo más grande y apretadito que existe, hasta que pueda dártelo en persona.'],
                    ['id' => 'unicornio', 'nombre' => 'Unicornios', 'lema' => 'Pura magia', 'tema' => 'arcoiris',
                     'mensaje' => 'Eres tan única y especial como un unicornio: magia pura. No hay nadie como tú, mi amor.'],
                ],
            ],
            [
                'id'     => 'heroinas',
                'titulo' => 'Heroínas y magia',
                'frase'  => 'Fuerza, brillo y mucho poder',
                'items'  => [
                    ['id' => 'malefica', 'nombre' => 'Maléfica', 'lema' => 'Elegancia y poder', 'tema' => 'esmeralda',
                     'mensaje' => 'Hay una fuerza elegante en ti: sabes ser dulce y también muy poderosa. Me encanta eso de ti.'],
                    ['id' => 'escarlata', 'nombre' => 'Bruja Escarlata', 'lema' => 'Magia escarlata', 'tema' => 'rojo',
                     'mensaje' => 'Si mi amor por ti tuviera poderes, ya habría cruzado todas las distancias para estar contigo.'],
                    ['id' => 'capitana', 'nombre' => 'Capitana Marvel', 'lema' => 'Brillar y volar alto', 'tema' => 'azul',
                     'mensaje' => 'Brillas con luz propia y puedes llegar tan lejos como quieras. Vuela alto, mi amor: yo te aplaudo siempre.'],
                    ['id' => 'maravilla', 'nombre' => 'Mujer Maravilla', 'lema' => 'Valentía y verdad', 'tema' => 'oro',
                     'mensaje' => 'Tu fuerza y tu corazón me inspiran. Eres valiente, mi niña hermosa, y creo muchísimo en ti.'],
                ],
            ],
        ];
    }

    /** Mensajes que aparecen al tocar los corazones decorativos. */
    public function mensajesCorazones(): array
    {
        return [
            'Te amo muchísimo ❤️',
            'Eres mi persona favorita 💕',
            'Gracias por existir, mi niña hermosa ✨',
            'Pienso en ti todo el día 🥹',
            'Algún día te abrazaré muy fuerte 🤗',
            'Contigo, todo es más bonito 🌸',
            'Mi corazón es tuyo 💖',
        ];
    }

    /** Devuelve la canción de public/audio si existe (mp3, ogg, m4a o wav). */
    public function musica(): ?string
    {
        foreach (['mp3', 'ogg', 'm4a', 'wav'] as $extension) {
            $archivos = glob(PUBLIC_PATH . '/audio/*.' . $extension) ?: [];
            if ($archivos) {
                sort($archivos);
                return 'audio/' . basename($archivos[0]);
            }
        }
        return null;
    }

    /**
     * Dimensiones tal como las ve el navegador (aplicando la orientación EXIF),
     * sin modificar nunca el archivo original.
     *
     * @return array{0:int,1:int}
     */
    private function dimensionesVisibles(string $ruta): array
    {
        $info = @getimagesize($ruta);
        if ($info === false) {
            return [3, 4];
        }
        [$ancho, $alto] = $info;
        if (in_array($this->orientacionExif($ruta), [5, 6, 7, 8], true)) {
            [$ancho, $alto] = [$alto, $ancho];
        }
        return [(int) $ancho, (int) $alto];
    }

    /** Lee la etiqueta de orientación EXIF de un JPEG (1-8) sin depender de la extensión exif. */
    private function orientacionExif(string $ruta): int
    {
        $f = @fopen($ruta, 'rb');
        if (!$f) {
            return 1;
        }
        try {
            if (fread($f, 2) !== "\xFF\xD8") {
                return 1;
            }
            while (!feof($f)) {
                $cabecera = fread($f, 4);
                if (strlen($cabecera) < 4 || $cabecera[0] !== "\xFF") {
                    return 1;
                }
                $marcador = ord($cabecera[1]);
                $longitud = unpack('n', substr($cabecera, 2, 2))[1];
                if ($marcador === 0xE1) { // APP1 (EXIF)
                    $datos = fread($f, $longitud - 2);
                    if (substr($datos, 0, 6) !== "Exif\0\0") {
                        return 1;
                    }
                    $tiff = substr($datos, 6);
                    $le = substr($tiff, 0, 2) === 'II';
                    $u16 = static fn(string $s): int => unpack($le ? 'v' : 'n', $s)[1];
                    $u32 = static fn(string $s): int => unpack($le ? 'V' : 'N', $s)[1];
                    $ifd = $u32(substr($tiff, 4, 4));
                    $entradas = $u16(substr($tiff, $ifd, 2));
                    for ($i = 0; $i < $entradas; $i++) {
                        $entrada = substr($tiff, $ifd + 2 + $i * 12, 12);
                        if ($u16(substr($entrada, 0, 2)) === 0x0112) {
                            return $u16(substr($entrada, 8, 2));
                        }
                    }
                    return 1;
                }
                if ($marcador === 0xDA) { // inicio de datos de imagen
                    return 1;
                }
                fseek($f, $longitud - 2, SEEK_CUR);
            }
        } finally {
            fclose($f);
        }
        return 1;
    }
}
