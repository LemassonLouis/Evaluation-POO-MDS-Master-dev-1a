<?php

abstract class Person {
    
    protected int $id;
    protected string $lastName;
    protected string $firstName;

    
    public function __construct(int $id, string $lastName, string $firstName) {
        $this->setId($id);
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
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
    protected function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * Get the value of lastName.
     * 
     * @return string
     */ 
    public function getLastName(): string {
        return $this->lastName;
    }

    /**
     * Set the value of lastName.
     *
     * @param string $lastName
     */ 
    protected function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    /**
     * Get the value of firstName.
     * 
     * @return string
     */ 
    public function getFirstName(): string {
        return $this->firstName;
    }

    /**
     * Set the value of firstName.
     *
     * @param string $firstName
     */ 
    protected function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

}
