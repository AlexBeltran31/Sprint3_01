<?php
class InstrumentPlayer {
    private Guitar $guitar;
    private Drums $drums;
    private Piano $piano;

public function __construct(Guitar $guitar, Drums $drums, Piano $piano) {
    $this->guitar = $guitar;
    $this->drums = $drums;
    $this->piano = $piano;
}
public function play() {
    echo "Hey this is my new band... Me and Myself!\n";
    $this->guitar->play();
    $this->drums->play();
    $this->piano->play();
}
}