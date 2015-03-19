<?php

class Memcached {

	public static function read($sessionId)
	{
		echo "Reading from session with ID: {$sessionId}\n";
	}

	public static function write($sessionId, $sessionData)
	{
		echo "Writting to session with ID: {$sessionId}\n";
	}

	public static function destroy($sessionId)
	{
		echo "Destroying session with ID: {$sessionId}\n";
	}

}
