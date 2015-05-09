<?php
/*
 * Include the Garden framework used by Vanilla.
 */
// Define constants like the way that Vanilla does in its index.php file.
define('APPLICATION', 'Vanilla');
define('APPLICATION_VERSION', '2.1.10');
define('DS', '/');
define('PATH_ROOT', '.\vanilla');
// Change PATH_ROOT to the path to your forum.
// Display all PHP errors for development purposes.
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR);
ini_set('display_errors', 'on');
ini_set('track_errors', 1);
ob_start();
// Buffer the output of the code below.
require_once (PATH_ROOT . '/bootstrap.php');
// Require the bootstrap for the framework used by Vanilla.
$Dispatcher = Gdn::Dispatcher();
// Declare an alias for the dispatcher.
// Set up the dispatcher.
$EnabledApplications = Gdn::ApplicationManager() -> EnabledApplicationFolders();
$Dispatcher -> EnabledApplicationFolders($EnabledApplications);
$Dispatcher -> PassProperty('EnabledApplications', $EnabledApplications);
// Mimic the DiscussionsController().
$Controller = new DiscussionsController();
Gdn::Controller($Controller);
Gdn::Request() -> WebRoot('');
ob_end_flush();
// Stop and send the buffer for the code above.
/*
 * The above code is to include Garden framework used by Vanilla, so you can use its functions.
 * You can put your code in this file. See the example below.
 * You can also make a separate file with your code and include this file by a require() above all.
 */
?>