<?php

class Mailer {

	public static function send($to, $subject, $body)
	{
		$message  = "Sending email to: {$to}\n";
		$message .= "{$subject}\n";
		$message .= $body;

		echo $message;

		return true;
	}

}
