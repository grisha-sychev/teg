<?php

namespace Teg\Types;

class MenuButtonCommands implements \Teg\Types\Interface\InitObject
{
    public function __construct($request)
    {
        $request = (object) $request;
    }
}
