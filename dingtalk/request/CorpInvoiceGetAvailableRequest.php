<?php


class CorpInvoiceGetAvailableRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "alitrip.btrip.invoice.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}