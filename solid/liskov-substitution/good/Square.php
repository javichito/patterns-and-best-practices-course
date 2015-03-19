<?php

class Square extends Box {

	public function setWidth($width)
	{
		$this->width = $width;
		$this->height = $width;
	}

	public function setHeight($height)
	{
		$this->height = $height;
		$this->width = $height;
	}

}
