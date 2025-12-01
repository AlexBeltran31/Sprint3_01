<?php
class DataManager {
    public array $athletes = [];
    public array $events = [];
    public array $results = [];

public function addAthlete(Athlete $athlete) {
    $this->athletes[] = $athlete;
}
public function addEvent(Event $event) {
    $this->events[] = $event;
}
public function addResults(ResultsData $resultsData) {
    $this->results[] = $resultsData;
}
}