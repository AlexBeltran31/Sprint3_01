<?php
class Event {
    private string $name;
    private string $date;

public function __construct(string $name, string $date) {
    $this->name = $name;
    $this->date = $date;
}
public function getEventName(): string {
    return $this->name;
}
public function getEventDate(): string {
    return $this->date;
}
}