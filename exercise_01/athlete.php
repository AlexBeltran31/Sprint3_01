<?php
class Athlete {
    private string $name;
    private string $country;

public function __construct(string $name, string $country) {
    $this->name = $name;
    $this->country = $country;
}
public function getAthleteName(): string {
    return $this->name;
}
public function getAthleteCountry(): string {
    return $this->country;
}
}