<?php

declare(strict_types=1);

namespace App\Adapters;

use App\Api\PayPalApi;
use App\PaymentProcessor;

class PayPalApiAdapter implements PaymentProcessor
{
    private PayPalApi $payPalApi;

    public function __construct(PayPalApi $payPalApi)
    {
        $this->payPalApi = $payPalApi;
    }

    public function getClientData(): void
    {
        $this->payPalApi->getClientData();
    }

    public function charge(): void
    {
        $this->payPalApi->getClientData();
    }
}
