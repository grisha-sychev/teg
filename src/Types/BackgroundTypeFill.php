<?php

namespace Teg\Types;

class BackgroundTypeFill implements \Teg\Types\Interface\InitObject
{
    public function __construct($request)
    {
        $request = (object) $request;
    }
}
