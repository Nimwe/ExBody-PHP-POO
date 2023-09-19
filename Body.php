<?php

class Body {
    private Head $head ;
    private Tronc $tronc ;
    private Jambes $jambes ;

    public function __construct($he, $tr, $ja) {
        $this->Head = $he ;
        $this->Tronc = $tr ;
        $this->Jambes = $ja ;
}

public function setHead(string $h): Body {
    $this->Head = $h ;
    return $this ;
}
public function getHead(): Head {
    return $this->Head;
}

public function setTronc(string $t):Body {
    $this->Tronc = $t ;
    return $this;
}
public function getTronc(): string {
    return $this->Tronc;
}

public function setJambes(string $j): Body {
    $this->Jambes = $j ;
    return $this;
}
public function getJambes(): string {
    return $this->Jambes;
}
}
?>