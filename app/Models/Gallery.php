<?php

declare(strict_types=1);

namespace App\Models;

class Gallery
{
    /**
     * Retorna todos los diseños fotográficos reales del portafolio
     */
    public static function all(): array
    {
        return [
            [
                'id'       => 1,
                'image'    => 'images/nail-9.jpg',
                'category' => 'acrilicas',
                'alt'      => 'Diseño de uñas Mari Nails Spa - Esculpido y estructura anatómica',
            ],
            [
                'id'       => 2,
                'image'    => 'images/nail-10.jpg',
                'category' => 'nailart',
                'alt'      => 'Diseño de uñas Mari Nails Spa - Nail Art y esmaltado de alta gama',
            ],
            [
                'id'       => 3,
                'image'    => 'images/nail-6.jpg',
                'category' => 'spa',
                'alt'      => 'Diseño de uñas Mari Nails Spa - Manicura Spa y acabado limpio',
            ],
            [
                'id'       => 4,
                'image'    => 'images/nail-5.jpg',
                'category' => 'nailart',
                'alt'      => 'Diseño de uñas Mari Nails Spa - Tendencias y estilo boutique',
            ],
            [
                'id'       => 5,
                'image'    => 'images/nail-8.jpg',
                'category' => 'nailart',
                'alt'      => 'Diseño de uñas Mari Nails Spa - Trazo fino y detalles elegantes',
            ],
            [
                'id'       => 6,
                'image'    => 'images/nail-3.jpg',
                'category' => 'nailart',
                'alt'      => 'Diseño de uñas Mari Nails Spa - Diseños en pedrería y foil',
            ],
            [
                'id'       => 7,
                'image'    => 'images/nail-11.jpg',
                'category' => 'acrilicas',
                'alt'      => 'Diseño de uñas Mari Nails Spa - Estructura almendrada impecable',
            ],
            [
                'id'       => 8,
                'image'    => 'images/nail-12.jpg',
                'category' => 'spa',
                'alt'      => 'Diseño de uñas Mari Nails Spa - Cuidado integral y brillo espejo',
            ],
        ];
    }

    /**
     * Categorías para las pestañas de filtrado
     */
    public static function getCategories(): array
    {
        return [
            ['slug' => 'all',       'name' => 'Todos los Diseños'],
            ['slug' => 'acrilicas', 'name' => 'Uñas Acrílicas & Gel'],
            ['slug' => 'nailart',   'name' => 'Nail Art & Tendencias'],
            ['slug' => 'spa',       'name' => 'Manicura & Pedicura Spa'],
        ];
    }
}
