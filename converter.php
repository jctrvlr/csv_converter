<?php
// include array functions
include 'array.php';

function csv_converter($csv_file) {
  $array = array_map('str_getcsv', file($csv_file));
  return $array;
}
$csv_file = 'state_table.csv';
$array = csv_converter($csv_file);

//instantiate htmlarray class
$obj = new htmlArray;
echo $obj->getArray($array);

?>
