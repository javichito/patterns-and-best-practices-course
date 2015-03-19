<?php

require 'User.php';
require 'Mailer.php';
require 'EventDispatcher.php';

$dispatcher = new EventDispatcher();

// Send email
$dispatcher->attach(function($user)
{
	$to = 'jh@mambo.pe';
	$subject = 'New user created';
	$message = "<b>Name:</b> {$user->name} \n\n";

	Mailer::send($to, $subject, $message);
});

// Track stats
$dispatcher->attach(function($user)
{
	echo "Sending event to Google Analytics for User... {$user->name}\n\n";
});

// Create new user
$user = User::create(['name' => 'Javier Hidalgo'], $dispatcher);
