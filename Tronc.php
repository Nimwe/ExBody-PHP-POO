<?php

class Tronc {
    private string $genre ;

public function __construct(string $genre) {
    $this->Genre = $genre;
}

public function setGenre(string $genre): void {
    $this->Genre = $genre;
}
public function getGenre ():string {
    return $this->Genre;
}
}
?>