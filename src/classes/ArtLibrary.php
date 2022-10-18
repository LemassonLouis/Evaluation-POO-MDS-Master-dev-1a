<?php

namespace Classes;

use Exception;
use Trait\RoomsTrait;

class ArtLibrary {

    use RoomsTrait;


    private int $id;
    private string $city;
    private array $exhibitions;


    public function __construct(int $id, string $city, array $exhibitions = [], array $rooms = []) {
        $this->setId($id);
        $this->setCity($city);
        $this->setExhibitions($exhibitions);
        $this->setRooms($rooms);
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
     * Get the value of city.
     * 
     * @return string
     */ 
    public function getCity(): string {
        return $this->city;
    }

    /**
     * Set the value of city.
     *
     * @param string $city
     */ 
    private function setCity($city): void {
        $this->city = $city;
    }

    /**
     * Get the value of exhibitions.
     * 
     * @return array<Exhibition>
     */ 
    public function getExhibitions(): array {
        return $this->exhibitions;
    }

    /**
     * Get an exhibition from the exhibitions array.
     *
     * @param string $id
     * @return Exhibition|null
     */
    public function getExhibition(string $id): ?Exhibition {
        foreach($this->exhibitions as $exhibition) {
            if($exhibition->getId() == $id) return $exhibition;
        }
        return null;
    }
    
    /**
     * Set the exhibitions array.
     *
     * @param array<Exhibition> $exhibitions
     * @return void
     */
    protected function setExhibitions(array $exhibitions): void {
        $this->exhibitions = $exhibitions;
    }

    /**
     * Add an exhibition to the exhibitions.
     *
     * @param Exhibition $exhibition
     * @return void
     */
    public function addExhibition(Exhibition $exhibition): void {
        try {
            if(!in_array($exhibition, $this->exhibitions)) {
                $this->exhibitions[] = $exhibition;
            }
            else {
                throw new Exception('This exhibition is already part of the art library');
            }
        }
        catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * Remove an exhibition from the exhibitions.
     *
     * @param Exhibition $exhibition
     * @return void
     */
    public function removeExhibition(Exhibition $exhibition): void {
        try {
            if(in_array($exhibition, $this->exhibitions)) {
                array_splice($this->exhibitions, array_search($exhibition, $this->exhibitions), 1);
            }
            else {
                throw new Exception('This exhibition does not part of the art library');
            }
        }
        catch (Exception $e) {
            echo $e;
        }
    }

}