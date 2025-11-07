<?php
class Result {
    public Athlete $athlete;
    public Event $event;
    private string $medal;

public function __construct(Athlete $athlete, Event $event, string $medal) {
    $this->athlete = $athlete;
    $this->event = $event;
    $this->medal = $medal;
}
public function getMedal(): string {
    return $this->medal;
}
public static function printResults(DataManager $dataManager) {
    echo "Olympic Games Results:\n";
    foreach ($dataManager->events as $event) {
        echo "Event: " . $event->getEventName() . " on " . $event->getEventDate() . "\n";
        foreach ($dataManager->results as $result) {
            if ($result->event->getEventName() === $event->getEventName()) {
                echo "- " . $result->athlete->getAthleteName() . " from " . $result->athlete->getAthleteCountry() . " won " . $result->medal . "\n";
            }
        }
        echo "\n";
    }
}
}