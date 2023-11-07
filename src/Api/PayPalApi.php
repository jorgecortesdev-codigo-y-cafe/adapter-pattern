<?php

declare(strict_types=1);

namespace App\Api;

class PayPalApi
{
    public function getClientData(): void
    {
        var_dump("Obteniendo info del cliente de PayPal");
    }

    public function pay(): void
    {
        var_dump("Cobrando al cliente de PayPal");
    }
}
