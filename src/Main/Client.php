<?php

namespace Src\Main;

use Src\Services\EuroAdapter;
use Src\Services\DollarCalc;
use Src\Interfaces\ITarget;

class Client
{
    private $requestNow;
    private $dollarRequest;

    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        $euro = "&#86364;";
        echo "Euros: $euro".$this->makeAdapterRequest($this->requestNow)."<br/>";
        echo "Dollars: $" .$this->makeDollarRequest($this->dollarRequest);
    }

    private function makeAdapterRequest(ITarget $req)
    {
        return $req->requestCalc(40,50);
    }

    private function makeDollarRequest(DollarCalc $req)
    {
        return $req->requestCalc(40,50);
    }

}