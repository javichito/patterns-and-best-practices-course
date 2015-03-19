<?php

class User {

	public $name;

	public function __construct($name, EventDispatcher $dispatcher)
	{
		$this->name = $name;

		$dispatcher->dispatch($this);
	}

	public static function create($params, EventDispatcher $dispatcher)
	{
		if ( ! array_key_exists('name', $params))
		{
			throw new Exception;
		}

		$user = new self($params['name'], $dispatcher);

		return $user;
	}

}
