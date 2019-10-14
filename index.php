<?php
header("Access-Control-Allow-Origin: *");

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
  'secret' => '6LdDiL0UAAAAAGtvR0k5QvtBBvnwqME3_JKfUvk4',
  'token' => $_POST['token']
);

$options = array(
  'http' => array(
    'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
    'method' => 'POST',
    'content' => http_build_query( $data )
  )
);

$context = stream_context_create( $options );
$response = get_file_contents( $url, false, $context );

echo json_encode( $response );
