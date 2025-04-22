<?php

// star for xlxs
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
// end for xlxs

include "dbconnection.php";

if (isset($_FILES['excel_file']) && $_FILES['excel_file']['error'] == 0) { 
    $excelFile = $_FILES['excel_file'];
    // $tempName=$excelFile['tmp_name'];
    $extension=pathinfo($excelFile['name'],PATHINFO_EXTENSION);
    $name=$excelFile['name'];
    // echo "<pre>";
    // print_r($_FILES['excel_file']);exit;

    $allowedExcelTypes =["xlsx", "xls","csv","XLSX", "XLS","CSV"];
    if (in_array( $extension, $allowedExcelTypes)) {

     $filePath = 'uploadImage/excel/' . basename($excelFile['name']);
     move_uploaded_file($excelFile['tmp_name'], $filePath);

 try { 
    // Load the spreadsheet
    $spreadsheet = IOFactory::load($filePath);

    // Convert entire sheet to array
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    // echo "<pre>";
    // print_r(  $sheetData);exit;

    // Filter rows where all cells are empty
     $filteredData = array_filter($sheetData, function ($row) {
    // Remove row if all values are empty
     return array_filter($row); // returns false if all cells are empty
      });

       // Reindex array
       $filteredData = array_values($filteredData);
        // echo "<pre>";
        // print_r(  $filteredData);exit;
        foreach($filteredData as $key=>$value){

            $first_name=$value["1"];
            $last_name=$value["2"];
            $gender=$value["3"];
            $country=$value["4"];
            $age=$value["5"];
            $register_date=$value["6"];
            $user_id=$value["7"];
            $insertValues[] = "('$first_name', '$last_name', '$gender', '$country', $age, '$register_date', $user_id)";

        
        }


        if (!empty( $insertValues)) {
            $sql =mysqli_query($conn ,"INSERT INTO import (first_name, last_name, gender, country, age, register_date, user_id) VALUES " . implode(",", $insertValues) );

            if ($sql){
                echo "Excel data imported successfully!";
            } else {
                echo "No data to insert.";
            }
        } 

  } catch (Exception $e) {
        echo "Error loading Excel file: " . $e->getMessage() . "<br><br>";
     }



   }else {
    echo "Invalid file type. Only Excel and csv files are allowed.<br><br>";
     }




}else {
    echo "plz selext excel or csv file<br><br>";
     }


?>