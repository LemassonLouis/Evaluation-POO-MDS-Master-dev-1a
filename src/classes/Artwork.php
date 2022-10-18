<?php

class Artwork {
    
    private string $code;
    private string $description;
    /**
     * @var array<Field>
     */
    private array $fields;
    // On aurait pu imaginer plusieurs auteurs
    private ?Author $author;
    // On aurait pu imaginer plusieurs propriétaires
    private ?Person $owner;
    // On autait pu immaginer plusieurs statuts
    private ?Status $status;
    

    public function __construct(string $code, string $description, array $fields = [], ?Author $author = null, ?Person $owner = null, ?Status $status = null) {
        $this->setCode($code);
        $this->setDescription($description);
        $this->setFields($fields);
        $this->author = $author;
        $this->owner = $owner;
        $this->status = $status;
    }
    
    
    /**
     * Get the value of code.
     *
     * @return string
     */
    public function getCode(): string {
        return $this->code;
    }

    /**
     * Set the value of code.
     *
     * @param string $code
     * @return void
     */
    private function setCode(string $code): void {
        $this->code = $code;
    }
    
    /**
     * Get the value of descirption.
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }
    
    /**
     * Set the value of description.
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void {
        $this->description = $description;
    }

    /**
     * Get the value of fields.
     * 
     * @return array<Field>
     */ 
    public function getFields(): array {
        return $this->fields;
    }

    public function getField(int $id): ?Field {
        foreach($this->fields as $field) {
            if($field->getId() == $id) return $field;
        }
        return null;
    }

    /**
     * Set the values of fields.
     *
     * @param array<Field> $fields
     * @return void
     */
    private function setFields(array $fields): void {
        $this->fields = $fields;
    }

    /**
     * Add a field to the fields.
     *
     * @param Field $field
     * @return void
     */
    public function addField(Field $field): void {
        try {
            if(!in_array($field, $this->fields)) {
                $this->fields[] = $field;
            }
            else {
                throw new Exception('This field is already part of the artwork');
            }
        }
        catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * Remove an field from the fields.
     *
     * @param Field $field
     * @return void
     */
    public function removeField(Field $field): void {
        try {
            if(in_array($field, $this->fields)) {
                array_splice($this->fields, array_search($field, $this->fields), 1);
            }
            else {
                throw new Exception('This field does not part of the artwork');
            }
        }
        catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * Get the author.
     * 
     * @return Author
     */ 
    public function getAuthor(): Author {
        return $this->author;
    }

    /**
     * Set the author.
     *
     * @param Author $author
     * @return void
     */
    private function setAuthor(Author $author): void {
        $this->author = $author;
    }
    
    /**
     * Get the owner.
     * 
     * @return Person
     */ 
    public function getOwner(): Person {
        return $this->owner;
    }

    /**
     * Set the owner.
     *
     * @param Person $owner
     * @return void
     */
    private function setOwner(Person $owner): void {
        $this->owner = $owner;
    }

    /**
     * Get the status.
     * 
     * @return Status
     */ 
    public function getStatus(): Status {
        return $this->status;
    }

    /**
     * Set the status.
     *
     * @param Status $status
     */ 
    public function setStatus(Status $status) {
        $this->status = $status;
    }

}
