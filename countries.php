<?php
$countries = json_decode( file_get_contents( 'countries_source.json' ) );
$target = array();
foreach( $countries as $country ) {
    $target[ $country->cca2 ] = $country->{'calling-code'};
}
file_put_contents( 'countries.json', json_encode( $target ) );