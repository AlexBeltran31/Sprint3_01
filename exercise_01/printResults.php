<?php
class printResults {
    public static function printResults(DataManager $dataManager) {
        echo "Olympic Games Results:\n";

        foreach ($dataManager->events as $event) {
            echo "Event: " . $event->getEventName() . " on " . $event->getEventDate() . "\n";
            
            foreach ($dataManager->results as $result) {
                if ($result->event->getEventName() === $event->getEventName()) {
                    echo "- " . $result->athlete->getAthleteName() . " from " . $result->athlete->getAthleteCountry() . " won " . $result->getMedal() . "\n";
                }
            }
            echo "\n";
        }
    }
}