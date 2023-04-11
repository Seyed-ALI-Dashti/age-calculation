<?php 

// Age calculation with the accuracy of days.
// In the future with minute accuracy


function time_diff($year, $month, $day){

$year1 = date('Y');
$month1 = date('m');
$day1 = date('d');
// --------------------------------------------------------
// day diff :
if($day1 < $day){
    $month1--;
    // $dayDiff = ($day1 + 30) - $day;
    if($month1 < 7 && $month == 12 && $year % 4 == 3){
        $dayDiff = ($day1 + 31) - $day;
    }
    elseif($month1 < 7 && $month == 12){
        $dayDiff = ($day1 + 30) - $day;
    }
    elseif($month1 < 7){
        $dayDiff = ($day1 + 31) - $day;
    }
    elseif($month1 > 7 && $month1 < 12){
        $dayDiff = ($day1 + 30) - $day;
    }
    elseif ($month1 == 12 && $year1 % 4 == 3){
        $dayDiff = ($day1 + 30) - $day;
    }
    else{
        $dayDiff = ($day1 + 29) - $day;
    }
}
else{
    $dayDiff = $day1 - $day;
}
// echo $dayDiff;

// --------------------------------------------------------
// mounth diff :
if($month1 < $month){
    $year1--;
    $monthDiff = ($month1 + 12) - $month;
}
else{
    $monthDiff = $month1 - $month;
}
// echo $monthDiff;

// --------------------------------------------------------

// year diff :
$yearDiff = $year1 - $year;

$result = array('year' => $yearDiff  , 'month' => $monthDiff , 'day' => $dayDiff);

return $result;
}
// ********************************************************

$a = time_diff(2000, 6, 1);

// var_dump($a);

if($a['year'] > 15){
    echo "your age is ok ✔";
}
else{
    echo "youre age is not 18 years " . '✖';
}

echo '<br><br>' . 'your age is (';

echo $a['year'] . ' years , '; echo $a['month'] . ' months , '; echo $a['day'] . ' days' . ')';
