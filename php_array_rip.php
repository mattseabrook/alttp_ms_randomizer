<?php

// Check if the filename is provided as an argument
if ($argc < 2) {
    echo "Error: Please specify the JSON filename as an argument.\n";
    exit(1);
}

// The filename from the command line arguments
$filename = $argv[1];

// Your configuration array
$configArray = array(
    // ... your array data ...
);

// Function to save array to JSON file
function saveArrayToJsonFile($array, $filename) {
    // Convert the array to JSON
    $json_data = json_encode($array, JSON_PRETTY_PRINT);

    // Check if the json_encode() was successful
    if ($json_data === false) {
        echo "Error: json_encode error.\n";
        return false;
    }

    // Write the JSON to a file
    if (file_put_contents($filename, $json_data) === false) {
        echo "Error: Could not write to file '$filename'.\n";
        return false;
    }

    echo "Data successfully written to '$filename'.\n";
    return true;
}

// Call the function with your array and filename
$result = saveArrayToJsonFile($configArray, $filename);

// Exit with a non-zero value if the function call was not successful
if ($result === false) {
    exit(1);
}

?>
