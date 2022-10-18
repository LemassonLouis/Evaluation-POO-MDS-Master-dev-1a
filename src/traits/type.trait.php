<?php

trait Type {

    protected int $id;
    protected string $name;

    function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    function getId(): int {
        return $this->id;
    }

    function getName(): string {
        return $this->name;
    }

}