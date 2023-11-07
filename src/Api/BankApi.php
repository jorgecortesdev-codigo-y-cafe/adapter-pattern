<?php

declare(strict_types=1);

namespace App\Api;

class BankApi
{
    public function getClientInformation(): void
    {
        var_dump("Obteniendo información del cliente");
    }

    public function chargeClient(): void
    {
        var_dump("Cobrar al cliente");
    }
}
