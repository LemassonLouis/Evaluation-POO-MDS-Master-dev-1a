<?php

namespace Trait;

use Classes\Artwork;
use Classes\Room;
use Exception;

trait RoomsTrait {

    /**
     * @var array<Room>
     */
    private array $rooms;


    /**
     * Get the rooms array.
     *
     * @return array<Room>
     */
    public function getRooms(): array {
        return $this->rooms;
    }

    /**
     * Get an room from the rooms array.
     *
     * @param string $id
     * @return Room|null
     */
    public function getRoom(string $id): ?Room {
        foreach($this->rooms as $room) {
            if($room->getId() == $id) return $room;
        }
        return null;
    }
    
    /**
     * Set the rooms array.
     *
     * @param array<Room> $rooms
     * @return void
     */
    protected function setRooms(array $rooms): void {
        $this->rooms = $rooms;
    }

    /**
     * Add an room to the rooms.
     *
     * @param Room $room
     * @return void
     */
    public function addRoom(Room $room): void {
        try {
            if(!in_array($room, $this->rooms)) {
                $this->rooms[] = $room;
            }
            else {
                throw new Exception('This room is already part of the exhibition/art library');
            }
        }
        catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * Remove an room from the rooms.
     *
     * @param Room $room
     * @return void
     */
    public function removeRoom(Room $room): void {
        try {
            if(in_array($room, $this->rooms)) {
                array_splice($this->rooms, array_search($room, $this->rooms), 1);
            }
            else {
                throw new Exception('This room does not part of the exhibition/art library');
            }
        }
        catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * Get all the artworks from the rooms.
     *
     * @return array<Artwork>
     */
    public function getAllRoomsArtworks(): array {
        $result = [];

        foreach($this->rooms as $room) {
            $result = $result + $room->getArtworks();
        }

        return $result;
    }

    /**
     * Get all the artworks of a room.
     *
     * @param integer $roomID
     * @return array<Artwork>
     */
    // public function getAllRoomArtworks(int $roomID): array {

    // }

    /**
     * Get an artwork from all the rooms.
     *
     * @param string $code
     * @return Artwork|null
     */
    // public function getAllRoomsArtwork(string $code): ?Artwork {

    // }

    /**
     * Get an artwork from a room.
     *
     * @param int $roomID
     * @param string $code
     * @return Artwork|null
     */
    // public function getRoomArtwork(int $roomID, string $code): ?Artwork {

    // }

    /**
     * Get all the rooms where an artwork is present.
     *
     * @return array<Rooms>
     */
    // public function getAllArtworksRooms(): array {

    // }

    /**
     * Get the room where the artwork is.
     *
     * @param int $code
     * @return Room|null
     */
    // public function getArtworkRoom(int $code): ?Room {

    // }
}