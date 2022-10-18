<?php
//  namespace Trait;

trait TypeTrait {

    protected int $id;
    protected string $name;


    public function __construct(int $id, string $name) {
        $this->setId($id);
        $this->setName($name);
    }


    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return void
     */
    protected function setId(int $id): void {
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
     * @return void
     */
    protected function setName(string $name) {
        $this->name = $name;
    }

}