<?php

/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "roshanadmin";
$password   = "password@1234";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );