<?php

class Reader implements SplObserver {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        echo "{$this->name} is reading breakout news " . $subject->getContent() . "\n";
    }

}
