<?php
class FizzBuzz
{
public $status;
public function __construct($number)
{
$isFizz = $number % 3 == 0;
$isBuzz = $number % 5 == 0;
if($isBuzz == 0) {
$this->status =  "FizzBuzz";
} elseif ($isFizz == 0) {
$this->status = "Fizz";
} elseif ($isBuzz == 0) {
$this->status = "Buzz";
} else {
$this->status =  $number."";
}
}
public function __toString()
{
return $this->status;
}
}