<?php

declare(strict_types=1);

namespace Tests;

use App\Adapters\BankApiAdapter;
use App\Adapters\PayPalApiAdapter;
use App\Api\BankApi;
use App\Api\PayPalApi;
use App\Store;
use PHPUnit\Framework\TestCase;

class StoreTest extends TestCase
{
    /** @test */
    public function it_can_use_a_bank_adapter(): void
    {
        $store = new Store(new BankApiAdapter(new BankApi()));

        ob_start();
        $store->process();
        $dump = ob_get_clean();

        $expectedDump = <<<EOTXT
string(35) "Obteniendo información del cliente"
string(17) "Cobrar al cliente"

EOTXT;

        $this->assertEquals($expectedDump, $dump);
    }

    /** @test */
    public function it_can_use_a_paypal_adapter(): void
    {
        $store = new Store(new PayPalApiAdapter(new PayPalApi()));

        ob_start();
        $store->process();
        $dump = ob_get_clean();

        $expectedDump = <<<EOTXT
string(37) "Obteniendo info del cliente de PayPal"
string(37) "Obteniendo info del cliente de PayPal"

EOTXT;

        $this->assertEquals($expectedDump, $dump);
    }
}
