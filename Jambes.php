<?php

class Jambes {
    private string $type ;
   
public function __construct(string $type) {
   $this->Type = $type;
}

public function setType(string $type): void {
    $this->Type= $type;
}
public function getType ():string {
    return $this->Type;
}
}
?>