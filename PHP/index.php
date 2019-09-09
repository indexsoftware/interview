<?php

$csv = 'a,b,c,"d,To quote John \"He was great\"",f,g,';
$parsedArray = parseCsv($csv, ',');

// TEST
var_dump($parsedArray);
if (@count($parsedArray) === 7) {
    echo "OK\n";
} else {
    echo "FAIL\n";
}
if (@$parsedArray[3] === 'd,To quote John \"He was great\"') {
    echo "OK\n";
} else {
    echo "FAIL\n";
}

/**
 * Parses a CSV string by delimiter
 * @param  string $csv
 * @param  string $delimiter
 * @return array of elements
 */
function parseCsv(string $csv, string $delimiter)
{
    //TODO: implement this function
    return array();
}