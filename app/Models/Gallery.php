<?php

declare(strict_types=1);

namespace App\Models;

class Gallery
{
    /**
     * Retorna los servicios y especialidades del portafolio.
     * Al incorporar las fotografías originales, se asigna la ruta en 'image'.
     */
    public static function all(): array
    {
        return [
            [
                'id'          => 1,
                'name'        => 'Manicura semi',
                'category'    => 'manicura-semi',
                'icon'        => 'fa-solid fa-hand-sparkles',
                'image'       => null,
                'alt'         => 'Manicura semipermanente en Mari Nails Spa',
                'description' => 'Esmaltado semipermanente de alta duración con acabado brillante y cuidado minucioso de cutículas.',
            ],
            [
                'id'          => 2,
                'name'        => 'Pedicura',
                'category'    => 'pedicura',
                'icon'        => 'fa-solid fa-spa',
                'image'       => null,
                'alt'         => 'Pedicura estética y profunda en Mari Nails Spa',
                'description' => 'Tratamiento podal completo, exfoliación, remoción de asperezas y esmaltado impecable.',
            ],
            [
                'id'          => 3,
                'name'        => 'Nivelación',
                'category'    => 'nivelacion',
                'icon'        => 'fa-solid fa-wand-magic-sparkles',
                'image'       => null,
                'alt'         => 'Nivelación de uña natural en Mari Nails Spa',
                'description' => 'Técnica de alineación anatómica con base rubber para crear una superficie lisa, resistente y uniforme.',
            ],
            [
                'id'          => 4,
                'name'        => 'Kapping de polygel',
                'category'    => 'kapping-polygel',
                'icon'        => 'fa-solid fa-shield-halved',
                'image'       => null,
                'alt'         => 'Kapping de polygel protector en Mari Nails Spa',
                'description' => 'Capa protectora y fortalecedora sobre tu uña natural para evitar quiebres y permitir crecimiento sano.',
            ],
            [
                'id'          => 5,
                'name'        => 'Soft gel',
                'category'    => 'soft-gel',
                'icon'        => 'fa-solid fa-feather-pointed',
                'image'       => null,
                'alt'         => 'Sistema de extensiones Soft Gel en Mari Nails Spa',
                'description' => 'Extensiones completas de gel ultraligeras, flexibles y de aspecto 100% natural sin pesadez.',
            ],
            [
                'id'          => 6,
                'name'        => 'Dual system',
                'category'    => 'dual-system',
                'icon'        => 'fa-solid fa-gem',
                'image'       => null,
                'alt'         => 'Estructuras Dual System en Mari Nails Spa',
                'description' => 'Moldeado rápido con curvatura perfecta y ápice balanceado para una durabilidad y estética superior.',
            ],
            [
                'id'          => 7,
                'name'        => 'Reparación de uña',
                'category'    => 'reparacion-una',
                'icon'        => 'fa-solid fa-bandage',
                'image'       => null,
                'alt'         => 'Reparación y reconstrucción de uña en Mari Nails Spa',
                'description' => 'Reconstrucción anatómica de uñas rotas, fisuradas o débiles sin tener que cortar las demás.',
            ],
            [
                'id'          => 8,
                'name'        => 'Retiro de sistemas y semi',
                'category'    => 'retiro-sistemas-semi',
                'icon'        => 'fa-solid fa-circle-check',
                'image'       => null,
                'alt'         => 'Retiro seguro de sistemas y semi en Mari Nails Spa',
                'description' => 'Retiro profesional con torno y técnicas cuidadosas para preservar intacta la lámina ungueal.',
            ],
        ];
    }

    /**
     * Categorías oficiales para las pestañas de filtrado del portafolio
     */
    public static function getCategories(): array
    {
        return [
            ['slug' => 'all',                  'name' => 'Todos'],
            ['slug' => 'manicura-semi',        'name' => 'Manicura semi'],
            ['slug' => 'pedicura',             'name' => 'Pedicura'],
            ['slug' => 'nivelacion',           'name' => 'Nivelación'],
            ['slug' => 'kapping-polygel',      'name' => 'Kapping de polygel'],
            ['slug' => 'soft-gel',             'name' => 'Soft gel'],
            ['slug' => 'dual-system',          'name' => 'Dual system'],
            ['slug' => 'reparacion-una',       'name' => 'Reparación de uña'],
            ['slug' => 'retiro-sistemas-semi', 'name' => 'Retiro de sistemas y semi'],
        ];
    }
}
