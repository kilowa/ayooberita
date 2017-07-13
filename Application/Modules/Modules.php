<?php
session_start();
error_reporting(1);
if (defined('E_DEPRECATED')) {
        error_reporting(E_ALL & ~(E_DEPRECATED|E_NOTICE|E_STRICT));
} else {
        error_reporting(E_ALL & ~E_NOTICE);
}
date_default_timezone_set("Asia/Jakarta");

define('DS', DIRECTORY_SEPARATOR);
define('BASE_URL', dirname(__FILE__) . DS);

$system_folder = 'System';
$application_folder = 'Application';

define('CON_DIR',       BASE_URL . $application_folder.'/Config/');
define('SYS_DIR',	BASE_URL . '/System/');
define('CONTR_DIR',	BASE_URL . $application_folder. '/Controller/');
define('MOD_DIR',	BASE_URL . $application_folder.'/Modules/');
define('MDL_DIR',	BASE_URL . $application_folder.'/Model/');
define('LAY_DIR',	BASE_URL . $application_folder.'/Layout/');
define('VEN_DIR',	BASE_URL . $application_folder.'/Vendor/');
define('CORE_DIR',	BASE_URL . '/System/Core/');
define('VW_DIR',	BASE_URL . $application_folder.'/Views/');
define('LIB_DIR',	BASE_URL . $application_folder.'/Libraries/');
include"../Common.php";
include"../Mydb.php";
//include(CON_DIR . 'Common.php');
//include(CON_DIR . 'Mydb.php');
include(CON_DIR . 'Session.php');
?>
