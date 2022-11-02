<?php
$dayNumber = 5;

switch($dayNumber){
    case 0:
        echo "Monday";
        break;
    case 1:
        echo "Tuesday";
        break;
    case 2:
        echo "Wednesday";
        break;
    case 3:
        echo "Thursday";
        break;
    case 4:
        echo "Friday";
        break;
    case 5:
        echo "Saturday";
        break;
    case 6:
        echo "Sunday";
        break;
    default:
        echo "Not a valid day";
}
echo PHP_EOL;