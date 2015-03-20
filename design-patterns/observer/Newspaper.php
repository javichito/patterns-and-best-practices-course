<?php

class Newspaper implements SplSubject {

    protected $name;

    protected $observers = array();

    protected $content;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        if ($key = array_search($observer,$this->observers, true))
        {
            unset($this->observers[$key]);
        }
    }

    public function breakOutNews($content)
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent()
    {
        return "{$this->content} ({$this->name})";
    }

    public function notify()
    {
        foreach ($this->observers as $value)
        {
            $value->update($this);
        }
    }
}
