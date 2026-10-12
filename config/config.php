<?php

declare(strict_types=1);

return [
    'app' => [
        'name'        => 'Mari Nails Spa',
        'tagline'     => 'Belleza, Precisión y Cuidado de Uñas en Barquisimeto',
        'subtagline'  => 'Manicura Boutique & Sistemas Esculpidos por Mariana Torres',
        'description' => 'Salón boutique especializado en manicura rusa, pedicura spa y sistemas de uñas esculpidas en Barquisimeto por Mariana Torres. Atención exclusiva previa cita.',
        'base_url'    => null, // Auto-detectado dinámicamente
        'year'        => date('Y'),
        'logo'        => 'images/mari-nails-logo-instagram.jpg',
        'favicon'     => 'favicon.png',
    ],

    'specialist' => [
        'name'        => 'Mariana Torres',
        'title'       => 'Técnico Profesional de Salón',
        'evolution'   => '8 Años de Evolución',
        'quote'       => 'Este arte no solo me dio una profesión, me regaló confianza, paciencia y a clientas maravillosas que hoy son parte de mi corazón.',
        'bio'         => 'A lo largo de 8 años de evolución, aprendizaje constante y dedicación en el arte de las uñas, Mariana ha consolidado en Barquisimeto un espacio boutique donde la técnica y la calidez van de la mano. En Mari Nails Spa, cada cita es un momento reservado exclusivamente para ti, combinando diseño de alta gama, salud ungueal y protocolos rigurosos de bioseguridad.',
        'images'      => [
            'hero'       => 'images/mariana-shoot-4.jpg',
            'specialist' => 'images/mariana-shoot-1.jpg',
            'warm'       => 'images/mariana-shoot-2.jpg',
            'precision'  => 'images/mariana-shoot-3.jpg',
        ],
    ],

    'whatsapp' => [
        'number'          => '584120549526',
        'display'         => '+58 412-0549526',
        'default_message' => '¡Hola Mariana! 🌸 Deseo agendar una cita en Mari Nails Spa',
        'link'            => 'https://wa.me/584120549526?text=%C2%A1Hola%20Mariana!%20%F0%9F%8C%B8%20Deseo%20agendar%20una%20cita%20en%20Mari%20Nails%20Spa',
    ],

    'instagram' => [
        'handle'   => '@marinails.spa_',
        'username' => 'marinails.spa_',
        'url'      => 'https://instagram.com/marinails.spa_',
    ],

    'location' => [
        'city'        => 'Barquisimeto, Estado Lara',
        'zone'        => 'Zona Este de Barquisimeto',
        'maps_url'    => 'https://maps.app.goo.gl/xGjdVrHkoanV1gEPA',
        'note'        => 'Espacio privado con estacionamiento seguro. La dirección exacta se confirma al reservar.',
    ],

    'schedule' => [
        'days'        => 'Lunes a Sábado',
        'hours'       => '8:30 AM – 6:00 PM',
        'mode'        => 'Atención Exclusiva Previa Cita',
    ],
];
