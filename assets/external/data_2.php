<?php

//var_dump($_POST);

// ---------------------------------------------------------------------------------------------------------------------
// Here comes your script for loading from the database.
// ---------------------------------------------------------------------------------------------------------------------

// Remove this example in your live site -------------------------------------------------------------------------------

ob_start();
include 'data.php';
ob_end_clean();

$newData = [];

if($_POST["keyword"] == "" && $_POST["minSalary"] == "" && $_POST["maxSalary"] == ""){
    echo json_encode($data);
}
elseif( $_POST["keyword"] &&  $_POST["minSalary"] &&  $_POST["maxSalary"]){
    for( $i=0; $i < count($data); $i++){
        if( !empty( $data[$i]['title'] )
            && is_integer(strpos(strtolower($data[$i]['title']),  strtolower($_POST['keyword'])))
            || is_integer(strpos(strtolower($data[$i]['company']),  strtolower($_POST['keyword'])))
            && $data[$i]['min_monthly_salary'] >= $_POST['minSalary']
            && $data[$i]['max_monthly_salary'] <= $_POST['maxSalary']
        ){

            array_push( $newData, $data[$i] );
        }
    }
    echo json_encode($newData);
}
elseif( $_POST["keyword"] &&  $_POST["minSalary"] ){
    for( $i=0; $i < count($data); $i++){
        if( !empty( $data[$i]['title'] )
            && is_integer(strpos(strtolower($data[$i]['title']),  strtolower($_POST['keyword'])))
            || is_integer(strpos(strtolower($data[$i]['company']),  strtolower($_POST['keyword'])))
            && $data[$i]['min_monthly_salary'] >= $_POST['minSalary']
        ){

            array_push( $newData, $data[$i] );
        }
    }
    echo json_encode($newData);
}
elseif( $_POST["keyword"] &&  $_POST["maxSalary"] ){
    for( $i=0; $i < count($data); $i++){
        if( !empty( $data[$i]['title'] )
            && is_integer(strpos(strtolower($data[$i]['title']),  strtolower($_POST['keyword'])))
            || is_integer(strpos(strtolower($data[$i]['company']),  strtolower($_POST['keyword'])))
            && $data[$i]['max_monthly_salary'] <= $_POST['maxSalary']
        ){

            array_push( $newData, $data[$i] );
        }
    }
    echo json_encode($newData);
}
elseif( $_POST["keyword"] ){
    for( $i=0; $i < count($data); $i++){
        //echo $data[$i]['title'] . ' = ' . $_POST['keyword'] . ' = '. strpos($data[$i]['title'],  $_POST['keyword']). ';'.PHP_EOL;
        if( !empty( $data[$i]['title'] )
            && is_integer(strpos(strtolower($data[$i]['title']),  strtolower($_POST['keyword'])))
            || is_integer(strpos(strtolower($data[$i]['company']),  strtolower($_POST['keyword'])))
        ){

            array_push( $newData, $data[$i] );
        }
    }
    echo json_encode($newData);
}


elseif ( $_POST["category"] ){
    for( $i=0; $i < count($data); $i++){
        if( strcasecmp($data[$i]['category'], $_POST['category'] ) == 0 ){
            array_push( $newData, $data[$i] );
        }
    }
    echo json_encode($newData);
}

// End of example ------------------------------------------------------------------------------------------------------