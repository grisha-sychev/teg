<?php

namespace Teg\Types;

class Chat implements \Teg\Types\Interface\InitObject
{
    private int $id;
    private string $type;
    private ?string $title;
    private ?string $username;
    private ?string $first_name;
    private ?string $last_name;
    private ?bool $is_forum;

    public function __construct($request)
    {
        $request = (object) $request;
        $this->id = $request->id;
        $this->type = $request->type;
        $this->title = $request->title ?? null;
        $this->username = $request->username ?? null;
        $this->first_name = $request->first_name ?? null;
        $this->last_name = $request->last_name ?? null;
        $this->is_forum = $request->is_forum ?? null;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function isForum(): ?bool
    {
        return $this->is_forum;
    }
}
