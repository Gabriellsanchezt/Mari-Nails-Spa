<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

class BookingController extends Controller
{
    public function store(Request $request): void
    {
        $name    = trim((string) $request->input('client_name', ''));
        $phone   = trim((string) $request->input('client_phone', ''));
        $date    = trim((string) $request->input('tentative_date', ''));
        $details = trim((string) $request->input('desired_service', ''));

        if ($name === '' || $details === '') {
            $this->json([
                'status'  => 'error',
                'message' => 'Por favor indica tu nombre y lo que deseas realizarte.',
            ], 422);
            return;
        }

        $phoneRecipient = config('whatsapp.number', '584120549526');
        
        $msg = "🌸 *¡Hola Mariana! Deseo agendar una cita en Mari Nails Spa* 🌸\n\n";
        $msg .= "👤 *Nombre:* {$name}\n";
        if ($phone !== '') {
            $msg .= "📱 *Teléfono:* {$phone}\n";
        }
        if ($date !== '') {
            $msg .= "📅 *Día tentativo:* {$date}\n";
        }
        $msg .= "✨ *Lo que deseo realizarme:*\n{$details}\n\n";
        $msg .= "*(Solicitud enviada desde marinailsspa.com)*";

        $waUrl = 'https://wa.me/' . $phoneRecipient . '?text=' . rawurlencode($msg);

        $this->json([
            'status'       => 'success',
            'whatsapp_url' => $waUrl,
            'message'      => 'Solicitud procesada correctamente.',
        ]);
    }
}
