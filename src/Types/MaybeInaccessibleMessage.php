<?php

namespace Teg\Types;

class MaybeInaccessibleMessage implements \Teg\Types\Interface\InitObject
{
    private $message;
    private $inaccessibleMessage;

    public function __construct($request)
    {
        $request = (object) $request;
        $this->message = new Message($request->message ?? null);
        $this->inaccessibleMessage = new InaccessibleMessage($request->inaccessibleMessage ?? null);
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getInaccessibleMessage()
    {
        return $this->inaccessibleMessage;
    }
}
