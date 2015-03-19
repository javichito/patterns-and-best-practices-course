<?php

function sendMail($to, $subject, $body)
{
	echo "Sending email...\n\n";
	echo "To: {$to}\n";
	echo "{$subject}\n\n";
	echo "{$body}";
}
