<?php
$input_string = file_get_contents("input.txt");

$numbers = explode(" ", trim($input_string));

$even_numbers = array();
$odd_numbers = array();
foreach ($numbers as $number) {
  if ($number % 2 == 0) {
    $even_numbers[] = $number;
  } else {
    $odd_numbers[] = $number;
  }
}

$output_file = fopen("output.txt", "w");
fwrite($output_file, implode(" ", $even_numbers) . " " . implode(" ", $odd_numbers) . "\n");
fclose($output_file);
?>