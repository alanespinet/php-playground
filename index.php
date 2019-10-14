<?php
header("Access-Control-Allow-Origin: *");

$data = array(
  'name' => 'alan',
  'age' => 35,
  'gender' => 'M'
);

echo json_encode( $data );
