<?php

namespace Classes;

use Trait\EmailTrait;
use Trait\PhoneTrait;
use Trait\ArtworksTrait;

class Author extends Person {

    use EmailTrait;
    use PhoneTrait;
    use ArtworksTrait;

    public function __construct(int $id, string $lastName, string $firstName, string $email, int $phone, array $artworks = []) {
        parent::__construct($id, $lastName, $firstName);
        $this->setEmail($email);
        $this->setPhone($phone);
        $this->setArtworks($artworks);
    }

}