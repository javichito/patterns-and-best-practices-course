<?php

class Singleton {

	protected static $instance;

	public static function fabricate()
	{
		if ( ! isset(self::$instance))
		{
			self::$instance = new self();
		}

		return self::$instance;
	}

}
