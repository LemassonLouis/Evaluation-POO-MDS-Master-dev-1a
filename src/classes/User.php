<?php

class User extends Person {

    use EmailTrait;


    public function __construct(int $id, string $lastName, string $firstName, string $email) {
        parent::__construct($id, $lastName, $firstName);
        $this->setEmail($email);
    }

}