<?php

namespace Classes;

use Trait\ArtworksTrait;
use Trait\EmailTrait;

class User extends Person {

    use EmailTrait;
    use ArtworksTrait;


    public function __construct(int $id, string $lastName, string $firstName, string $email, array $artworks) {
        parent::__construct($id, $lastName, $firstName);
        $this->setEmail($email);
        $this->setArtworks($artworks);
    }

}