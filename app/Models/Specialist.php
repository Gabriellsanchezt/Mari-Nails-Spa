<?php

declare(strict_types=1);

namespace App\Models;

class Specialist
{
    public static function getInfo(): array
    {
        return [
            'name'       => config('specialist.name', 'Mariana Torres'),
            'role'       => config('specialist.title', 'Técnico Profesional de Salón'),
            'evolution'  => config('specialist.evolution', '8 Años de Evolución'),
            'quote'      => config('specialist.quote', 'Este arte no solo me dio una profesión, me regaló confianza, paciencia y a clientas maravillosas que hoy son parte de mi corazón.'),
            'bio'        => config('specialist.bio'),
            'image'      => config('specialist.images.specialist', 'assets/img/mariana-shoot-1.jpeg'),
            'hero_image' => config('specialist.images.hero', 'assets/img/mariana-shoot-4.jpeg'),
            'pillars'    => [
                [
                    'icon'  => 'fa-solid fa-shield-halved',
                    'title' => 'Bioseguridad Rigurosa',
                    'desc'  => 'Uso de autoclave, sobres esterilizados individuales y limas descartables por clienta.',
                ],
                [
                    'icon'  => 'fa-solid fa-droplet',
                    'title' => 'Salud Ungueal Primero',
                    'desc'  => 'Técnicas no abrasivas que preservan la integridad y el lecho natural de tus uñas.',
                ],
                [
                    'icon'  => 'fa-solid fa-clock-rotate-left',
                    'title' => 'Puntualidad Absoluta',
                    'desc'  => 'Tu tiempo es oro. Atendemos con agenda estricta para que disfrutes sin esperas.',
                ],
                [
                    'icon'  => 'fa-solid fa-comments',
                    'title' => 'Asesoría Personalizada',
                    'desc'  => 'Evaluamos el tono de tu piel, forma de dedos y estilo de vida antes de diseñar.',
                ],
            ],
        ];
    }
}
