<?php

namespace App\Enums;

enum EstadoCitaEnum: string
{
    case Pendiente = 'pendiente';
    case Confirmada = 'confirmada';
    case Cancelada = 'cancelada';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}