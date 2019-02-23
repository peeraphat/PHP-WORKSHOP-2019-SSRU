<?php

    $host   = 'localhost';
    $user   = 'root';
    $pwd    = '';
    $dbName = 'webboard';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pwd);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>