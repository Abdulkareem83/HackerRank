<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
    $students_array[] = $n;
    $threshold_array[] = $k;
    $a_temp = fgets($handle);
    $a[$a0] = explode(" ",$a_temp);
    array_walk($a[$a0],'intval');
}

$test_cases = $a;
$i = 0;
foreach( $test_cases as $arrived_times ){
    $students = $students_array[$i];
    $threshold = $threshold_array[$i];
   
        $arrived_number = get_arrived_students($arrived_times);
        if ($arrived_number == $threshold  || $arrived_number > $threshold) {
            echo "NO" . "\r\n";
        } else {
            echo "YES" . "\r\n";
        }

    $i++;
}
/**
	 * to get the number of arrived students
	 * @param array $arrive_times
	 * @return integer $arrived_number
     */

function get_arrived_students($arrived_times) {
    $arrived_number = 0;
    foreach ($arrived_times as $key => $value) {
        if ($value == 0 || $value < 0 ) {
            $arrived_number++;
        }
    }

    return $arrived_number;
}
?>
