<?php

interface SessionConnectionInterface {

	public function open($savePath, $name);

	public function close();

}
