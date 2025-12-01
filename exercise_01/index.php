<?php
require 'resultsData.php';
require 'printResults.php';
require 'DataManager.php';
require 'athlete.php';
require 'event.php';

$dataManager = new DataManager();

$athlete1 = new Athlete("Usain Bolt", "Jamaica");
$athlete2 = new Athlete("Michael Phelps", "USA");
$event1 = new Event("100m Sprint", "2024-08-01");
$event2 = new Event("Swimming", "2024-08-02");

$dataManager->addAthlete($athlete1);
$dataManager->addAthlete($athlete2);
$dataManager->addEvent($event1);
$dataManager->addEvent($event2);

$result1 = new ResultsData($athlete1, $event1, "Gold");
$result2 = new ResultsData($athlete2, $event2, "Gold");

$dataManager->addResults($result1);
$dataManager->addResults($result2);

printResults::printResults($dataManager);