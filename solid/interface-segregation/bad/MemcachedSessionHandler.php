<?php

class MemcachedSessionHandler implements SessionHandlerInterface {

	public function close()
	{
		// empty
	}

	public function destroy($sessionId)
	{
		return Memcached::destroy($sessionId);
	}

	public function gc($maxLiftetime)
	{
		// empty
	}

	public function open($savePath, $name)
	{
		// empty
	}

	public function read($sessionId)
	{
		return Memcached::read($sessionId);
	}

	public function write($sessionId, $sessionData)
	{
		return Memcached::write($sessionId, $sessionData);
	}

}
