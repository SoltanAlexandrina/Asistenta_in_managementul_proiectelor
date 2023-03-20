<?php
$input_file = fopen("input.txt", "r");
$output_file = fopen("output.txt", "w");

while (($line = fgets($input_file)) !== false) {

  $parts = explode(" ", trim($line));
  $last_name = $parts[0];
  $first_name = $parts[1];
  
  fwrite($output_file, $first_name . " " . $last_name . "\n");
}

fclose($input_file);
fclose($output_file);
?>



