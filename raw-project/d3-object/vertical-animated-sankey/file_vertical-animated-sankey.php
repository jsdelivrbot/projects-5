<?php

$fname = $_FILES['name']['name'];
//var_dump($fname);die;
if (isset($fname)) {
    //$name = 'weightedtree_federal_budget';
    $fileextarr=explode('.',$fname);
    $fileext=$fileextarr[count($fileextarr)-1];
    $filename = 'titanic.'.$fileext;
    $fpath = "";
    $file_tmp = $_FILES['name']['tmp_name'];
    //$file_type = $_FILES['name']['type'];
    
    //$file_ext = strtolower(end(explode('.', $_FILES['name']['name'])));

    $expensions = array("csv");

    if (in_array($fileext, $expensions) === false) {
        $errors = "extension not allowed, please choose a CSV file.";
    }

//    if ($file_size > 2097152) {
//        $errors[] = 'File size must be excately 2 MB';
//    }

    if (empty($errors) == true) {
        unlink($fpath . $filename);
        move_uploaded_file($file_tmp,$fpath . $filename);
        echo "Success";
    } else {
        print_r($errors);
    }
}
?>