<?php

namespace Teg\Types;

class InputPaidMedia implements \Teg\Types\Interface\InitObject
{
    public function __construct($request)
    {
        $request = (object) $request;
    }
}