<?php

declare(strict_types=1);

namespace App;

class Store
{
    protected PaymentProcessor $api;

    public function __construct(PaymentProcessor $api)
    {
        $this->api = $api;
    }

    public function process(): void
    {
        $this->api->getClientData();
        $this->api->charge();
    }
}
