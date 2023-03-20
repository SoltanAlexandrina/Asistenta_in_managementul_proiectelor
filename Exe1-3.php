<?php
$input_string = file_get_contents("input.txt");

$numbers = explode(" ", trim($input_string));

$counters = array();
foreach ($numbers as $number) {
  if (isset($counters[$number])) {
    $counters[$number]++;
  } else {
    $counters[$number] = 1;
  }
}

$output_file = fopen("output.txt", "w");
foreach ($counters as $number => $count) {
  if ($count >= 2) {
    fwrite($output_file, $number . "\n");
  }
}
fclose($output_file);
?>