<?php
include "shape.php";

Class Rectangle extends Shape
{
    /**************************************************
     * ******************* attribut     ***************
     *************************************************/
    private $width;
    private $height;


    /**************************************************
     * ******************* Construct    ***************
     *************************************************/
    /**
     * @param $width
     * @param $height
     */
    public function __construct($width, $height){
		$this->width = $width;
		$this->height = $height;
	}

    /**************************************************
     * ******************* methods      ***************
     *************************************************/

    public function area()
    {
        $result = $this->height*$this->width;
        return $result;
    }

    public function perimeter()
    {
        return ($this->width + $this->height)*2;
    }
/**************************************************
 * ******************* getter setter***************
 *************************************************/
    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
		return $this->height;
	}

    public function setWidth($width){
		$this->width = $width;
	}

    public function setHeight($height){
		$this->height = $height;
	}

}