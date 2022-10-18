<?php

class Commissioner extends Person {

    use PhoneTrait;


    public function __construct(int $id, string $lastName, string $firstName, int $phone) {
        parent::__construct($id, $lastName, $firstName);
        $this->setPhone($phone);
    }

}