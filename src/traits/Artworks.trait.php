<?php

namespace Trait;

use Classes\Artwork;
use Exception;

trait ArtworksTrait {
    
    /**
     * @var array<Artwork>
     */
    private array $artworks;
    
    
    /**
     * Get the artworks array.
     *
     * @return array<Artwork>
     */
    public function getArtworks(): array {
        return $this->artworks;
    }

    /**
     * Get an artwork from the artworks array.
     *
     * @param string $code
     * @return Artwork|null
     */
    public function getArtwork(string $code): ?Artwork {
        foreach($this->artworks as $artwork) {
            if($artwork->getCode() == $code) return $artwork;
        }
        return null;
    }
    
    /**
     * Set the artworks array.
     *
     * @param array<Artwork> $artworks
     * @return void
     */
    protected function setArtworks(array $artworks): void {
        $this->artworks = $artworks;
    }

    /**
     * Add an artwork to the artworks.
     *
     * @param Artwork $artwork
     * @return void
     */
    public function addArtwork(Artwork $artwork): void {
        try {
            if(!in_array($artwork, $this->artworks)) {
                throw new Exception('This artwork is already part of the room/already belongs to this person');
            }

            $this->artworks[] = $artwork;
        }
        catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * Remove an artwork from the artworks.
     *
     * @param Artwork $artwork
     * @return void
     */
    public function removeArtwork(Artwork $artwork): void {
        try {
            if(in_array($artwork, $this->artworks)) {
                throw new Exception('This artwork does not part of the room/does not belongs to this person');
            }

            array_splice($this->artworks, array_search($artwork, $this->artworks), 1);
            // Il va me manquer le changement de status vers "stocké"
        }
        catch (Exception $e) {
            echo $e;
        }
    }

}