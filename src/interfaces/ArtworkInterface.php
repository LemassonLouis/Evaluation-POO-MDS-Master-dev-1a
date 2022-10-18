<?php

namespace Interfaces;

use Classes\Artwork;

interface ArtworkInterface {

    public function addArtwork(Artwork $artwork): void;

}