<?php

class Head {
    private string $yeux ;
    private string $nez ;
    private string $bouche;


public function __construct(string $yeux, string $nez, string $bouche) {
    $this->Yeux = $yeux;
    $this->Nez = $nez ;
    $this->Bouche = $bouche;
}

public function setYeux(string $yeux): void {
    $this->Yeux = $yeux;
}
public function getYeux ():string {
    return $this->Yeux;
}

public function setNez(string $nez): void {
    $this->Nez = $nez;
}
public function getnez ():string {
    return $this->Nez;
}

public function setBouche(string $bouche): void {
    $this->Bouche = $bouche;
}
public function getBouche ():string {
    return $this->Bouche;
}
}














?>