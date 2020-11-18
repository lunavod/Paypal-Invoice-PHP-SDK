<?php

namespace PayPalInvoiceSdk\Invoices;

use PayPalHttp\HttpRequest;

class SendInvoiceRequest extends HttpRequest
{
    function __construct($invoiceId)
    {
        parent::__construct("/v2/invoicing/invoices/{invoice_id}/send?", "POST");
        $this->path = str_replace("{invoice_id}", urlencode($invoiceId), $this->path);
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
