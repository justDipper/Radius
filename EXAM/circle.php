<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="circle.css">
    <title>PRELIM EXAM</title>
</head>
</html>

<!-----------------------------------END of HTMl----------------------------------------------->

<?php
$radius = $_POST['radius'];

class Circle{
    private $Pi = 3.141592653589793238462643383279502884197;
    
    public $radius;
    public function Area($radius){
        $Area = $this->Pi *($radius * $radius);
        echo "Area: ".$Area;
    } 
    
    public function Circumference($radius){
        $Circumference = 2 * $this->Pi * $radius;
        echo "<br>Circumference: ".$Circumference;
    } 
}

$circleObj = new Circle();
$circleObj->Area($radius);
$circleObj->Circumference($radius);

?>