<?php

interface SessionCrudInterface {

	public function destroy($sessionId);

	public function read($sessionId);

	public function write($sessionId, $sessionData);

}
