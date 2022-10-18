<?php

namespace Classes;

use Trait\EmailTrait;
use Trait\PhoneTrait;
use Trait\ArtworkTrait;

class Author extends Person {

    use EmailTrait;
    use PhoneTrait;
    use ArtworkTrait;

    public function __construct(int $id, string $lastName, string $firstName, string $email, int $phone, array $artworks = []) {
        parent::__construct($id, $lastName, $firstName);
        $this->setEmail($email);
        $this->setPhone($phone);
        $this->setArtworks($artworks);
    }

}