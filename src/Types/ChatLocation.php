<?php

namespace Teg\Types;

class ChatLocation implements \Teg\Types\Interface\InitObject
{
    public function __construct($request)
    {
        $request = (object) $request;
    }
}
