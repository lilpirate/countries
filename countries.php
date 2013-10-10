<?php
$countries = json_decode( file_get_contents( 'countries.json' ) );
$target = array();
foreach( $countries as $country ) {
    $target[ $country->cca2 ] = $country->{'calling-code'};
}
file_put_contents( 'countries_2.json', json_encode( $target ) );