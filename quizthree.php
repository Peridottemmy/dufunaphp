<?php
$temperature = "20°C";
switch ($temperature) {
    case "<=20°C":
    echo "It is really cold today!";
    break;
    case ">20°C and <30°C":
    echo "The weather is just perfect!";
    break;
    case ">=30°C and <40°C":
    echo "It is so hot today!";
    break;
    case ">=40°C":
    echo "Am i in the sahara desert?";
    break;
    default:
    echo "The weather is  neither hot nor cold!";
}
?>