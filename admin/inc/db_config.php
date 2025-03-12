<?php

$serverName = "localhost";
$userName = "root";
$password = "webkul";
$database = "hotel_db";

$conn = mysqli_connect($serverName, $userName, $password, $database);
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
// echo("Connection Successfull");

function filtration($data)
{
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function selectAll($table)
{
    $conn = $GLOBALS['conn'];
    $res = mysqli_query($conn, "SELECT * FROM $table");
    return $res;
}

function select($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if($stmt = mysqli_prepare($conn,$sql)){
        mysqli_stmt_bind_param($stmt, $datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    }
    else{
        die("Query cannot be Prepare - Select");
    }
}

function update($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if($stmt = mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt))
        {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Update");
        }
    }
    else{
        die("Query cannot be Prepared - update");
    }
}

function insert($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if($stmt = mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt))
        {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Insert");
        }
    }
    else{
        die("Query cannot be Prepared - Insert");
    }
}

function delete($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if($stmt = mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt))
        {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Deleted");
        }
    }
    else{
        die("Query cannot be Prepared - Deleted");
    }
}

?>