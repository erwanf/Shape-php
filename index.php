<?php

include "rectangle.php";
include "circle.php";
include "shapeTest.php";
include "Triangle.php";

$rectangle = new Rectangle(10, 20);
echo "l'aire du rectangle est de : ".$rectangle->area(); echo "<br>";
echo "le perimetre du rectangle est de : ".$rectangle->perimeter();echo "<br>";
$ShapeTest = new ShapeTest();
$ShapeTest->printAreaOf($rectangle); echo "<br>";
$tri = new Triangle(3,3,3);
echo " l'aire du triangle : ".$tri->area();