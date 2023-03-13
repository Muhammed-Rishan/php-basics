<?php
$speed = 150;
if($speed < 70){
  echo "Normal speed";   //code executed if condition is true
}
elseif($speed > 70 && $speed < 100)   
{
  echo "You are burning extra fuel";     //code executed if condition is true
}
else {
    // when speed is greater than 100
  echo "Its dangerous";    //code executed if both condition are false..
}

?>