Olympic Results Management in PHP
This project simulates a small system for managing Olympic Games results, where athletes, events, and medals are recorded.
The program creates and manages objects of the following classes:
-Athlete -> represents an athlete with a name and country.
-Event -> represents a sports event with a name and date.
Result -> links an athlete to an event and the medal they won.
DataManager -> manages the lists of athletes, events, and results, and prints the final output.

Key concepts:
This project was modified having in mind the S of Solid (Single Responsability Principle), where a class should have only one reason to change. The original project only had one class (OlympicGames) and a single class should not have those many responsabilities.
