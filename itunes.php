<?php 

$curl_handle = curl_init();
curl_setopt( $curl_handle, CURLOPT_URL, 'http://itunes.apple.com/search?term=raffael+patricio+de+souza&country=br&entity=software' );
curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true ); // Fetch the contents too
$str = curl_exec( $curl_handle ); // Execute the request
curl_close( $curl_handle );

echo $str;

?>