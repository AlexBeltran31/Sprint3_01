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
}