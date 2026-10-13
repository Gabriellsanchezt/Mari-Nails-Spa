<?php

declare(strict_types=1);

namespace App\Models;

class Gallery
{
    /**
     * Retorna los servicios y fotografías reales del portafolio.
     */
    public static function all(): array
    {
        return [
            [
                'id'          => 1,
                'name'        => 'Manicura semi',
                'category'    => 'manicura-semi',
                'icon'        => 'fa-solid fa-hand-sparkles',
                'image'       => 'assets/img/Semipermanente.jpeg',
                'alt'         => 'Manicura semipermanente en tono vinotinto con micropuntos en Mari Nails Spa',
                'description' => 'Esmaltado semipermanente de alta duración con acabado brillante y cuidado minucioso de cutículas.',
            ],
            [
                'id'          => 2,
                'name'        => 'Nivelación',
                'category'    => 'nivelacion',
                'icon'        => 'fa-solid fa-wand-magic-sparkles',
                'image'       => 'assets/img/nivelacion.jpeg',
                'alt'         => 'Nivelación de uña natural con destellos y encapsulado en Mari Nails Spa',
                'description' => 'Alineación anatómica con base rubber para crear una superficie lisa, resistente y uniforme.',
            ],
            [
                'id'          => 3,
                'name'        => 'Nivelación Francesa',
                'category'    => 'nivelacion',
                'icon'        => 'fa-solid fa-wand-magic-sparkles',
                'image'       => 'assets/img/nivelacion 2.jpeg',
                'alt'         => 'Nivelación con manicura francesa blanca de precisión en Mari Nails Spa',
                'description' => 'Diseño francés impecable sobre uña natural nivelada con ápice equilibrado.',
            ],
            [
                'id'          => 4,
                'name'        => 'Nivelación Vinotinto & Dots',
                'category'    => 'nivelacion',
                'icon'        => 'fa-solid fa-wand-magic-sparkles',
                'image'       => 'assets/img/Nivelacion 3.jpeg',
                'alt'         => 'Nivelación con diseño francés vinotinto y micropuntos en Mari Nails Spa',
                'description' => 'Esmaltado de alta gama en tono profundo con detalles minimalistas de diseño.',
            ],
            [
                'id'          => 5,
                'name'        => 'Nivelación Baby Blue',
                'category'    => 'nivelacion',
                'icon'        => 'fa-solid fa-wand-magic-sparkles',
                'image'       => 'assets/img/nivelacion 4.jpeg',
                'alt'         => 'Nivelación en uña natural tono celeste pastel en Mari Nails Spa',
                'description' => 'Uña natural corta alineada con esmaltado suave y cutícula pulida.',
            ],
            [
                'id'          => 6,
                'name'        => 'Dual system',
                'category'    => 'dual-system',
                'icon'        => 'fa-solid fa-gem',
                'image'       => 'assets/img/Encapsulados.jpeg',
                'alt'         => 'Estructura Dual System con encapsulado holográfico en Mari Nails Spa',
                'description' => 'Moldeado rápido con curvatura perfecta, destellos holográficos y técnica Dual System.',
            ],
            [
                'id'          => 7,
                'name'        => 'Soft gel',
                'category'    => 'soft-gel',
                'icon'        => 'fa-solid fa-feather-pointed',
                'image'       => 'assets/img/Relieves y diseños 3d.jpeg',
                'alt'         => 'Sistema Soft Gel con relieves florales tridimensionales y texturas en Mari Nails Spa',
                'description' => 'Extensiones ultraligeras con arte en relieve tridimensional hecho a mano.',
            ],
            [
                'id'          => 8,
                'name'        => 'Pedicura',
                'category'    => 'pedicura',
                'icon'        => 'fa-solid fa-spa',
                'image'       => null,
                'alt'         => 'Pedicura estética y profunda en Mari Nails Spa',
                'description' => 'Tratamiento podal completo, exfoliación, remoción de asperezas y esmaltado impecable.',
            ],
            [
                'id'          => 9,
                'name'        => 'Kapping de polygel',
                'category'    => 'kapping-polygel',
                'icon'        => 'fa-solid fa-shield-halved',
                'image'       => null,
                'alt'         => 'Kapping de polygel protector en Mari Nails Spa',
                'description' => 'Capa protectora y fortalecedora sobre tu uña natural para evitar quiebres.',
            ],
            [
                'id'          => 10,
                'name'        => 'Reparación de uña',
                'category'    => 'reparacion-una',
                'icon'        => 'fa-solid fa-bandage',
                'image'       => null,
                'alt'         => 'Reparación y reconstrucción de uña en Mari Nails Spa',
                'description' => 'Reconstrucción anatómica de uñas rotas, fisuradas o débiles.',
            ],
            [
                'id'          => 11,
                'name'        => 'Retiro de sistemas y semi',
                'category'    => 'retiro-sistemas-semi',
                'icon'        => 'fa-solid fa-circle-check',
                'image'       => null,
                'alt'         => 'Retiro seguro de sistemas y semi en Mari Nails Spa',
                'description' => 'Retiro profesional con torno y técnicas cuidadosas para preservar la lámina ungueal.',
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
            ['slug' => 'nivelacion',           'name' => 'Nivelación'],
            ['slug' => 'dual-system',          'name' => 'Dual system'],
            ['slug' => 'soft-gel',             'name' => 'Soft gel'],
            ['slug' => 'kapping-polygel',      'name' => 'Kapping de polygel'],
            ['slug' => 'pedicura',             'name' => 'Pedicura'],
            ['slug' => 'reparacion-una',       'name' => 'Reparación de uña'],
            ['slug' => 'retiro-sistemas-semi', 'name' => 'Retiro de sistemas y semi'],
        ];
    }
}
