<?php

class EventDispatcher {

	protected $listeners = [];

	public function dispatch($param)
	{
		foreach ($this->listeners as $listener)
		{
			$listener($param);
		}
	}

	public function attach($listener)
	{
		array_push($this->listeners, $listener);
	}

}
