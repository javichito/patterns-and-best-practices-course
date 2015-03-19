<?php

class Rectangle {

	protected $width;
	protected $height;

	public function setWidth($width)
	{
		$this->width = $width;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function setHeight($height)
	{
		$this->height = $height;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function getArea()
	{
		return $this->width * $this->height;
	}

}
