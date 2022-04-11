<?php
$i=0;
while($i<100){
    $i++;
    echo'<br>';
if($i%3==0 && $i%5!=0){
    echo"Fizz!!";
}
if($i%5==0 && $i%3!=0){
    echo"Buzz!!";
}
if($i%3==0 && $i%5==0){
    echo"FizzBuzz!!!!";
}
elseif($i%3!=0 && $i%5!=0){
    echo"$i";
}
}
?>