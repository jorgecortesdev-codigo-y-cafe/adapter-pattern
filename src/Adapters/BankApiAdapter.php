<?php

declare(strict_types=1);

namespace App\Adapters;

use App\Api\BankApi;
use App\PaymentProcessor;

class BankApiAdapter implements PaymentProcessor
{
    protected BankApi $bankApi;

    public function __construct(BankApi $bankApi)
    {
        $this->bankApi = $bankApi;
    }

    public function getClientData(): void
    {
        $this->bankApi->getClientInformation();
    }

    public function charge(): void
    {
        $this->bankApi->chargeClient();
    }
}
