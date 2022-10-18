<?php

namespace Classes;

use Trait\ArtworksTrait;

class Room {

    use ArtworksTrait;


    private int $id;
    private string $name;
    private bool $isCinemaRoom;

    
    public function __construct(int $id, string $name, bool $isCinemaRoom = false, array $artworks) {
        $this->setId($id);
        $this->setName($name);
        $this->setIsCinemaRoom($isCinemaRoom);
        $this->setArtworks($artworks);
    }


    /**
     * Get the value of id.
     * 
     * @return int
     */ 
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the value of id.
     *
     * @param int $id
     */ 
    private function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * Get the value of name.
     * 
     * @return string
     */ 
    public function getName(): string {
        return $this->name;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     */ 
    public function setName(string $name): void {
        $this->name = $name;
    }

    /**
     * Get the value of isCinemaRoom.
     * 
     * @return bool
     */ 
    public function getIsCinemaRoom(): bool {
        return $this->isCinemaRoom;
    }

    /**
     * Set the value of isCinemaRoom.
     *
     * @param bool $isCinemaRoom
     */ 
    private function setIsCinemaRoom(bool $isCinemaRoom): void {
        $this->isCinemaRoom = $isCinemaRoom;
    }

}