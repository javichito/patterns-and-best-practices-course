<?php

class MemcachedSessionHandler implements SessionCrudInterface {

	public function destroy($sessionId)
	{
		return Memcached::destroy($sessionId);
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
