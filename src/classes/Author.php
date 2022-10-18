<?php

// require_once("Person.php");
// require_once("traits/Email.trait.php");
// require_once("traits/Phone.trait.php");
// require_once("traits/Artwork.trait.php");

// use Trait\EmailTrait;
// use Trait\PhoneTrait;
// use Trait\ArtworkTrait;

class Author extends Person {

    use EmailTrait;
    use PhoneTrait;

    public function __construct(int $id, string $lastName, string $firstName, string $email, int $phone) {
        $this->setId($id);
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setEmail($email);
        $this->setPhone($phone);
    }

}