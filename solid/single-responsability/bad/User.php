<?php

require 'helper.php';

class User {

	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public static function create($params)
	{
		if ( ! array_key_exists('name', $params))
		{
			throw new Exception;
		}

		$user = new self($params['name']);

		$to = 'jh@mambo.pe';
		$subject = 'New user has arrived';
		$message = "<b>Name</b>: {$user->name}";

		sendMail($to, $subject, $message);

		return $user;
	}

}
