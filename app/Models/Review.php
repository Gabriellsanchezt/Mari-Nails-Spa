<?php

declare(strict_types=1);

namespace App\Models;

class Review
{
    /**
     * Retorna opiniones reales de clientas (sin ubicaciones artificiales)
     */
    public static function all(): array
    {
        return [
            [
                'id'       => 1,
                'name'     => 'Valeria Torrealba',
                'role'     => 'Cliente habitual',
                'initials' => 'VT',
                'stars'    => 5,
                'comment'  => 'Llevo meses atendiéndome con Mariana y jamás me cambiaría. La limpieza es impecable, abre el sobre esterilizado frente a ti y las acrílicas me duran casi un mes intactas sin despegarse.',
            ],
            [
                'id'       => 2,
                'name'     => 'Camila Rodríguez',
                'role'     => 'Cliente habitual',
                'initials' => 'CR',
                'stars'    => 5,
                'comment'  => 'La Pedicura Spa es una maravilla. El masaje, el trato de Mariana y el café que te ofrece hacen que la experiencia sea de desconexión total. Salí sintiendo que caminaba en las nubes.',
            ],
            [
                'id'       => 3,
                'name'     => 'Sofía Giménez',
                'role'     => 'Cliente habitual',
                'initials' => 'SG',
                'stars'    => 5,
                'comment'  => 'Buscaba a alguien que supiera hacer diseños en tendencia y no solo cosas básicas. Mariana recreó exactamente el diseño de Pinterest que le llevé para mi evento. ¡10/10 recomendada!',
            ],
        ];
    }
}
