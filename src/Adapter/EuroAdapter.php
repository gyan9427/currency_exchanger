<?php

namespace Src\Adapter;

use Src\Services\EuroCalc;
use Src\Interfaces\ITarget;

class EuroAdapter extends EuroCalc implements ITarget
{
    public function __construct()
    {
        $this->requester();
    }

    function requester()
    {
        $this->rate = .8111;
        return $this->rate;
    }
}