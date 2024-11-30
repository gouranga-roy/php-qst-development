<?php
/**
 * Create a PDO Connection
 */

function connect() {
    try {
        return new PDO("mysql:host=localhost;dbname=devzon", "root", "");
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
