<?php

Class ShapeTest
{
	
	public function printAreaOf(Shape $shape){
		echo $shape->area();
	}

	public function printPerimeterOf(Shape $shape){
		echo $shape->perimeter();
	}


}