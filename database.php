<!DOCTYPE html>

<?php
    $dsn = 'mysql:host=localhost;dbname=locations';
    $username = 'loc_user';
    $password = 'pa55word';

    try 
    {
        $db = new PDO($dsn, $username, $password);
    } 
    
    catch (PDOException $e) 
    {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>

