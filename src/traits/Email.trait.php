<?php

// namespace Trait;

trait EmailTrait {

    // On aurait pu imaginer plusieurs adresse mail
    private string $email;


    /**
     * Get the value of email.
     * 
     * @return string
     */ 
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * Set the value of email.
     *
     * @param string $email
     */ 
    public function setEmail(string $email): void {
        $this->email = $email;
    }

}