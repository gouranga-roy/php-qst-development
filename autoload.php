<?php
/**
 * Include Files
 */
if(file_exists(__DIR__ . "/config/connection.php")) {
    require_once __DIR__ . "/config/connection.php";
}

if(file_exists(__DIR__ . "/app/models.php")) {
    require_once __DIR__ . "/app/models.php";
}

?>