<?php

namespace Classes;

use Exception;
use Interfaces\ArtworkInterface;
use Trait\ArtworksTrait;
use Trait\EmailTrait;

class User extends Person implements ArtworkInterface {

    use EmailTrait;
    use ArtworksTrait;


    public function __construct(int $id, string $lastName, string $firstName, string $email, array $artworks) {
        parent::__construct($id, $lastName, $firstName);
        $this->setEmail($email);
        $this->setArtworks($artworks);
    }


    public function addArtwork(Artwork $artwork): void {
        try {
            if(in_array($artwork, $this->artworks)) {
                throw new Exception('This artwork is already part of the room/already belongs to this person');
            }

            $statusName = $artwork->getStatus()->getName();
            if($statusName != "Cataloged" && $statusName != "Borrowed") {
                throw new Exception("This artwork is not available to take");
            }

            // Il va me manquer la verification du poid si c'est une sculpture

            $this->artworks[] = $artwork;
            // Il va me manquer le changement de statut vers "emprunté"
        }
        catch (Exception $e) {
            echo $e;
        }
    }

}