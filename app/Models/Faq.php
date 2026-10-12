<?php

declare(strict_types=1);

namespace App\Models;

class Faq
{
    /**
     * Preguntas frecuentes orgánicas
     */
    public static function all(): array
    {
        return [
            [
                'question' => '¿Con cuánta anticipación debo apartar mi cita?',
                'answer'   => 'Al trabajar exclusivamente con atención personalizada y cupos limitados por día, te recomendamos escribirnos con 2 a 3 días de anticipación para coordinar el día tentativo que mejor se adapte a tu horario.',
            ],
            [
                'question' => '¿Qué pasa si no sé exactamente qué diseño hacerme?',
                'answer'   => '¡No te preocupes! No tienes que venir con una idea 100% definida. Al llegar al salón evaluamos tus uñas, el largo ideal y te asesoramos con muestras y estilos en tendencia que combinen con tus manos y tu estilo diario.',
            ],
            [
                'question' => '¿Realizan retiro de sistemas de uñas de otros salones?',
                'answer'   => 'Sí, totalmente. Realizamos un retiro seguro, paciente y no invasivo para preservar la salud de tu uña natural antes de colocar cualquier nuevo set o esmaltado.',
            ],
            [
                'question' => '¿Cómo puedo cuidar mis uñas para que me duren intactas?',
                'answer'   => 'Te recomendamos usar guantes al limpiar con químicos fuertes, hidratar tus cutículas diariamente con aceite nutritivo y evitar usarlas como herramientas para abrir objetos. ¡Con esos sencillos cuidados te durarán impecables!',
            ],
            [
                'question' => '¿Cuáles son las formas de pago?',
                'answer'   => 'Aceptamos Pago Móvil, Transferencias bancarias y Efectivo al momento de tu atención en el salón.',
            ],
        ];
    }
}
