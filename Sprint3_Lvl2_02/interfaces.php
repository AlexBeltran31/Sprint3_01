<?php
interface MachineBasics {
    public function turnOn(): void;
    public function turnOff(): void;
}

interface Heat {
    public function heat(): void;
}

interface Wash {
    public function wash(): void;
}

/* interface Cool {
     public function cool(): void;
}*/