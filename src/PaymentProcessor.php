<?php

declare(strict_types=1);

namespace App;

interface PaymentProcessor
{
    public function getClientData(): void;
    public function charge(): void;
}
