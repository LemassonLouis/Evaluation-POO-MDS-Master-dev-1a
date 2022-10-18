<?php

namespace Classes;

use Trait\RoomsTrait;

class Exhibition {

    use RoomsTrait;


    private int $id;
    private string $theme;
    // On aurait pu imaginer qu'il y ai plusieurs commissaire
    private Commissioner $commissioner;


    public function __construct(int $id, string $theme, Commissioner $commissionner, array $rooms) {
        
    }


    /**
     * Get the value of id.
     * 
     * @return int
     */ 
    public function getId(): int  {
        return $this->id;
    }

    /**
     * Set the value of id.
     *
     * @param int $if
     */ 
    private function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * Get the value of theme.
     * 
     * @return string
     */ 
    public function getTheme(): string {
        return $this->theme;
    }

    /**
     * Set the value of theme.
     *
     * @param string $theme
     */ 
    private function setTheme(string $theme): void {
        $this->theme = $theme;
    }

    /**
     * Get the value of commissioner.
     * 
     * @return Commssioner
     */ 
    public function getCommissioner(): Commissioner {
        return $this->commissioner;
    }

    /**
     * Set the value of commissioner.
     *
     * @param Commissioner $commissioner
     */ 
    public function setCommissioner($commissioner): void {
        $this->commissioner = $commissioner;
    }

}