<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 10/06/2015
 * Time: 10:05
 */

class Triangle extends Shape {

    private $side1;
    private $side2;
    private $side3;

    public function __construct($s1,$s2,$s3){
        $this->side1 = $s1;
        $this->side2 = $s2;
        $this->side3 = $s3;
    }

    public function area()
    {
        $p = $this->perimeter();
       return sqrt(($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3))/16);
    }

    public function perimeter()
    {
        return $this->side1+$this->side2+$this->side3;
    }
}