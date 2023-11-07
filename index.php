<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Adapters\BankApiAdapter;
use App\Adapters\PayPalApiAdapter;
use App\Api\BankApi;
use App\Api\PayPalApi;
use App\Store;

// store -> interface -> adapter -> api
$bankAdapter = new BankApiAdapter(new BankApi());
$payPalAdapter = new PayPalApiAdapter(new PayPalApi());

$store = new Store ($bankAdapter);
$store->process();

$store = new Store ($payPalAdapter);
$store->process();

