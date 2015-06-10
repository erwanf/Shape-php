<?php

Class Circle extends Shape
{
	private $radius;

    public function __construct($r){
        $this->radius = $r;
    }

    public function area()
    {
        return pi()*pow($this->radius,2);
    }

    public function perimeter()
    {
        return pi()*2*$this->radius;
    }

    public function getRadius(){
		return $this->radius;
	}

    public function setRadius($radius){
		$this->radius = $radius;
	}
}