<?php

namespace Trait;

trait PhoneTrait {

    // On aurait pu imaginer plusieurs numéro de téléphone
    private int $phone;


    /**
     * Get the value of phone.
     * 
     * @return int
     */ 
    public function getPhone(): int {
        return $this->phone;
    }

    /**
     * Set the value of phone.
     *
     * @param int $phone
     */ 
    public function setPhone(int $phone): void {
        $this->phone = $phone;
    }

}