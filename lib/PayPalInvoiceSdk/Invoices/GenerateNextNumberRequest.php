<?php

namespace PayPalInvoiceSdk\Invoices;

use PayPalHttp\HttpRequest;

class GenerateNextNumberRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v2/invoicing/generate-next-invoice-number?", "POST");
        $this->headers["Content-Type"] = "application/json";
    }


    public function payPalPartnerAttributionId($payPalPartnerAttributionId)
    {
        $this->headers["PayPal-Partner-Attribution-Id"] = $payPalPartnerAttributionId;
    }
    public function prefer($prefer)
    {
        $this->headers["Prefer"] = $prefer;
    }
}
