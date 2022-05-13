<?php

/**
 * Configuration for database connection
 *
 */

$host       = "roshanadmin305.mysql.database.azure.com";
$username   = "roshanadmin@roshanadmin305";
$password   = "password@1234";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
