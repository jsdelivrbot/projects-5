<?php

$fname = $_FILES['name']['name'];

if (isset($fname)) {
    
    $fileextarr = explode('.', $fname);
    $fileext = $fileextarr[count($fileextarr) - 1];
    $filename = 'dji.' . $fileext;
    $fpath = "";
    $file_tmp = $_FILES['name']['tmp_name'];
    $expensions = array("csv");

    if (in_array($fileext, $expensions) === false) {
        $errors = "extension not allowed, please choose a CSV file.";
    }

    if (empty($errors) == true) {
        unlink($fpath . $filename);
        move_uploaded_file($file_tmp, $fpath . $filename);
        echo "Success";
    } else {
        print_r($errors);
    }
}
?>