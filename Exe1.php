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

$max_count = max($counters);

$most_frequent_numbers = array();
foreach ($counters as $number => $count) {
  if ($count == $max_count) {
    $most_frequent_numbers[] = $number;
  }
}

if (count($most_frequent_numbers) == 1) {
  echo "Cel mai frecvent număr este: " . $most_frequent_numbers[0] . "\n";
} else {
  echo "Cele mai frecvente numere sunt: " . implode(", ", $most_frequent_numbers) . "\n";
}
?>