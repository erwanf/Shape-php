<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 10/06/2015
 * Time: 10:19
 */

class RegularPolygon extends Shape {

    private $radius;
    private $section;
    private $side;

    function __construct($radius, $section, $side)
    {
        $this->radius = $radius;
        $this->section = $section;
        $this->side = $side;
    }

    public function area()
    {
        $tri = new Triangle($this->radius,$this->radius,$this->section);
        return $this->area()*$this->side;
    }

    public function perimeter()
    {
        $this->section*$this->side;
    }
}