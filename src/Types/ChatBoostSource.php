<?php

namespace Teg\Types;

class ChatBoostSource implements \Teg\Types\Interface\InitObject
{
    public function __construct($request)
    {
        $request = (object) $request;
    }
}